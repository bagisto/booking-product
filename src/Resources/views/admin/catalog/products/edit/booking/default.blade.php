{!! view_render_event('bagisto.admin.catalog.product.edit.booking.default.before', ['product' => $product]) !!}

<!-- Vue Component -->
<v-default-booking />

{!! view_render_event('bagisto.admin.catalog.product.edit.booking.default.after', ['product' => $product]) !!}

@pushOnce('scripts')
    <script
        type="text/x-template"
        id="v-default-booking-template"
    >
        <!-- Type -->
        <x-admin::form.control-group class="w-full">
            <x-admin::form.control-group.label class="required">
                @lang('booking::app.admin.catalog.products.edit.booking.default.description')
            </x-admin::form.control-group.label>

            <x-admin::form.control-group.control
                type="select"
                name="booking[booking_type]"
                rules="required"
                v-model="default_booking.booking_type"
                :label="trans('booking::app.admin.catalog.products.edit.booking.default.description')"
                @change="change"
            >
                @foreach (['many', 'one'] as $item)
                    <option value="{{ $item }}">
                        @lang('booking::app.admin.catalog.products.edit.booking.default.' . $item)
                    </option>
                @endforeach
            </x-admin::form.control-group.control>

            <x-admin::form.control-group.error control-name="booking[booking_type]" />
        </x-admin::form.control-group>

        <div v-if="default_booking.booking_type == 'many'">
            <!-- Slot Duration -->
            <x-admin::form.control-group class="w-full">
                <x-admin::form.control-group.label class="required">
                    @lang('booking::app.admin.catalog.products.edit.booking.default.slot-duration')
                </x-admin::form.control-group.label>

                <x-admin::form.control-group.control
                    type="text"
                    name="booking[duration]"
                    rules="required|min_value:1"
                    v-model="default_booking.duration"
                    :label="trans('booking::app.admin.catalog.products.edit.booking.default.slot-duration')"
                />

                <x-admin::form.control-group.error control-name="booking[duration]" />
            </x-admin::form.control-group>

            <!-- Break Time -->
            <x-admin::form.control-group class="w-full">
                <x-admin::form.control-group.label class="required">
                    @lang('booking::app.admin.catalog.products.edit.booking.default.break-duration')
                </x-admin::form.control-group.label>

                <x-admin::form.control-group.control
                    type="text"
                    name="booking[break_time]"
                    rules="required|min_value:1"
                    v-model="default_booking.break_time"
                    :label="trans('booking::app.admin.catalog.products.edit.booking.default.break-duration')"
                />

                <x-admin::form.control-group.error control-name="booking[break_time]" />
            </x-admin::form.control-group>
        </div>

        <!-- Slots Component -->
        <div class="flex gap-5 justify-between items-center py-2">
            <div class="flex flex-col gap-2">
                <p class="text-base text-gray-800 dark:text-white font-semibold">
                    @lang('booking::app.admin.catalog.products.edit.booking.default.slot-title')
                </p>

                <p class="text-xs text-gray-500 dark:text-gray-300 font-medium">
                    @lang('booking::app.admin.catalog.products.edit.booking.default.description-info')
                 </p>
            </div>

            <!-- Add Slot Button -->
            <div
                class="flex gap-x-1 items-center"
                v-if="default_booking.booking_type != 'many'"
            >
                <div
                    class="secondary-button"
                    @click="$refs.drawerform.toggle()"
                >
                    @lang('booking::app.admin.catalog.products.edit.booking.default.slot-add')
                </div>
            </div>
        </div>

        <!-- Table Information -->
        <div class="overflow-x-auto py-2.5">
            <template v-if="default_booking.booking_type == 'one'">
                <template v-if="slots.one?.length">
                    <div class="flex flex-wrap gap-x-2.5">
                        <div
                            class="flex flex-wrap gap-1 items-center min-h-[38px] dark:border-gray-800"
                            v-for="(slot, index) in slots.one"
                        >
                            <!-- Hidden Inputs -->
                            <input
                                type="hidden"
                                :name="'booking[slots][' + index + '][id]'"
                                :value="slot.id"
                            />

                            <input
                                type="hidden"
                                :name="'booking[slots][' + index + '][from_day]'"
                                :value="slot.from_day"
                            />

                            <input
                                type="hidden"
                                :name="'booking[slots][' + index + '][from]'"
                                :value="slot.from"
                            />

                            <input
                                type="hidden"
                                :name="'booking[slots][' + index + '][to_day]'"
                                :value="slot.to_day"
                            />

                            <input
                                type="hidden"
                                :name="'booking[slots][' + index + '][to]'"
                                :value="slot.to"
                            />

                            <!-- Pannel detailes -->
                            <p class="flex items-center py-1 px-2 bg-gray-600 rounded text-white font-semibold">
                                @{{ convertIndexToDay(slot.from_day) }} @{{ slot.from }} - @{{ convertIndexToDay(slot.to_day) }} @{{ slot.to }}

                                <span
                                    class="icon-cross text-white text-lg ltr:ml-1.5 rtl:mr-1.5 cursor-pointer"
                                    @click="removeIndex(index)"
                                >
                                </span>
                            </p>
                        </div>
                    </div>
                </template>

                <template v-else>
                    <!-- For Empty Illustration -->
                    <v-empty-info ::type="bookingType" />
                </template>
            </template>

             <!-- For Not Same Slot All Days -->
             <template v-else>
                <div
                    class="grid grid-cols-[0.5fr_2fr] gap-2.5  items-center py-2 border-b border-slate-300 dark:border-gray-800 last:border-b-0"
                    v-for="(day, dayIndex) in week_days"
                >
                    <div class="flex gap-2">
                        <p
                            class="font-medium dark:text-gray-300"
                            v-text="day"
                        >
                        </p>

                        <template v-for="(slot, slotIndex) in slots['many'][dayIndex]">
                            <p
                                :class="parseInt(slot.status) ? 'label-active' : 'label-canceled'"
                                v-text="parseInt(slot.status) 
                                    ? '@lang('booking::app.admin.catalog.products.edit.booking.default.open')'
                                    : '@lang('booking::app.admin.catalog.products.edit.booking.default.close')'"
                            >
                            </p>
                        </template>
                    </div>

                    <div class="flex grid-cols-2 items-center justify-between">
                        <div class="flex flex-wrap gap-1 items-center min-h-[38px] dark:border-gray-800">
                            <template v-if="slots['many'][dayIndex]?.length">
                                <template v-for="(slot, slotIndex) in slots['many'][dayIndex]">
                                    <!-- Hidden Inputs -->
                                    <input
                                        type="hidden"
                                        :name="'booking[slots][' + dayIndex + '][' + slotIndex + '][id]'"
                                        :value="slot.id"
                                    />

                                    <input
                                        type="hidden"
                                        :name="'booking[slots][' + dayIndex + '][' + slotIndex + '][from]'"
                                        :value="slot.from"
                                    />

                                    <input
                                        type="hidden"
                                        :name="'booking[slots][' + dayIndex + '][' + slotIndex + '][to]'"
                                        :value="slot.to"
                                    />

                                    <input
                                        type="hidden"
                                        :name="'booking[slots][' + dayIndex + '][' + slotIndex + '][status]'"
                                        :value="slot.status"
                                    />

                                    <p class="flex items-center py-1 px-2 bg-gray-600 rounded text-white font-semibold">
                                        @{{ slot.from }} - @{{ slot.to }}
        
                                        <span
                                            class="icon-cross text-white text-lg ltr:ml-1.5 rtl:mr-1.5 cursor-pointer"
                                            @click="removeIndex(dayIndex,slotIndex)"
                                        >
                                        </span>
                                    </p>
                                </template>
                            </template>

                            <template v-else>
                                <p class="text-gray-500">
                                    @lang('Unavailalable')
                                </p>
                            </template>
                        </div>

                        <p
                            class="place-content-start text-right text-blue-600 cursor-pointer transition-all hover:underline"
                            v-if="!slots['many'][dayIndex]?.length"
                            @click="currentIndex=dayIndex;toggle()"
                        >
                            @lang('booking::app.admin.catalog.products.edit.booking.default.add')
                        </p>

                        <p
                            class="place-content-start text-right text-red-600 cursor-pointer transition-all hover:underline"
                            v-else
                            @click="currentIndex=dayIndex;toggle(dayIndex)"
                        >
                            @lang('booking::app.admin.catalog.products.edit.booking.default.edit')
                        </p>

                    </div>
                </div>
            </template>
        </div>

        <!-- Drawer Component -->
        <x-booking::form
            v-slot="{ meta, errors, handleSubmit }"
            as="div"
            ref="modelForm"
        >
            <form
                @submit.prevent="handleSubmit($event, store)"
                enctype="multipart/form-data"
            >
                <x-admin::drawer ref="drawerform">
                    <x-slot:header>
                        <div class="flex justify-between items-center">
                            <p
                                class="text-lg text-gray-800 dark:text-white font-bold"
                                v-text="slots['many'][currentIndex]?.length 
                                    ? '@lang('booking::app.admin.catalog.products.edit.booking.default.modal.slot.edit-title')'
                                    : '@lang('booking::app.admin.catalog.products.edit.booking.default.modal.slot.add-title')'"
                            >
                            </p>

                            <div class="ltr:mr-11 rtl:ml-11">
                                <button
                                    type="submit"
                                    class="primary-button"
                                >
                                    @lang('booking::app.admin.catalog.products.edit.booking.default.modal.slot.save')
                                </button>
                            </div>
                        </div>
                    </x-slot:header>

                    <x-slot:content>
                       <!-- Booking Type One -->
                        <template v-if="default_booking.booking_type == 'one'">
                            <div class="grid grid-cols-2 gap-4 mb-2.5 border-b dark:border-gray-800">
                                <!-- From Day -->
                                <x-admin::form.control-group class="w-full">
                                    <x-admin::form.control-group.label class="required">
                                        @lang('booking::app.admin.catalog.products.edit.booking.default.modal.slot.from-day')
                                    </x-admin::form.control-group.label>

                                    <x-admin::form.control-group.control
                                        type="hidden"
                                        name="booking_type"
                                        value="one"
                                    />

                                    <!-- Hidden Id Input -->
                                    <x-admin::form.control-group.control
                                        type="hidden"
                                        name="id"
                                    />

                                    <x-admin::form.control-group.control
                                        type="select"
                                        name="from_day"
                                        rules="required"
                                        :label="trans('booking::app.admin.catalog.products.edit.booking.default.modal.slot.from-day')"
                                    >
                                        <option
                                            value=""
                                            selected
                                        >
                                            @lang('booking::app.admin.catalog.products.edit.booking.default.modal.slot.select')
                                        </option>

                                        <option
                                            v-for="(day, index) in week_days"
                                            :value="index"
                                            v-text="'@lang('booking::app.admin.catalog.products.edit.booking.default.modal.slot.week')'.replace(':day', day)"
                                        >
                                        </option>
                                    </x-admin::form.control-group.control>
                    
                                    <x-admin::form.control-group.error control-name="from_day" />
                                </x-admin::form.control-group>
                    
                                <!-- From -->
                                <x-booking::form.control-group class="w-full">
                                    <x-booking::form.control-group.label class="required">
                                        @lang('booking::app.admin.catalog.products.edit.booking.default.modal.slot.from-time')
                                    </x-booking::form.control-group.label>
                    
                                    <x-booking::form.control-group.control
                                        type="time"
                                        name="from"
                                        rules="required"
                                        :label="trans('booking::app.admin.catalog.products.edit.booking.default.modal.slot.from-time')"
                                        :placeholder="trans('booking::app.admin.catalog.products.edit.booking.default.modal.slot.from-time')"
                                    />
                    
                                    <x-booking::form.control-group.error control-name="from" />
                                </x-booking::form.control-group>
                            </div>
                    
                            <div class="grid grid-cols-2 gap-4">
                                <!-- TO Day -->
                                <x-admin::form.control-group class="w-full">
                                    <x-admin::form.control-group.label class="required">
                                        @lang('booking::app.admin.catalog.products.edit.booking.default.modal.slot.to-day')
                                    </x-admin::form.control-group.label>
                    
                                    <x-admin::form.control-group.control
                                        type="select"
                                        name="to_day"
                                        rules="required"
                                        :label="trans('booking::app.admin.catalog.products.edit.booking.default.modal.slot.to-day')"
                                    >
                                        <option
                                            value=""
                                            selected
                                        >
                                            @lang('booking::app.admin.catalog.products.edit.booking.default.modal.slot.select')
                                        </option>

                                        <option
                                            v-for="(day, index) in week_days"
                                            :value="index"
                                            v-text="'@lang('booking::app.admin.catalog.products.edit.booking.default.modal.slot.week')'.replace(':day', day)"
                                        >
                                        </option>
                                    </x-admin::form.control-group.control>
                    
                                    <x-admin::form.control-group.error control-name="to_day" />
                                </x-admin::form.control-group>
                    
                                <!-- TO Time -->
                                <x-booking::form.control-group class="w-full">
                                    <x-booking::form.control-group.label class="required">
                                        @lang('booking::app.admin.catalog.products.edit.booking.default.modal.slot.to-time')
                                    </x-booking::form.control-group.label>
                    
                                    <x-booking::form.control-group.control
                                        type="time"
                                        name="to"
                                        rules="required"
                                        :label="trans('booking::app.admin.catalog.products.edit.booking.default.modal.slot.to-time')"
                                        :placeholder="trans('booking::app.admin.catalog.products.edit.booking.default.modal.slot.to-time')"
                                    />
                    
                                    <x-booking::form.control-group.error control-name="to" />
                                </x-booking::form.control-group>
                            </div>
                        </template>

                        <!-- Booking Type Many -->
                        <template v-if="default_booking.booking_type == 'many'">
                            <div class="grid grid-cols-3 gap-2.5 pb-3">
                                <!-- Hidden ID Field -->
                                <x-admin::form.control-group.control
                                    type="hidden"
                                    name="id"
                                />

                                <!-- Slots From -->
                                <x-booking::form.control-group class="w-full">
                                    <x-booking::form.control-group.label class="hidden">
                                        @lang('booking::app.admin.catalog.products.edit.booking.default.modal.slot.from')
                                    </x-booking::form.control-group.label>

                                    <x-booking::form.control-group.control
                                        type="time"
                                        name="from"
                                        ::rules="selectedStatus[currentIndex] ? 'required' : ''"
                                        :label="trans('booking::app.admin.catalog.products.edit.booking.default.modal.slot.from')"
                                        :placeholder="trans('booking::app.admin.catalog.products.edit.booking.default.modal.slot.from')"
                                    />

                                    <x-booking::form.control-group.error control-name="from" />
                                </x-booking::form.control-group>

                                <!-- Slots To -->
                                <x-booking::form.control-group class="w-full">
                                    <x-booking::form.control-group.label class="hidden">
                                        @lang('booking::app.admin.catalog.products.edit.booking.default.modal.slot.to')
                                    </x-booking::form.control-group.label>

                                    <x-booking::form.control-group.control
                                        type="time"
                                        name="to"
                                        ::rules="selectedStatus[currentIndex] ? 'required' : ''"
                                        :label="trans('booking::app.admin.catalog.products.edit.booking.default.modal.slot.to')"
                                        :placeholder="trans('booking::app.admin.catalog.products.edit.booking.default.modal.slot.to')"
                                    />

                                    <x-booking::form.control-group.error control-name="to" />
                                </x-booking::form.control-group>

                                <!-- Status -->
                                <x-admin::form.control-group class="w-full">
                                    <x-admin::form.control-group.label class="hidden">
                                        @lang('booking::app.admin.catalog.products.edit.booking.default.modal.slot.status')
                                    </x-admin::form.control-group.label>

                                    <x-admin::form.control-group.control
                                        type="select"
                                        name="status"
                                        v-model="selectedStatus[currentIndex]"
                                        ::value="selectedStatus[currentIndex] ? selectedStatus[currentIndex] : 0"
                                        :label="trans('booking::app.admin.catalog.products.edit.booking.default.modal.slot.status')"
                                    >
                                        <option value="1">
                                            @lang('booking::app.admin.catalog.products.edit.booking.default.modal.slot.open')
                                        </option>

                                        <option value="0">
                                            @lang('booking::app.admin.catalog.products.edit.booking.default.modal.slot.close')
                                        </option>
                                    </x-admin::form.control-group.control>

                                    <x-admin::form.control-group.error control-name="status" />
                                </x-admin::form.control-group>
                            </div>
                        </template>
                    </x-slot:content>
                </x-admin::drawer>
            </form>
        </x-booking::form>
    </script>

    <script type="module">
        app.component('v-default-booking', {
            template: '#v-default-booking-template',

            data() {
                return {
                    default_booking: @json($bookingProduct && $bookingProduct?->default_slot) ? @json($bookingProduct?->default_slot) : {
                        booking_type: 'one',

                        duration: 45,

                        break_time: 15,

                        slots: []
                    },

                    optionRowCount: 0,

                    currentIndex: '',

                    slots: {
                        one: [],

                        many: [[], [], [], [], [], [], [], []],
                    },

                    week_days: [
                        "@lang('booking::app.admin.catalog.products.edit.booking.default.modal.slot.monday')",
                        "@lang('booking::app.admin.catalog.products.edit.booking.default.modal.slot.tuesday')",
                        "@lang('booking::app.admin.catalog.products.edit.booking.default.modal.slot.wednesday')",
                        "@lang('booking::app.admin.catalog.products.edit.booking.default.modal.slot.thursday')",
                        "@lang('booking::app.admin.catalog.products.edit.booking.default.modal.slot.friday')",
                        "@lang('booking::app.admin.catalog.products.edit.booking.default.modal.slot.saturday')",
                        "@lang('booking::app.admin.catalog.products.edit.booking.default.modal.slot.sunday')",
                    ],

                    selectedStatus : [],
                }
            },

            created() {
                if (this.default_booking.slots) {
                    let [lastId] = this.default_booking.slots?.map(({ id }) => id).slice(-1);

                    if (lastId) {
                        this.optionRowCount = lastId?.split('_')[1];
                    }
                }

                if (this.default_booking.booking_type === 'one') {
                    this.slots['one'] = this.default_booking.slots;
                } else {
                    if (this.default_booking.slots?.length) {
                        this.slots['many'] = this.default_booking.slots;

                        this.selectedStatus = this.slots['many'].map(subArray => subArray.map(obj => obj.status));
                    }
                }
            },

            methods: {
                store(params) {
                    if (params.booking_type === 'one') {
                        if (! params.id) {
                            this.optionRowCount++;
                            params.id = 'option_' + this.optionRowCount;
                        }

                        let foundIndex = this.slots.one?.findIndex(item => item.id === params.id);

                        if (foundIndex !== -1) {
                            this.slots.one[foundIndex] = { 
                                ...this.slots.one[foundIndex].params, 
                                ...params
                            };
                        } else {
                            if (! this.slots.one.some(item => item.id === params.id)) {
                                this.slots.one.push(params);
                            }
                        }

                        this.$refs.drawerform.toggle();
                    } else {
                        params.id = this.currentIndex;

                        if (params.from && params.to) {
                            if (! this.slots['many'][this.currentIndex].length) {
                                this.slots['many'][this.currentIndex].push(params);
                            } else {
                                this.slots['many'][this.currentIndex].splice(0, 1, params);
                            }
    
                            this.selectedStatus[this.currentIndex]  = params.status;
                        }

                        this.$refs.drawerform.toggle();
                    }
                },

                convertIndexToDay(day) {
                    return this.week_days[day].slice(0, 3);
                },

                removeIndex(dayIndex, timeIndex) {
                    this.$emitter.emit('open-confirm-modal', {
                        agree: () => {
                            if (this.default_booking.booking_type == 'one') {
                                this.slots.one.splice(dayIndex, 1);
                            } else {
                                this.slots.many[dayIndex].splice(timeIndex, 1);

                                this.selectedStatus[dayIndex] = '';
                            }
                        },
                    });
                },

                toggle(element) {
                    if (element != undefined) {
                        this.$refs.modelForm.setValues(this.slots['many'][element][0]);
                    }

                    this.$refs.drawerform.toggle();
                },

                change() {
                    this.slots['one'] = [];

                    this.slots['many'] = [[], [], [], [], [], [], []];

                    this.optionRowCount = 0;
                }
            }
        });
    </script>
@endpushOnce