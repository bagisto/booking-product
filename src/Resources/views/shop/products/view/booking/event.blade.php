@inject ('bookingSlotHelper', 'Webkul\BookingProduct\Helpers\EventTicket')

<div class="grid grid-cols-1 gap-6">
    <div class="flex gap-3">
        <span class="icon-calendar text-2xl"></span>

        <div class="grid grid-cols-1 gap-1.5 text-sm font-medium">
            <p class="text-[#6E6E6E]">
                @lang('booking::app.shop.products.view.types.booking.event-on') :
            </p>

            <div>
                {!! $bookingSlotHelper->getEventDate($bookingProduct) !!}
            </div>
        </div>
    </div>

    <!-- Event Vue Component -->
    <v-event-tickets />
</div>

@pushOnce('scripts')
    <script type="text/x-template" id="v-event-tickets-template">
        <div class="grid grid-cols-1 gap-4">
            <div class="text-xl font-medium">
                @lang('booking::app.shop.products.view.booking.event.book-your-ticket')
            </div>

            <div
                class="flex justify-between border-b border-slate-500 last:border-b-0"
                v-for="(ticket, index) in tickets"
                :class="tickets?.length - index == 1 ? '' : 'pb-4'"
            >
                <div class="grid gap-1.5">
                    <p v-text="ticket.name"></p>
    
                    <div v-if="ticket.original_formatted_price">
                        <p
                            class="mr-1.5 text-[#6E6E6E] line-through"
                            v-text="ticket.original_formatted_price"
                        >
                        </p>
    
                        <p
                            class="text-lg text-[#6E6E6E]"
                            v-text="ticket.formatted_price_text"
                        >
                        </p>
                    </div>
    
                    <p
                        v-else
                        class="text-[#6E6E6E]"
                        v-text="ticket.formatted_price_text"
                    >
                    </p>
    
                    <div
                        class="text-[#6E6E6E]"
                        v-text="ticket.description"
                    >
                    </div>
                </div>
    
                <div class="place-items-end">
                    <x-shop::quantity-changer
                        class="gap-x-4 w-max rounded-xl py-2.5 px-4 mt-5 !border-[#E9E9E9]"
                        ::name="'booking[qty][' + ticket.id + ']'"
                        rules="required|numeric|min_value:0"
                        ::value="defaultQty"
                        ::min-quantity="defaultQty"
                    />
                </div>
            </div>
        </div>

    </script>

    <script type="module">
        app.component('v-event-tickets', {
            template: '#v-event-tickets-template',

            data() {
                return {
                    tickets: @json($bookingSlotHelper->getTickets($bookingProduct)),
                }
            },

            computed: {
                defaultQty() {
                    return this.tickets.length > 1 ? 0 : 1;
                }
            }
        });
    </script>
@endpushOnce