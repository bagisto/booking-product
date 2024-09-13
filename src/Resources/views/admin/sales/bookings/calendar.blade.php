@push('styles')
    @bagistoVite([
        'src/Resources/assets/css/app.css',
        'src/Resources/assets/js/app.js'
    ], 'booking')
@endpush

<v-calendar></v-calendar>

@pushOnce('scripts')
    <script
        type="text/x-template"
        id="v-calendar-template"
    >
        <div class="mt-7">
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
                    @event-click="toggleEvent"
                >
                    <!-- Left Arrow -->
                    <template #arrow-prev="">
                        <span class="icon-sort-left"></span>
                    </template>

                    <!-- Right Arrow -->
                    <template #arrow-next="">
                        <span class="icon-sort-right"></span>
                    </template>

                    <!-- No Events Content -->
                    <template #no-event>
                        <p class="hidden"></p>
                    </template>

                    <!-- Contecnt -->
                    <template #event="{ event, view }">
                        <div
                            class="slot relative h-full cursor-pointer rounded-l border-l-4 text-left text-xs"
                            :class="[
                                event.status === 'pending' ? 'bg-yellow-100 border-yellow-500' :
                                event.status === 'completed' ? 'bg-green-100 border-green-500' :
                                event.status === 'closed' ? 'bg-blue-100 border-blue-500' :
                                event.status === 'canceled' ? 'bg-red-100 border-red-500' :
                                'bg-green-100 border-green-600',
                                event.time_difference ? 'p-2' : 'p-1'
                            ]"
                            @click="showTooltip($event)"
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
                <x-slot:header class="!p-0">
                    <div class="text-lg font-medium text-[#1F2937]">
                        @lang('booking::app.admin.sales.bookings.calendar.booking-detailes')
                    </div>
                </x-slot>

                <!-- Modal Content -->
                <x-slot:content>
                    <div class="grid text-sm font-normal">
                        <div class="grid grid-cols-1 gap-2.5 border-b pb-4">
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

                        <div class="grid grid-cols-[80px_80px_auto] gap-2.5 border-b py-4">
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
                                    class="w-fit rounded-2xl px-2.5 py-1 font-medium text-white"
                                    :class="[
                                        event.status === 'pending' ? 'bg-yellow-500' :
                                        event.status === 'completed' ? 'bg-darkGreen' :
                                        event.status === 'closed' ? 'bg-darkBlue':
                                        event.status === 'canceled' ? 'bg-darkPink' :
                                        'bg-green-500',
                                    ]"
                                >
                                    <span v-text="
                                        event.status === 'completed' ? '@lang('booking::app.admin.sales.bookings.calendar.done')' :
                                        event.status === 'pending' ? '@lang('booking::app.admin.sales.bookings.calendar.pending')' :
                                        event.status === 'canceled' ? '@lang('booking::app.admin.sales.bookings.calendar.canceled')' :
                                        event.status === 'closed' ? '@lang('booking::app.admin.sales.bookings.calendar.closed')' :
                                        event.status"
                                    >
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 items-center gap-2.5 pt-4 font-medium text-[#1F2937]">
                            <!-- Customer Name -->
                            <div class="flex items-center gap-2">
                                <span class="icon-customer-2 text-2xl text-gray-500"></span>

                                <span v-text="event.full_name"></span>
                            </div>

                            <!-- Customer Email -->
                            <div class="flex items-center gap-2">
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
                                    <template v-if="event.address">
                                        @{{ event.address.split('\n').join(', ') }}
                                    </template>

                                    @{{ event.city }},
                                    @{{ event.state }},
                                    @{{ event.country }}
                                    @{{ event.postcode }}
                                </span>
                            </div>
                        </div>
                    </div>
                </x-slot>

                <!-- Modal Footer -->
                <x-slot:footer class="!pb-0">
                    <button
                        class="primary-button h-9 p-2.5 text-base"
                        @click="redirect"
                    >
                        @lang('booking::app.admin.sales.bookings.calendar.view-details')
                    </button>
                </x-slot>
            </x-booking::modal>
        </div>
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
                getBookings({ startDate, endDate }) {
                    const formattedStartDate = new Date(startDate).toLocaleDateString("en-US");
                    const formattedEndDate = new Date(endDate).toLocaleDateString("en-US");

                    this.$axios.get("{{ route('admin.sales.bookings.get') }}", {
                        params: {
                            view_type: 'calendar',
                            startDate: formattedStartDate,
                            endDate: formattedEndDate
                        }
                    })
                    .then(response => {
                        this.events = response.data.bookings;

                        this.events.forEach(element => {
                            const differenceInMinutes = Math.floor((new Date(element.end) - new Date(element.start)) / (1000 * 60));
                            const totalMinutes = Math.floor(differenceInMinutes / 60) * 60 + (differenceInMinutes % 60);

                            element.time_difference = totalMinutes > 60;
                        });
                    })
                    .catch(error => {});
                },

                toggleEvent(event) {
                    this.event = event;

                    this.$refs.myModal.toggle();
                },

                showTooltip(event) {
                    const element = event.currentTarget;
                    const elementTopOffset = element.getBoundingClientRect().top + window.pageYOffset;
                    const parentOffsetLeft = element.closest(".vuecal__cell--has-events")?.offsetLeft;
                    const sidebar = document.querySelector('.sidebar-collapsed, .sidebar-not-collapsed');
                    const parentLeftOffset = sidebar ? parentOffsetLeft : parentOffsetLeft + 200;
                    const calendar = document.querySelector('.calendar');
                    const elementWidth = element.offsetWidth;
                    const calendarWidth = calendar.offsetWidth;

                    calendar.style.top = Math.min(elementTopOffset, document.body.clientHeight - calendar.offsetHeight) + 'px';
                    calendar.style.right = '';
                    calendar.style.left = '';

                    const sidebarFirstChildWidth = sidebar?.querySelector(':first-child')?.clientWidth;

                    if (parentLeftOffset > calendarWidth) {
                        if (sidebar) {
                            calendar.style.left = parentLeftOffset - 75 + "px";
                        } else if (parentLeftOffset - sidebarFirstChildWidth > calendarWidth) {
                            calendar.style.left = parentLeftOffset - 75 + "px";
                        } else {
                            calendar.style.right = parentLeftOffset - sidebarFirstChildWidth - 5 + elementWidth + "px";
                        }
                    } else if (elementWidth < parentLeftOffset) {
                        calendar.style.right = parentLeftOffset + elementWidth + 10 + "px";
                    } else {
                        calendar.style.left = calendarWidth + (elementWidth - parentLeftOffset) + 60 + "px";
                    }
                    calendar.classList.add('show');
                },

                redirect(event) {
                    window.location.href = "{{ route('admin.sales.orders.view', 'order_id') }}/".replace('order_id', this.event.order_id)
                },
            },
        });
    </script>
@endPushOnce

@pushOnce('styles')
    <style>
        .vuecal__title-bar {
            background-color: transparent;
            border-bottom: 1px solid #ddd;
            color: #1F2937;
        }

        .vuecal__title-bar .vuecal__title {
            width: fit-content;
        }

        .vuecal__heading {
            height: 100%;
        }

        .vuecal__heading .weekday-label {
            display: grid;
            height: fit-content;
            justify-content: left;
            text-align:left;
            padding: 6px 25px;
        }

        .weekday-label .full, .weekday-label .small, .weekday-label .xsmall {
            font-size: 12px;
            font-weight: 700;
        } 

        .weekday-label span {
            font-size: 24px;
            font-weight: 500;
            text-transform: uppercase;
            color: #1F2937;
        }
    </style>
@endPushOnce