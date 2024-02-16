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
                :events="events"
                @ready="getBookings"
            >
                <template #event="{ event, view }">
                    <div class="text-xs">
                        <span>
                            @{{ event.start }} - @{{ event.end }}
                        </span>

                        <br />

                        <span v-text="event.full_name"></span>
                    </div>
                </template>
            </vue-cal>
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
                    this.$axios.get("{{ route('admin.sales.bookings.get') }}", {
                        params: {
                            view_type: 'calendar',
                            startDate: new Date(startDate).toLocaleDateString("en-US"),
                            endDate: new Date(endDate).toLocaleDateString("en-US")
                        }
                    })
                    .then(response => {
                        this.events = response.data.bookings;
                    })
                    .catch(error => {});
                },

                onEventClick (event) {
                    window.location.href = "{{ route('admin.sales.orders.view', 'order_id') }}/".replace('order_id', event.order_id)
                },
            },
        });
    </script>
@endpush
