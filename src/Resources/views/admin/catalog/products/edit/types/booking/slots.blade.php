@pushOnce('scripts')
    <script
        type="text/x-template"
        id="v-slots-template"
    >
        <div class="flex items-center justify-between gap-5 py-2">
            <div class="flex flex-col gap-1">
                <p class="text-base font-semibold text-gray-800 dark:text-white">
                    @lang('booking::app.admin.catalog.products.edit.types.booking.slots.title')
                </p>

                <p class="text-xs font-medium text-gray-500 dark:text-gray-300">
                    @lang('booking::app.admin.catalog.products.edit.types.booking.slots.description-info')
                 </p>
            </div>

            <!-- Add Slots Button -->
            <div
                class="flex items-center gap-x-1"
                v-if="parseInt(sameSlotAllDays)"
            >
                <div
                    class="secondary-button"
                    @click="toggle()"
                >
                    @lang('booking::app.admin.catalog.products.edit.types.booking.slots.add')
                </div>
            </div>
        </div>

        <!-- Table Information -->
        <div class="overflow-x-auto">
            <!-- For Same Slot All Days -->
            <template v-if="parseInt(bookingProduct.same_slot_all_days)">
                <template v-if="slots['same_for_week']?.length">
                    <div class="flex flex-wrap gap-x-2.5">
                        <div
                            class="flex min-h-[38px] flex-wrap items-center gap-1 dark:border-gray-800"
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
                                :name="'booking[slots][' + index + '][to]'"
                                :value="data.to"
                            />

                            <!-- Panel Details -->
                            <p class="flex items-center rounded bg-gray-600 px-2 py-1 font-semibold text-white">
                                @{{ data.from }} - @{{ data.to }}
    
                                <span
                                    class="icon-cross cursor-pointer text-lg text-white ltr:ml-1.5 rtl:mr-1.5"
                                    @click="removeIndex(index)"
                                >
                                </span>
                            </p>
                        </div>
                    </div>
                </template>

                <template v-else>
                    <!-- For Empty Illustration -->
                    <v-empty-info ::type="bookingType"></v-empty-info>
                </template>
            </template>
            
            <template v-else>
                <div
                    class="grid grid-cols-[0.5fr_2fr] items-center gap-2.5 border-b border-slate-300 py-2 last:border-b-0 dark:border-gray-800"
                    v-for="(day, dayIndex) in week_days"
                >
                    <p
                        class="font-medium dark:text-gray-300"
                        v-text="day"
                    >
                    </p>

                    <div class="flex grid-cols-2 items-center justify-between">
                        <div class="flex min-h-[38px] flex-wrap items-center gap-1 dark:border-gray-800">
                            <template
                                v-if="slots['different_for_week'][dayIndex]?.length"
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

                                <!-- Panel Details -->
                                <p class="flex items-center rounded bg-gray-600 px-2 py-1 font-semibold text-white">
                                    @{{ item.from }} - @{{ item.to }}

                                    <span
                                        class="icon-cross cursor-pointer text-lg text-white ltr:ml-1.5 rtl:mr-1.5"
                                        @click="removeIndex(dayIndex,itemIndex)"
                                    >
                                    </span>
                                </p>    
                            </template>

                            <template v-else>
                                <p class="text-gray-500">
                                    @lang('booking::app.admin.catalog.products.edit.types.booking.slots.unavailable')
                                </p>
                            </template>
                        </div>

                        <p
                            class="cursor-pointer place-content-start text-right text-blue-600 transition-all hover:underline"
                            @click="currentIndex=dayIndex;toggle()"
                        >
                            @lang('booking::app.admin.catalog.products.edit.types.booking.slots.action.add')
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
                        <div class="flex items-center justify-between">
                            <p class="my-2.5 text-xl font-medium dark:text-white">
                                @lang('booking::app.admin.catalog.products.edit.types.booking.slots.title')
                            </p>

                            <div class="flex items-center gap-4 ltr:mr-11 rtl:ml-11">
                                <!-- Add Slots Button -->
                                <div
                                    class="w-fit cursor-pointer font-medium text-blue-600 dark:text-white"
                                    @click="add"
                                >
                                    @lang('booking::app.admin.catalog.products.edit.types.booking.slots.add')
                                </div>

                                <button
                                    type="submit"
                                    class="primary-button"
                                >
                                    @lang('booking::app.admin.catalog.products.edit.types.booking.slots.save')
                                </button>
                            </div>
                        </div>
                    </x-slot:header>

                    <x-slot:content>
                        <template v-if="field['same_for_week']?.length">
                            <div class="flex gap-2.5 pb-2.5 text-gray-800 dark:text-white">
                                <div class="w-full">
                                    @lang('booking::app.admin.catalog.products.edit.types.booking.slots.modal.slot.from')
                                </div>
                    
                                <div class="w-full">
                                    @lang('booking::app.admin.catalog.products.edit.types.booking.slots.modal.slot.to')
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
                            <div class="mx-2.5 flex gap-2.5 pb-2.5 text-gray-800 dark:text-white">
                                <div class="w-full">
                                    @lang('booking::app.admin.catalog.products.edit.types.booking.slots.modal.slot.from')
                                </div>
                    
                                <div class="w-full">
                                    @lang('booking::app.admin.catalog.products.edit.types.booking.slots.modal.slot.to')
                                </div>
                            </div>

                            <template v-for="(slot, index) in field['different_for_week'][currentIndex]">
                                <v-slot-item
                                    :control-name="'booking[slots][' + currentIndex + '][' + index + ']'"
                                    :index="currentIndex + '_' + index"
                                    :slot-item="slot"
                                    @onRemoveSlot="remove($event, currentIndex)"
                                />
                            </template>
                        </template>

                        <template v-else>
                            <!-- For Empty Illustration -->
                            <v-empty-info ::type="bookingType"></v-empty-info>
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
        <div class="flex gap-2.5">
            <!-- From -->
            <input
                type="hidden"
                :name="controlName + '[id]'"
            />

            <!-- From -->
            <x-booking::form.control-group class="w-full">
                <x-booking::form.control-group.label class="hidden">
                    @lang('booking::app.admin.catalog.products.edit.types.booking.slots.modal.slot.from')
                </x-booking::form.control-group.label>

                <x-booking::form.control-group.control
                    type="time"
                    ::id="controlName + '[from]'"
                    ::name="controlName + '[from]'"
                    rules="required"
                    :label="trans('booking::app.admin.catalog.products.edit.types.booking.slots.modal.slot.from')"
                    :placeholder="trans('booking::app.admin.catalog.products.edit.types.booking.slots.modal.slot.from')"
                />

                <x-booking::form.control-group.error ::control-name="controlName + '[from]'" />
            </x-booking::form.control-group>

            <!-- To -->
            <x-booking::form.control-group class="w-full">
                <x-booking::form.control-group.label class="hidden">
                    @lang('booking::app.admin.catalog.products.edit.types.booking.slots.modal.slot.to')
                </x-booking::form.control-group.label>

                <x-booking::form.control-group.control
                    type="time"
                    ::id="controlName + '[to]'"
                    ::name="controlName + '[to]'"
                    rules="required"
                    :label="trans('booking::app.admin.catalog.products.edit.types.booking.slots.modal.slot.to')"
                    :placeholder="trans('booking::app.admin.catalog.products.edit.types.booking.slots.modal.slot.to')"
                />

                <!-- Form Avoiding object value in last input field -->
                <x-booking::form.control-group.control type="hidden" />

                <x-booking::form.control-group.error ::control-name="controlName + '[to]'" />
            </x-booking::form.control-group>

            <!-- Delete Icon -->
            <div
                class="icon-delete w-fit cursor-pointer p-1.5 text-2xl transition-all"
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
                        "@lang('booking::app.admin.catalog.products.edit.types.booking.slots.modal.slot.sunday')",
                        "@lang('booking::app.admin.catalog.products.edit.types.booking.slots.modal.slot.monday')",
                        "@lang('booking::app.admin.catalog.products.edit.types.booking.slots.modal.slot.tuesday')",
                        "@lang('booking::app.admin.catalog.products.edit.types.booking.slots.modal.slot.wednesday')",
                        "@lang('booking::app.admin.catalog.products.edit.types.booking.slots.modal.slot.thursday')",
                        "@lang('booking::app.admin.catalog.products.edit.types.booking.slots.modal.slot.friday')",
                        "@lang('booking::app.admin.catalog.products.edit.types.booking.slots.modal.slot.saturday')"
                    ],

                    currentIndex: '',
                }
            },

            created() {
                if ( ! this.bookingProduct || ! this.bookingProduct.slots) {
                    return;
                }

                const slots = this.bookingProduct.slots;

                if (this.bookingProduct.same_slot_all_days) {
                    this.slots['same_for_week'] = slots ?? this.slots['same_for_week'];
                } else {
                    this.slots['different_for_week'] = slots.slice(0, 7);
                }

                this.slots['different_for_week'].forEach((slot, index) => {
                    if (this.slotSpansTwoDays(slot)) {
                        const secondDaySlot = { ...slot, from: '00:00' };
                        this.slots['different_for_week'].splice(index + 1, 0, secondDaySlot);
                        index++;
                    }
                });

                if (slots.length > 7) {
                    this.slots['different_for_week'] = this.slots['different_for_week'].concat(slots.slice(7));
                }
            },

            methods: {
                slotSpansTwoDays(slot) {
                    if (slot.length) {
                        slot.forEach(element => {
                            const from = element['from'].split(':');
                            const to = element['to'].split(':');

                            return parseInt(from) > parseInt(to);
                        });
                    }
                },

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
                        for (let i = 0; i < Object.keys(params).length / 3; i++) {
                            const fromKey = `booking[slots][${i}][from]`;
                            const toKey = `booking[slots][${i}][to]`;
                            const fromValue = params[fromKey];
                            const toValue = params[toKey];

                            if (fromValue && toValue) {
                                const slot = {
                                    'id': i + 1,
                                    'from': fromValue,
                                    'to': toValue,
                                };

                                if (this.slots['same_for_week']?.length) {
                                    this.slots['same_for_week'] = this.slots['same_for_week'].concat(slot);
                                } else {
                                    this.slots['same_for_week'].push(slot);
                                }
                            }
                        }

                        this.slots['same_for_week'].forEach((slot, index) => {
                            slot.id = index + 1;
                        });
                    } else {
                        for (let i = 0; i < Object.keys(params).length / 3; i++) {
                            const fromKey = `booking[slots][${this.currentIndex}][${i}][from]`;
                            const toKey = `booking[slots][${this.currentIndex}][${i}][to]`;
                            const fromValue = params[fromKey];
                            const toValue = params[toKey];

                            if (fromValue && toValue) {
                                const slot = {
                                    'id': i + 1,
                                    'from': fromValue,
                                    'to': toValue,
                                };

                                if (this.slots['different_for_week'][this.currentIndex]?.length) {
                                    this.slots['different_for_week'][this.currentIndex] = this.slots['different_for_week'][this.currentIndex].concat(slot);
                                } else {
                                    this.slots['different_for_week'][this.currentIndex].push(slot);
                                }
                            }
                        }

                        this.slots['different_for_week'][this.currentIndex].forEach((slot, index) => {
                            slot.id = index + 1;
                        });
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

                    this.add();

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