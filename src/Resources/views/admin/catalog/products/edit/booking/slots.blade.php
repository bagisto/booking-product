@pushOnce('scripts')
    <script
        type="text/x-template"
        id="v-slots-template"
    >
        <div class="flex gap-5 justify-between py-4">
            <div class="flex flex-col gap-1">
                <p class="text-base text-gray-800 dark:text-white font-semibold">
                    @lang('booking::app.admin.catalog.products.edit.booking.slots.title')
                </p>

                <p class="text-xs text-gray-500 dark:text-gray-300 font-medium">
                    @lang('booking::app.admin.catalog.products.edit.booking.slots.description-info')
                 </p>
            </div>

            <!-- Add Slots Button -->
            <div class="flex gap-x-1 items-center">
                <div
                    class="secondary-button"
                    v-if="parseInt(sameSlotAllDays)"
                    @click="toggle()"
                >
                    @lang('booking::app.admin.catalog.products.edit.booking.slots.add')
                </div>
            </div>
        </div>

        <!-- Table Information -->
        <div class="overflow-x-auto">
            <!-- For Same Slot All Days -->
            <template v-if="parseInt(bookingProduct.same_slot_all_days)">
                <template v-if="slots['same_for_week'].length">
                    <div class="flex flex-wrap gap-x-2.5">
                        <div
                            class="flex flex-wrap gap-1 items-center min-h-[38px] dark:border-gray-800"
                            v-for="(data, index) in slots['same_for_week']"
                        >
                            <!-- Hidden Inputs -->
                            <input
                                type="hidden"
                                :name="'booking[slots][' + index + '][from]'"
                                :value="data.from"
                            />

                            <input
                                type="hidden"
                                :name="'booking[slots][' + index + '][from]'"
                                :value="data.to"
                            />

                            <!-- Pannel Detailes -->
                            <p class="flex items-center py-1 px-2 bg-gray-600 rounded text-white font-semibold">
                                @{{ data.from }} - @{{ data.to }}
    
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
            
            <template v-else>
                <div
                    class="grid border-b border-slate-300 dark:border-gray-800 last:border-b-0"
                    v-for="(day, dayIndex) in week_days"
                >
                    <div class="flex grid-cols-3 gap-10 p-4 items-center justify-between">
                        <p v-text="day"></p>

                        <div class="flex flex-wrap gap-1 items-center min-h-[38px] dark:border-gray-800">
                            <template
                                v-if="slots['different_for_week'][dayIndex].length"
                                v-for="(item, itemIndex) in slots['different_for_week'][dayIndex]"
                            >
                                <!-- Hidden Inputs -->
                                <input
                                    type="hidden"
                                    :name="'booking[slots][' + dayIndex + '][' + itemIndex + '][from]'"
                                    :value="item.from"
                                />

                                <input
                                    type="hidden"
                                    :name="'booking[slots][' + dayIndex + '][' + itemIndex + '][to]'"
                                    :value="item.to"
                                />

                                <!-- Panel Detailes -->
                                <p class="flex items-center py-1 px-2 bg-gray-600 rounded text-white font-semibold">
                                    @{{ item.from }} - @{{ item.to }}

                                    <span
                                        class="icon-cross text-white text-lg ltr:ml-1.5 rtl:mr-1.5 cursor-pointer"
                                        @click="removeIndex(dayIndex,itemIndex)"
                                    >
                                    </span>
                                </p>    
                            </template>

                            <template v-else>
                                <p class="rounded-xl px-2.5 py-1.5 bg-gray-300">
                                    @lang('Unavailalable')
                                </p>
                            </template>
                        </div>

                        <p
                            class="place-content-start text-right text-blue-600 cursor-pointer transition-all hover:underline"
                            @click="currentIndex=dayIndex;toggle()"
                        >
                            @lang('Add')
                        </p>
                    </div>
                </div>
            </template>
        </div>

        <x-admin::form
            v-slot="{ meta, errors, handleSubmit }"
            as="div"
        >
            <form
                @submit.prevent="handleSubmit($event, store)"
                enctype="multipart/form-data"
                ref="createOptionsForm"
            >
                <x-admin::drawer ref="drawerform">
                    <x-slot:header>
                        <div class="flex justify-between items-center">
                            <p class="my-2.5 text-xl font-medium dark:text-white">
                                @lang('booking::app.admin.catalog.products.edit.booking.slots.title')
                            </p>

                            <div class="flex gap-2 ltr:mr-11 rtl:ml-11">
                                <!-- Add Slots Button -->
                                <div
                                    class="secondary-button w-fit"
                                    @click="add"
                                >
                                    @lang('booking::app.admin.catalog.products.edit.booking.slots.add')
                                </div>

                                <button
                                    type="submit"
                                    class="primary-button"
                                >
                                    @lang('booking::app.admin.catalog.products.edit.booking.slots.save')
                                </button>
                            </div>
                        </div>
                    </x-slot:header>

                    <x-slot:content>
                        <template v-if="field['same_for_week']?.length">
                            <div class="grid grid-cols-3 gap-2.5 mx-2.5 py-2.5 text-gray-800 dark:text-white">
                                <div class="w-full">
                                    @lang('booking::app.admin.catalog.products.edit.booking.slots.modal.slot.from')
                                </div>
                    
                                <div class="w-full">
                                    @lang('booking::app.admin.catalog.products.edit.booking.slots.modal.slot.to')
                                </div>
                            </div>

                            <template v-for="(slot, index) in field['same_for_week']">
                                <v-slot-item
                                    :control-name="'booking[slots][' + index + ']'"
                                    :index="index"
                                    :slot-item="slot"
                                    @onRemoveSlot="remove($event)"
                                />
                            </template>
                        </template>

                        <template v-else-if="field['different_for_week'][currentIndex]?.length">
                            <div class="grid grid-cols-3 gap-2.5 mx-2.5 py-2.5 text-gray-800 dark:text-white">
                                <div class="w-full">
                                    @lang('booking::app.admin.catalog.products.edit.booking.slots.modal.slot.from')
                                </div>
                    
                                <div class="w-full">
                                    @lang('booking::app.admin.catalog.products.edit.booking.slots.modal.slot.to')
                                </div>
                            </div>

                            <template v-for="(slot, index) in field['different_for_week'][currentIndex]">
                                <v-slot-item
                                    :control-name="'booking[slots][' + currentIndex + '][' + index + ']'"
                                    :index="currentIndex + '_' + slotIndex"
                                    :slot-item="slot"
                                    @onRemoveSlot="remove($event, currentIndex)"
                                />
                            </template>
                        </template>

                        <template v-else>
                            <!-- For Empty Illustration -->
                            <v-empty-info ::type="bookingType" />
                        </template>
                    </x-slot:content>
                </x-admin::drawer>
            </form>
        </x-admin::form>
    </script>

    <!-- Slot Item Vue Component -->
    <script
        type="text/x-template"
        id="v-slot-item-template"
    >
        <div class="grid grid-cols-3 gap-2.5 mx-2.5">
            <!-- From -->
            <input
                type="hidden"
                :name="controlName + '[id]'"
            />

            <!-- From -->
            <x-booking::form.control-group class="w-full">
                <x-booking::form.control-group.label class="hidden">
                    @lang('booking::app.admin.catalog.products.edit.booking.slots.modal.slot.from')
                </x-booking::form.control-group.label>

                <x-booking::form.control-group.control
                    type="time"
                    ::id="controlName + '[from]'"
                    ::name="controlName + '[from]'"
                    rules="required"
                    :label="trans('booking::app.admin.catalog.products.edit.booking.slots.modal.slot.from')"
                    :placeholder="trans('booking::app.admin.catalog.products.edit.booking.slots.modal.slot.from')"
                />

                <x-booking::form.control-group.error ::control-name="controlName + '[from]'" />
            </x-booking::form.control-group>

            <!-- To -->
            <x-booking::form.control-group class="w-full">
                <x-booking::form.control-group.label class="hidden">
                    @lang('booking::app.admin.catalog.products.edit.booking.slots.modal.slot.to')
                </x-booking::form.control-group.label>

                <x-booking::form.control-group.control
                    type="time"
                    ::id="controlName + '[to]'"
                    ::name="controlName + '[to]'"
                    rules="required"
                    :label="trans('booking::app.admin.catalog.products.edit.booking.slots.modal.slot.to')"
                    :placeholder="trans('booking::app.admin.catalog.products.edit.booking.slots.modal.slot.to')"
                />

                <!-- Form Avoiding object value in last input field -->
                <x-booking::form.control-group.control type="hidden" />

                <x-booking::form.control-group.error ::control-name="controlName + '[to]'" />
            </x-booking::form.control-group>

            <!-- Delete Icon -->
            <div
                class="icon-delete w-fit text-2xl p-1.5 cursor-pointer transition-all"
                @click="remove"
            >
            </div>
        </div>
    </script>

    <script type="module">
        app.component('v-slots', {
            template: '#v-slots-template',

            props: ['bookingType', 'bookingProduct', 'sameSlotAllDays'],

            data() {
                return {
                    slots: {
                        'same_for_week': [],
    
                        'different_for_week': [[], [], [], [], [], [], []]
                    },

                    field: {
                        'same_for_week': [],
    
                        'different_for_week': [[], [], [], [], [], [], []]
                    },

                    week_days: [
                        "{{ trans('booking::app.admin.catalog.products.edit.booking.slots.modal.slot.sunday') }}",
                        "{{ trans('booking::app.admin.catalog.products.edit.booking.slots.modal.slot.monday') }}",
                        "{{ trans('booking::app.admin.catalog.products.edit.booking.slots.modal.slot.tuesday') }}",
                        "{{ trans('booking::app.admin.catalog.products.edit.booking.slots.modal.slot.wednesday') }}",
                        "{{ trans('booking::app.admin.catalog.products.edit.booking.slots.modal.slot.thursday') }}",
                        "{{ trans('booking::app.admin.catalog.products.edit.booking.slots.modal.slot.friday') }}",
                        "{{ trans('booking::app.admin.catalog.products.edit.booking.slots.modal.slot.saturday') }}"
                    ],

                    currentIndex: '',
                }
            },

            created() {
                if (! this.bookingProduct && ! this.bookingProduct.slots) {
                    return;
                }

                if (parseInt(this.sameSlotAllDays)) {
                    this.slots['same_for_week'] = this.bookingProduct.slots;
                } else {
                    this.slots['different_for_week'] = this.bookingProduct.slots;
                }
            },

            methods: {
                add() {
                    if (parseInt(this.sameSlotAllDays)) {
                        this.field['same_for_week'].push({
                            'from': '',
                            'to': '',
                        });
                    } else {
                        this.field['different_for_week'][this.currentIndex].push({
                            'id': '',
                            'from': '',
                            'to': '',
                        });
                    }
                },

                remove(slot, dayIndex = null) {
                    if (dayIndex != null) {
                        let index = this.field['different_for_week'][dayIndex].indexOf(slot)
    
                        this.field['different_for_week'][dayIndex].splice(index, 1)
                    } else {
                        let index = this.field['same_for_week'].indexOf(slot)
    
                        this.field['same_for_week'].splice(index, 1)
                    }
                },
                
                store(params) {
                    let formDataObj = {};
                    
                    let formData = new FormData(this.$refs.createOptionsForm);

                    formData.forEach((value, key) => (formDataObj[key] = value));

                    this.slotData(formDataObj);

                    this.toggle();
                },

                slotData(params) {
                    if (parseInt(this.sameSlotAllDays)) {
                        for (let i = 0; i < Object.keys(params).length/3; i++) {
                            if (params[`booking[slots][${i}][from]`] && params[`booking[slots][${i}][to]`]) {
                                if (this.slots['same_for_week']?.length) {
                                    this.slots['same_for_week'] = this.slots['same_for_week'].concat({ 
                                        'id': i + 1, 
                                        'from': params[`booking[slots][${i}][from]`],
                                        'to': params[`booking[slots][${i}][to]`],
                                    });
                                } else {
                                    this.slots['same_for_week'].push({ 
                                        'id': i + 1, 
                                        'from': params[`booking[slots][${i}][from]`], 
                                        'to': params[`booking[slots][${i}][to]`],
                                    });
                                }
                            }
                        }

                        for (let i = 0; i < this.slots['same_for_week'].length; i++) {
                            this.slots['same_for_week'][i].id = i + 1;
                        }
                    } else {
                        for (let i = 0; i < Object.keys(params).length/3; i++) {
                            if (this.slots['different_for_week'][this.currentIndex]?.length) {
                                this.slots['different_for_week'][this.currentIndex] = this.slots['different_for_week'][this.currentIndex].concat({ 
                                    'id': i + 1, 
                                    'from': params[`booking[slots][${this.currentIndex}][${i}][from]`],
                                    'to': params[`booking[slots][${this.currentIndex}][${i}][to]`],
                                });
                            } else {
                                console.log(this.slots['different_for_week'][this.currentIndex]);
                                this.slots['different_for_week'][this.currentIndex].push({ 
                                    'id': i + 1, 
                                    'from': params[`booking[slots][${this.currentIndex}][${i}][from]`],
                                    'to': params[`booking[slots][${this.currentIndex}][${i}][to]`],
                                });
                            }
                        }

                        for (let i = 0; i < this.slots['different_for_week'][this.currentIndex].length; i++) {
                            this.slots['different_for_week'][this.currentIndex][i].id = i + 1;
                        }

                        
                    }
                },

                removeIndex(dayIndex, timeIndex) {
                    this.$emitter.emit('open-confirm-modal', {
                        agree: () => {
                            if (parseInt(this.sameSlotAllDays)) {
                                this.slots['same_for_week'].splice(dayIndex, 1);
                            } else {
                                this.slots['different_for_week'][dayIndex].splice(timeIndex, 1);
                            }
                        },
                    });
                },

                toggle() {
                    this.field['same_for_week'] = [];

                    this.field['different_for_week'] = [[], [], [], [], [], [], []];

                    this.$refs.drawerform.toggle();
                },
            },
        });

        app.component('v-slot-item', {
            template: '#v-slot-item-template',
    
            props: ['controlName', 'slotItem'],

            methods: {
                remove() {
                    this.$emit('onRemoveSlot', this.slotItem)
                },
            }
        });
    </script>
@endpushOnce