<v-rental-slots :bookingProduct = "{{ $bookingProduct }}"></v-rental-slots>

@pushOnce('scripts')
    <script
        type="text/x-template"
        id="v-rental-slots-template"
    >
        <div class="grid grid-cols-1 gap-2.5">
            <template v-if="renting_type == 'daily_hourly'">
                <x-shop::form.control-group.label class="required w-full">
                    @lang('booking::app.shop.products.view.types.booking.rental.choose-rent-option')
                </x-shop::form.control-group.label>

                <div class="mb-3 grid grid-cols-2 gap-2.5">
                    <!-- Daily Radio Button -->
                    <span class="flex gap-x-4">
                        <input
                            type="radio"
                            class="peer hidden"
                            id="booking[daily]"
                            name="booking[renting_type]"
                            value="daily"
                            v-model="sub_renting_type"
                        >

                        <label
                            class="icon-radio-unselect text-navyBlue peer-checked:icon-radio-select text-2xl"
                            for="booking[daily]"
                        >
                        </label>

                        <label
                            class="cursor-pointer text-[#6E6E6E]"
                            for="booking[daily]"
                        >
                            @lang('booking::app.shop.products.view.types.booking.rental.daily-basis')
                        </label>
                    </span>

                    <!-- Hourly Radio Button -->
                    <span class="flex gap-x-4">
                        <input
                            type="radio"
                            class="peer hidden"
                            id="booking[hourly]"
                            name="booking[renting_type]"
                            value="hourly"
                            v-model="sub_renting_type"
                        >

                        <label
                            class="icon-radio-unselect text-navyBlue peer-checked:icon-radio-select text-2xl"
                            for="booking[hourly]"
                        >
                        </label>

                        <label
                            class="cursor-pointer text-[#6E6E6E]"
                            for="booking[hourly]"
                        >
                            @lang('booking::app.shop.products.view.types.booking.rental.hourly-basis')
                        </label>
                    </span>
                </div>
            </template>

            <div v-if="renting_type != 'daily' && sub_renting_type == 'hourly'">
                <div>
                    <label class="required">
                        @lang('booking::app.shop.products.view.types.booking.rental.select-slot')
                    </label>

                    <div class="flex gap-2.5">
                        <!-- Select Slot Date -->
                        <x-shop::form.control-group class="!mb-0 w-full">
                            <x-shop::form.control-group.label class="hidden">
                                @lang('booking::app.shop.products.view.types.booking.rental.select-date')
                            </x-shop::form.control-group.label>

                            <x-shop::form.control-group.control
                                type="date"
                                name="booking[date]"
                                rules="required"
                                :label="trans('booking::app.shop.products.view.types.booking.rental.select-date')"
                                :placeholder="trans('booking::app.shop.products.view.types.booking.rental.select-date')"
                                data-min-date="today"
                                @change="dateSelected($event)"
                            />

                            <x-shop::form.control-group.error control-name="booking[date]" />
                        </x-shop::form.control-group>

                        <!-- Select Slot -->
                        <x-shop::form.control-group class="!mb-0 w-full">
                            <x-shop::form.control-group.label class="hidden">
                                @lang('booking::app.shop.products.view.types.booking.rental.select-slot')
                            </x-shop::form.control-group.label>

                            <x-shop::form.control-group.control
                                type="select"
                                class="!mb-1"
                                name="booking[slot]"
                                rules="required"
                                v-model="selected_slot"
                                :label="trans('booking::app.shop.products.view.types.booking.rental.select-date')"
                                :placeholder="trans('booking::app.shop.products.view.types.booking.rental.select-date')"
                            >
                                <option value="">
                                    @lang('booking::app.shop.products.view.types.booking.slots.select-slot')
                                </option>
                                
                                <option v-if="! slots?.length">
                                    @lang('booking::app.shop.products.view.types.booking.slots.no-slots-available')
                                </option>

                                <option
                                    v-for="(slot, index) in slots"
                                    :value="index"
                                    v-text="slot.time"
                                >
                                </option>
                            </x-shop::form.control-group.control>

                            <x-shop::form.control-group.error control-name="booking[slot]" />
                        </x-shop::form.control-group>
                    </div>
                </div>

                <div v-if="parseInt(slots[selected_slot] && slots[selected_slot]?.slots?.length)">
                    <label class="required">
                        @lang('booking::app.shop.products.view.types.booking.rental.select-rent-time')
                    </label>

                    <div class="flex gap-2.5">
                        <!-- Select Time Slot From -->
                        <x-shop::form.control-group class="!mb-0 w-full">
                            <x-shop::form.control-group.label class="hidden">
                                @lang('booking::app.shop.products.view.types.booking.rental.select-date')
                            </x-shop::form.control-group.label>

                            <x-shop::form.control-group.control
                                type="select"
                                name="booking[slot][from]"
                                rules="required"
                                :label="trans('booking::app.shop.products.view.types.booking.rental.select-date')"
                                :placeholder="trans('booking::app.shop.products.view.types.booking.rental.select-date')"
                            >
                                <option value="">
                                    @lang('booking::app.shop.products.view.types.booking.rental.select-time-slot')
                                </option>

                                <option
                                    v-for="slot in slots[selected_slot]?.slots"
                                    :value="slot.from_timestamp"
                                    v-text="slot.from"
                                >
                                </option>
                            </x-shop::form.control-group.control>

                            <x-shop::form.control-group.error control-name="booking[slot][from]" />
                        </x-shop::form.control-group>

                        <!-- Select Time Slot To -->
                        <x-shop::form.control-group class="!mb-0 w-full">
                            <x-shop::form.control-group.label class="hidden">
                                @lang('booking::app.shop.products.view.types.booking.rental.slot')
                            </x-shop::form.control-group.label>

                            <x-shop::form.control-group.control
                                type="select"
                                name="booking[slot][to]"
                                rules="required"
                                :label="trans('booking::app.shop.products.view.types.booking.rental.slot')"
                                :placeholder="trans('booking::app.shop.products.view.types.booking.rental.slot')"
                            >
                                <option value="">
                                    @lang('booking::app.shop.products.view.types.booking.rental.select-time-slot')
                                </option>

                                <option
                                    v-for="slot in slots[selected_slot]?.slots"
                                    :value="slot?.to_timestamp"
                                    v-text="slot.to"
                                >
                                </option>
                            </x-shop::form.control-group.control>

                            <x-shop::form.control-group.error control-name="booking[slot][to]" />
                        </x-shop::form.control-group>
                    </div>
                </div>
            </div>

            <div v-else>
                <label class="required">
                    @lang('booking::app.shop.products.view.types.booking.rental.select-date')
                </label>

                <div class="flex gap-2.5">
                    <!-- Select Date From -->
                    <x-shop::form.control-group class="!mb-0 w-full">
                        <x-shop::form.control-group.label class="hidden">
                            @lang('booking::app.shop.products.view.types.booking.rental.from')
                        </x-shop::form.control-group.label>

                        <x-shop::form.control-group.control
                            type="date"
                            name="booking[date_from]"
                            rules="required"
                            v-model="booking.date_from"
                            :label="trans('booking::app.shop.products.view.types.booking.rental.from')"
                            :placeholder="trans('booking::app.shop.products.view.types.booking.rental.from')"
                            data-min-date="today"
                            @change="dateSelected($event)"
                        />

                        <x-shop::form.control-group.error control-name="booking[date_from]" />
                    </x-shop::form.control-group>

                    <!-- Select Date To -->
                    <x-shop::form.control-group class="!mb-0 w-full">
                        <x-shop::form.control-group.label class="hidden">
                            @lang('booking::app.shop.products.view.types.booking.rental.to')
                        </x-shop::form.control-group.label>

                        <x-shop::form.control-group.control
                            type="date"
                            name="booking[date_to]"
                            ::rules="'required|after:' + booking.date_from"
                            v-model="booking.date_to"
                            :label="trans('booking::app.shop.products.view.types.booking.rental.to')"
                            :placeholder="trans('booking::app.shop.products.view.types.booking.rental.to')"
                            data-min-date="today"
                            @change="dateSelected($event)"
                        />

                        <x-shop::form.control-group.error control-name="booking[date_to]" />
                    </x-shop::form.control-group>
                </div>
            </div>
        </div>
    </script>

    <script type="module">
        defineRule('required_if', (value, { condition = true } = {}) => {
            if (condition) {
                if (
                    value === null
                    || value === undefined
                    || value === ''
                ) {
                    return false;
                }
            }

            return true;
        });

        defineRule('after', (value, [target]) => {
            if (! value || ! target) {
                return false;
            }

            return new Date(value) > new Date(target);
        });
        
        app.component('v-rental-slots', {
            template: '#v-rental-slots-template',

            props: ['bookingProduct'],

            data() {
                return {
                    renting_type: "{{ $bookingProduct->rental_slot->renting_type }}",

                    sub_renting_type: 'hourly',

                    slots: [],

                    selected_slot: '',
                    
                    booking : {
                        date_from: '',
                    }
                }
            },
 
            methods: {
                dateSelected(params) {
                    let date = params.target.value;

                    this.$axios.get(`{{ route('booking_product.slots.index', '') }}/${this.bookingProduct.id}`, {
                        params: { date }
                    })
                        .then((response) => {
                            this.selected_slot = '';
                            
                            this.slots = response.data.data;
                        })
                        .catch(error => {
                            if (error.response.status == 422) {
                                setErrors(error.response.data.errors);
                            }
                        });
                },
            },
        });
    </script>
@endpushOnce