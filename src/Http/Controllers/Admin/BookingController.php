<?php

namespace Webkul\BookingProduct\Http\Controllers\Admin;

use Carbon\Carbon;
use Webkul\BookingProduct\DataGrids\Admin\BookingDataGrid;
use Webkul\BookingProduct\Http\Controllers\Controller;
use Webkul\BookingProduct\Repositories\BookingRepository;

class BookingController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(protected BookingRepository $bookingRepository) {}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        if (request()->ajax()) {
            return app(BookingDataGrid::class)->toJson();
        }

        return view('booking::admin.sales.bookings.index');
    }

    /**
     * Returns a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function get()
    {
        if (! request('view_type')) {
            return app(BookingDataGrid::class)->toJson();
        }

        $startDate = request()->get('startDate')
            ? Carbon::createFromTimeString(request()->get('startDate').' 00:00:01')
            : Carbon::now()->startOfWeek()->format('Y-m-d H:i:s');

        $endDate = request()->get('endDate')
            ? Carbon::createFromTimeString(request()->get('endDate').' 23:59:59')
            : Carbon::now()->endOfWeek()->format('Y-m-d H:i:s');

        $bookings = $this->bookingRepository->getBookings([strtotime($startDate), strtotime($endDate)])
            ->map(function ($booking) {
                $booking['start'] = Carbon::createFromTimestamp($booking->start)->format('Y-m-d h:i A');

                $booking['end'] = Carbon::createFromTimestamp($booking->end)->format('Y-m-d h:i A');

                $booking->total = core()->formatBasePrice($booking->total);

                return $booking;
            });

        return response()->json([
            'bookings' => $bookings,
        ]);
    }
}
