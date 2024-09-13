@if (
    $product->type == 'booking'
    && $bookingProduct = app('\Webkul\BookingProduct\Repositories\BookingProductRepository')->findOneByField('product_id', $product->id)
)
    <!-- Vue Component -->
    <v-booking-information></v-booking-information>

    @pushOnce('scripts')
        <script
            type="text/x-template"
            id="v-booking-information-template"
        >
            <div class="mt-6 grid w-full max-w-[470px] grid-cols-1 gap-6">
                @if ($bookingProduct->location)
                    <div class="flex gap-4">
                        <span class="icon-location text-2xl"></span>

                        <div class="grid grid-cols-1 gap-1.5 text-sm font-medium">
                            <p class="text-[#6E6E6E]">
                                @lang('booking::app.shop.products.view.types.booking.location')
                            </p>

                            <div class="grid grid-cols-1 gap-4">
                                <p>{{ $bookingProduct->location }}</p>

                                <a
                                    href="https://maps.google.com/maps?q={{ $bookingProduct->location }}"
                                    target="_blank"
                                    class="w-fit text-blue-600"
                                >
                                    @lang('booking::app.shop.products.view.types.booking.view-on-map')
                                </a>
                            </div>
                        </div>
                    </div>
                @endif

                <div class="w-full max-w-[470px]">
                    @include ('booking::shop.products.view.types.booking.' . $bookingProduct->type, ['bookingProduct' => $bookingProduct])
                </div>
            </div>
        </script>

        <script type="module">
            app.component('v-booking-information', {
                template: '#v-booking-information-template',

            });
        </script>
    @endpushOnce
@endif
