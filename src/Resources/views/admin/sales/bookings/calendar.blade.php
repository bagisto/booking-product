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
            <x-slot:header>
                <div>
                    @lang('Booking')
                </div>
            </x-slot>

            <!-- Modal Content -->
            <x-slot:content>
                <div class="grid">
                    <div class="grid grid-cols-1 gap-2.5 pb-4 border-b">
                        <div class="grid grid-cols-[120px_auto] gap-2">
                            <div class="text-gray-500">Booking Date:</div>
    
                            <div>@{{ event.created_at }}</div>
                        </div>

                        <div class="grid grid-cols-[120px_auto] gap-2">
                            <div class="text-gray-500">Time Slot:</div>

                            <div>
                                @{{ new Date(event.start).toLocaleTimeString('en-US', { hour12: true, hour: 'numeric', minute: '2-digit' }) }} - @{{ new Date(event.end).toLocaleTimeString('en-US', { hour12: true, hour: 'numeric', minute: '2-digit' }) }}
                            </div>
                        </div>
                    </div>
    
                    <div class="grid grid-cols-[80px_80px_auto] gap-2.5 py-4 border-b">
                        <div class="grid grid-cols-1 gap-2">
                            <div class="text-gray-500">Order Id</div>
    
                            <div>#@{{ event.order_id }}</div>
                        </div>
    
                        <div class="grid grid-cols-1 gap-2">
                            <div class="text-gray-500">Price</div>
    
                            <div v-text="event.total"></div>
                        </div>
    
                        <div class="grid grid-cols-1 gap-2">
                            <div class="text-gray-500">Status</div>
    
                            <div
                                class="w-fit px-2.5 py-1 text-white font-medium text-xs rounded-xl"
                                :class="[
                                    event.status === 'pending' ? 'bg-yellow-500' :
                                    event.status === 'completed' ? 'bg-darkGreen' :
                                    event.status === 'closed' ? 'bg-darkBlue':
                                    event.status === 'canceled' ? 'bg-darkPink' :
                                    'bg-green-500',
                                ]"
                                v-text="event.status == 'completed' ? 'Done' : event.status"
                            >
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 gap-2.5 pt-4">
                        <div class="flex gap-2 items-center">
                            <span class="icon-customer-2 text-2xl"></span>

                            <span v-text="event.full_name"></span>
                        </div>

                        <div class="flex gap-2 items-center">
                            <span class="icon-mail text-2xl"></span>

                            <span v-text="event.email"></span>
                        </div>

                        <div class="flex gap-2">
                            <span class="icon-information text-2xl"></span>

                            <span v-text="event.contact"></span>
                        </div>

                        <div class="flex gap-2">
                            <span class="icon-location text-2xl"></span>

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
            <x-slot:footer>
                <button class="primary-button" @click="redirect">
                    @lang('View Details')
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
                    let offsetTop = event.target.offsetTop;

                    let offsetLeft = event.target.offsetLeft;

                    let bodyHeight = document.body.clientHeight;

                    let bodyWidth = document.body.clientWidth;

                    let offsetParent = event.target.offsetParent;

                    while (offsetParent) {
                        offsetTop += offsetParent.offsetTop;

                        offsetLeft += offsetParent.offsetLeft;

                        offsetParent = offsetParent.offsetParent;
                    }

                    let calendar = document.querySelector('.calendar');

                    let finalTop = (Math.min(offsetTop, bodyHeight - calendar.offsetHeight) - 5);

                    let finalLeft = Math.min(offsetLeft, bodyWidth - calendar.offsetWidth);
                    
                    if (calendar.offsetWidth * 2 > offsetLeft) {
                        calendar.style.left = (calendar.offsetWidth + offsetLeft + 50) + 'px';
                    } else {
                        calendar.style.left = (finalLeft - 50) + 'px';
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