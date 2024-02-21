<div class="mt-7">
    <v-calendar />
</div>

@push('scripts')
    <script
        type="text/x-template"
        id="v-calendar-template"
    >
        <div class="calendar-container">
            <vue-cal
                hide-view-selector
                :watchRealTime="true"
                :twelveHour="true"
                :class="'w-full h-full'"
                :disable-views="['years', 'year', 'month', 'day']"
                :events="events"
                @ready="getBookings"
                @view-change="getBookings"
                :on-event-click="onEventClick"
            >
                <template #event="{ event, view }">
                    <div
                        class="relative h-full border-l-4 rounded-l text-left text-xs cursor-pointer"
                        :class="[
                            event.status === 'pending' ? 'bg-yellow-100 border-yellow-500' :
                            event.status === 'completed' ? 'bg-green-100 border-green-500' :
                            event.status === 'closed' ? 'bg-blue-100 border-blue-500' :
                            event.status === 'canceled' ? 'bg-red-100 border-red-500' :
                            'bg-green-100 border-green-600',
                            event.time_difference ? 'p-2' : 'p-1'
                        ]"
                        @click="showTooltip"
                    >
                        <span>
                            @{{ new Date(event.start).toLocaleTimeString('en-US', { hour12: true, hour: 'numeric', minute: '2-digit' }) }} - @{{ new Date(event.end).toLocaleTimeString('en-US', { hour12: true, hour: 'numeric', minute: '2-digit' }) }}
                        </span>

                        <br/>

                        <span
                            v-if="event.time_difference"
                            v-text="event.full_name"
                        >
                        </span>
                    </div>
                </template>
            </vue-cal>
        </div>

        <x-booking::modal ref="myModal">
            <!-- Modal Header -->
            <x-slot:header class="!py-0">
                <div class="text-lg font-medium text-[#1F2937]">
                    @lang('booking::app.admin.sales.bookings.calendar.booking-detailes')
                </div>
            </x-slot>

            <!-- Modal Content -->
            <x-slot:content>
                <div class="grid text-sm font-normal">
                    <div class="grid grid-cols-1 gap-2.5 pb-4 border-b">
                        <div class="grid grid-cols-[100px_auto] gap-2">
                            <div
                                class="text-gray-500"
                                v-text="'@lang('booking::app.admin.sales.bookings.calendar.booking-date')'"
                            >
                            </div>

                            <div
                                class="font-medium text-[#1F2937]"
                                v-text="new Date(event.created_at).toLocaleDateString('en-GB', { day: '2-digit', month: 'short', year: 'numeric' })"
                            >
                            </div>
                        </div>

                        <div class="grid grid-cols-[100px_auto] gap-2">
                            <div
                                class="text-gray-500"
                                v-text="'@lang('booking::app.admin.sales.bookings.calendar.time-slot')'"
                            >
                            </div>

                            <div class="font-medium text-[#1F2937]">
                                @{{ new Date(event.start).toLocaleTimeString('en-US', { hour12: true, hour: 'numeric', minute: '2-digit' }) }} - @{{ new Date(event.end).toLocaleTimeString('en-US', { hour12: true, hour: 'numeric', minute: '2-digit' }) }}
                            </div>
                        </div>
                    </div>
    
                    <div class="grid grid-cols-[80px_80px_auto] gap-2.5 py-4 border-b">
                        <div class="grid grid-cols-1 gap-2">
                            <div
                                class="text-gray-500"
                                v-text="'@lang('booking::app.admin.sales.bookings.calendar.order-id')'"
                            >
                            </div>
    
                            <div class="font-medium text-[#1F2937]">
                                #@{{ event.order_id }}
                            </div>
                        </div>
    
                        <div class="grid grid-cols-1 gap-2">
                            <div    
                                class="text-gray-500"
                                v-text="'@lang('booking::app.admin.sales.bookings.calendar.price')'"
                            >
                            </div>
    
                            <div    
                                class="font-medium text-[#1F2937]"
                                v-text="event.total"
                            >
                            </div>
                        </div>
    
                        <div class="grid grid-cols-1 gap-2">
                            <div
                                class="text-gray-500"
                                v-text="'@lang('booking::app.admin.sales.bookings.calendar.status')'"
                            >
                            </div>
    
                            <div
                                class="w-fit px-2.5 py-1 text-white font-medium rounded-2xl "
                                :class="[
                                    event.status === 'pending' ? 'bg-yellow-500' :
                                    event.status === 'completed' ? 'bg-darkGreen' :
                                    event.status === 'closed' ? 'bg-darkBlue':
                                    event.status === 'canceled' ? 'bg-darkPink' :
                                    'bg-green-500',
                                ]"
                                v-text="event.status == 'completed'
                                    ? '@lang('booking::app.admin.sales.bookings.calendar.done')'
                                    : event.status"
                            >
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 gap-2.5 pt-4 items-center text-[#1F2937]">
                        <!-- Customer Name -->
                        <div class="flex gap-2 items-center">
                            <span class="icon-customer-2 text-2xl text-gray-500"></span>

                            <span v-text="event.full_name"></span>
                        </div>

                        <!-- Customer Email -->
                        <div class="flex gap-2 items-center">
                            <span class="icon-mail text-2xl text-gray-500"></span>

                            <span v-text="event.email"></span>
                        </div>

                        <!-- Customer Phone Number -->
                        <div class="flex gap-2">
                            <span class="icon-phone-number text-2xl text-gray-500"></span>

                            <span v-text="event.contact"></span>
                        </div>

                        <!-- Customer Address -->
                        <div class="flex gap-2">
                            <span class="icon-location text-2xl text-gray-500"></span>

                            <span>
                                <template v-if="event.address1">
                                    @{{ event.address1 }},
                                </template>

                                <template v-if="event.address2">
                                    @{{ event.address2 }},
                                </template>

                                @{{ event.city }},
                                @{{ event.state }},
                                @{{ event.country }},
                                @{{ event.postcode }}
                            </span>
                        </div>
                    </div>
                </div>
            </x-slot>

            <!-- Modal Footer -->
            <x-slot:footer class="!pb-0">
                <button class="primary-button" @click="redirect">
                    @lang('booking::app.admin.sales.bookings.calendar.view-details')
                </button>
            </x-slot>
        </x-booking::modal>
    </script>

    <script type="module">
        app.component('v-calendar', {
            template: '#v-calendar-template',
            
            data() {
                return {
                    events: [],

                    event: {},
                }
            },

            methods: {
                getBookings({startDate, endDate}) {
                    this.$axios.get("{{ route('admin.sales.bookings.get') }}", {
                        params: {
                            view_type: 'calendar',
                            startDate: new Date(startDate).toLocaleDateString("en-US"),
                            endDate: new Date(endDate).toLocaleDateString("en-US")
                        }
                    })
                    .then(response => {
                        this.events = response.data.bookings;

                        // Getting a difference between start time and end time for a single event for adding a check on calendar data display as name and time and booking id.
                        this.events.forEach(element => {
                            const differenceInMinutes = Math.floor((new Date(element.end) - new Date(element.start)) / (1000 * 60));

                            const formattedHours = String(Math.floor(differenceInMinutes / 60)).padStart(2, '0');

                            const formattedMinutes = String(differenceInMinutes % 60).padStart(2, '0');
                            
                            const totalMinutes = formattedHours * 60 + formattedMinutes;

                            if (totalMinutes > 60) {
                                element.time_difference = true;
                            } else {
                                element.time_difference = false;
                            }
                        });
                    })
                    .catch(error => {});
                },

                onEventClick(event) {
                    this.event = event;

                    this.$refs.myModal.toggle();
                },

                showTooltip(event) {
                    let targetElement = event.target;

                    let offsetTop = targetElement.offsetTop;

                    let offsetLeft = targetElement.offsetLeft;

                    let offsetParent = targetElement.offsetParent;

                    let calendar = document.querySelector('.calendar');

                    while (offsetParent) {
                        offsetTop += offsetParent.offsetTop;

                        offsetLeft += offsetParent.offsetLeft;

                        offsetParent = offsetParent.offsetParent;
                    }

                    let finalTop = Math.min(offsetTop, document.body.clientHeight - calendar.offsetHeight);

                    let finalLeft = Math.min(offsetLeft, document.body.clientWidth - calendar.offsetWidth);

                    if (calendar.offsetWidth * 3 > offsetLeft) {
                        calendar.style.left = (calendar.offsetWidth + offsetLeft + 25) + 'px';
                    } else {
                        calendar.style.left = (finalLeft - 40) + 'px';
                    }

                    calendar.style.top = finalTop + 'px';

                    calendar.classList.add('show');
                },

                redirect(event) {
                    window.location.href = "{{ route('admin.sales.orders.view', 'order_id') }}/".replace('order_id', this.event.order_id)
                },
            },
        });
    </script>
@endpush