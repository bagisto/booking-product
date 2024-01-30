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
                :disable-views="['years', 'year', 'month', 'day']"
                style="height: calc(100vh - 240px);"
                :events="events"
                @ready="getBookings"
                @view-change="getBookings"
                :on-event-click="onEventClick"
            />
        </div>
    </script>

    <script type="module">
        app.component('v-calendar', {
            template: '#v-calendar-template',
            
            data() {
                return {
                    events: []
                }
            },

            methods: {
                getBookings({startDate, endDate}) {
                    this.$root.pageLoaded = false;

                    this.$http.get("{{ route('admin.sales.bookings.get', ['view_type' => 'calendar']) }}" + `&startDate=${new Date(startDate).toLocaleDateString("en-US")}&endDate=${new Date(endDate).toLocaleDateString("en-US")}`)
                        .then(response => {
                            this.$root.pageLoaded = true;

                            this.events = response.data.bookings;

                            console.log(this.events);
                        })
                        .catch(error => {
                            this.$root.pageLoaded = true;
                        });
                },

                onEventClick (event) {
                    window.location.href = "{{ route('admin.sales.orders.view', 'order_id') }}/".replace('order_id', event.order_id)
                }
            }
        });
    </script>
@endpush