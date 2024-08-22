<v-time-picker {{ $attributes }}>
    {{ $slot }}
</v-time-picker>

@pushOnce('scripts')
    <script type="text/x-template" id="v-time-picker-template">
        <span class="relative inline-block w-full">
            <slot></slot>

            <i class="icon-clock absolute top-[50%] -translate-y-[50%] text-[24px] text-gray-400 ltr:right-[8px] rtl:left-[8px]"></i>
        </span>
    </script>

    <script type="module">
        app.component('v-time-picker', {
            template: '#v-time-picker-template',

            data () {
                return {
                    timepicker: null
                };
            },

            mounted () {
                let options = this.setOptions();

                this.activate(options);
            },

            methods: {
                setOptions () {
                    let self = this;

                    return {
                        dateFormat: 'H:i',
                        altFormat: 'H:i',
                        noCalendar: true,
                        altInput: true,
                        enableTime: true,
                        time_24hr: true,

                        onChange: function(selectedDates, timeStr, instance) {
                            self.$emit("onChange", timeStr);
                        }
                    };
                },

                activate (options) {
                    let element = this.$el.getElementsByTagName("input")[0];
                    
                    this.timepicker = new Flatpickr(element, options);
                },
            }
        });
    </script>
@endPushOnce
