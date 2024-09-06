<?php

namespace Webkul\BookingProduct\DataGrids\Admin;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Webkul\DataGrid\DataGrid;

class BookingDataGrid extends DataGrid
{
    /**
     * Prepare query builder.
     *
     * @return \Illuminate\Database\Query\Builder
     */
    public function prepareQueryBuilder()
    {
        $queryBuilder = DB::table('bookings')
            ->leftJoin('orders', 'bookings.order_id', '=', 'orders.id')
            ->select(
                'bookings.id as id',
                'orders.id as order_id',
                'bookings.from_format as from_format',
                'bookings.to_format as to_format',
                'bookings.qty as qty',
                'orders.created_at as created_at'
            );

        $this->addFilter('id', 'bookings.id');
        $this->addFilter('order_id', 'orders.id');
        $this->addFilter('qty', 'bookings.qty');
        $this->addFilter('created_at', 'orders.created_at');

        return $queryBuilder;
    }

    /**
     * Add columns.
     *
     * @return void
     */
    public function prepareColumns()
    {
        $this->addColumn([
            'index'      => 'id',
            'label'      => trans('booking::app.admin.sales.bookings.index.datagrid.id'),
            'type'       => 'string',
            'searchable' => false,
            'sortable'   => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index'      => 'order_id',
            'label'      => trans('booking::app.admin.sales.bookings.index.datagrid.order-id'),
            'type'       => 'string',
            'searchable' => true,
            'sortable'   => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index'      => 'qty',
            'label'      => trans('booking::app.admin.sales.bookings.index.datagrid.qty'),
            'type'       => 'string',
            'searchable' => true,
            'sortable'   => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index'      => 'from_format',
            'label'      => trans('booking::app.admin.sales.bookings.index.datagrid.from'),
            'type'       => 'string',
            'searchable' => true,
            'sortable'   => true,
            'filterable' => false,
            'closure'    => function ($row) {
                return Carbon::createFromTimeString($row->from_format)->format('d F, Y H:i A');
            },
        ]);

        $this->addColumn([
            'index'      => 'to_format',
            'label'      => trans('booking::app.admin.sales.bookings.index.datagrid.to'),
            'type'       => 'string',
            'searchable' => true,
            'sortable'   => true,
            'filterable' => false,
            'closure'    => function ($row) {
                return Carbon::createFromTimeString($row->to_format)->format('d F, Y H:i A');
            },
        ]);

        $this->addColumn([
            'index'      => 'created_at',
            'label'      => trans('booking::app.admin.sales.bookings.index.datagrid.created-date'),
            'type'       => 'datetime',
            'searchable' => true,
            'sortable'   => true,
            'filterable' => true,
        ]);
    }

    /**
     * Prepare actions.
     *
     * @return void
     */
    public function prepareActions()
    {
        $this->addAction([
            'icon'   => 'icon-view',
            'title'  => trans('booking::app.admin.sales.bookings.index.datagrid.view'),
            'method' => 'GET',
            'url'    => function ($row) {
                return route('admin.sales.orders.view', $row->order_id);
            },
        ]);
    }
}
