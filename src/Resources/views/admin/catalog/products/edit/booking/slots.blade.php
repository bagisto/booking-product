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
                    @click="$refs.drawerform.toggle()"
                >
                    @lang('booking::app.admin.catalog.products.edit.booking.slots.add')
                </div>
            </div>
        </div>

        <!-- Table Information -->
        <div class="overflow-x-auto">
            <!-- For Same Slot All Days -->
            <template v-if="parseInt(bookingProduct.same_slot_all_days)">
                <template v-if="same_for_week.length">
                    <div class="flex flex-wrap gap-x-2.5">
                        <div
                            class="flex flex-wrap gap-1 items-center min-h-[38px] dark:border-gray-800"
                            v-for="(data, index) in same_for_week"
                        >
                            <p class="flex items-center py-1 px-2 bg-gray-600 rounded text-white font-semibold">
                                @{{ data.from }} - @{{ data.to }}
    
                                <span
                                    class="icon-cross text-white text-lg ltr:ml-1.5 rtl:mr-1.5 cursor-pointer"
                                    @click="removeIndex(index)"
                                ></span>
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
                    class="grid border-b border-slate-300 dark:border-gray-800 last:border-b-0"
                    v-for="(day, dayIndex) in week_days"
                >
                    <div class="flex grid-cols-3 gap-10 p-4 items-center justify-between">
                        <p v-text="day"></p>

                        <div class="flex flex-wrap gap-1 items-center min-h-[38px] dark:border-gray-800">
                            <template v-if="slots.different_for_week[dayIndex].length" v-for="(item, itemIndex) in slots.different_for_week[dayIndex]">
                                <p class="flex items-center py-1 px-2 bg-gray-600 rounded text-white font-semibold">
                                    @{{ item.from }} - @{{ item.to }}

                                    <span
                                        class="icon-cross text-white text-lg ltr:ml-1.5 rtl:mr-1.5 cursor-pointer"
                                        @click="removeIndex(itemIndex)"
                                    ></span>
                                </p>    
                            </template>

                            <template v-else>
                                <p class="rounded-xl px-2.5 py-1.5 bg-gray-300">Unavailalable</p>
                            </template>
                        </div>

                        <p
                            class="place-content-start text-right text-blue-600 cursor-pointer transition-all hover:underline"
                            @click="currentIndex=dayIndex;$refs.drawerform.toggle()"
                        >
                            @lang('Add')
                        </p>
                    </div>
                </div>
            </template>
        </div>

        <!-- Drawer component -->
        <x-booking::form
            v-slot="{ meta, errors, handleSubmit }"
            as="div"
            ref="modalForm"
        >
            <form
                @submit.prevent="handleSubmit($event, storeSlot)"
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
                                <button
                                    type="submit"
                                    class="primary-button"
                                >
                                    @lang('booking::app.admin.catalog.products.edit.booking.slots.save')
                                </button>

                                <div
                                    class="primary-button"
                                    @click="addSlot()"
                                >
                                    @lang('booking::app.admin.catalog.products.edit.booking.slots.add')
                                </div>
                            </div>
                        </div>
                    </x-slot:header>

                    <x-slot:content>
                        <div class="grid grid-cols-3 gap-2.5 mx-2.5 py-2.5 text-gray-800 dark:text-white">
                            <div class="w-full">
                                @lang('booking::app.admin.catalog.products.edit.booking.slots.modal.slot.from')
                            </div>
                
                            <div class="w-full">
                                @lang('booking::app.admin.catalog.products.edit.booking.slots.modal.slot.to')
                            </div>
                        </div>

                        <template v-for="(slot, index) in slotAdd">
                            <v-slot-item
                                :control-name="'booking[slots][' + index + ']'"
                                :slot-item="slot"
                                :slot-id="slotId"
                                @onRemoveSlot="remove($event)"
                            />
                        </template>
                    </x-slot:content>
                </x-admin::drawer>
            </form>
        </x-booking::form>

        <!-- Single Edit Drawer component -->
        <x-booking::form
            v-slot="{ meta, errors, handleSubmit }"
            as="div"
            ref="editModalForm"
        >
            <form
                @submit.prevent="handleSubmit($event, editStore)"
                enctype="multipart/form-data"
                ref="editOptionsForm"
            >
                <x-admin::drawer ref="editDrawerform">
                    <x-slot:header>
                        <div class="flex justify-between items-center">
                            <p class="my-2.5 text-xl font-medium text-gray-800 dark:text-white">
                                @lang('booking::app.admin.catalog.products.edit.booking.slots.title')
                            </p>

                            <div class="ltr:mr-11 rtl:ml-11">
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
                        <div class="grid grid-cols-2 gap-2.5 mx-2.5 py-2.5 text-gray-800 dark:text-white">
                            <div class="w-full">
                                @lang('booking::app.admin.catalog.products.edit.booking.slots.modal.slot.from')
                            </div>
                
                            <div class="w-full">
                                @lang('booking::app.admin.catalog.products.edit.booking.slots.modal.slot.to')
                            </div>
                        </div>

                        <div class="grid grid-cols-2 gap-2.5 mx-2.5">
                            <!-- From -->
                            <x-admin::form.control-group.control
                                type="hidden"
                                name="id"
                            />

                            <!-- From Input Field -->
                            <x-booking::form.control-group class="w-full">
                                <x-booking::form.control-group.label class="hidden">
                                    @lang('booking::app.admin.catalog.products.edit.booking.slots.modal.slot.from')
                                </x-booking::form.control-group.label>
                
                                <x-booking::form.control-group.control
                                    type="time"
                                    name="from"
                                    rules="required"
                                    :label="trans('booking::app.admin.catalog.products.edit.booking.slots.modal.slot.from')"
                                    :placeholder="trans('booking::app.admin.catalog.products.edit.booking.slots.modal.slot.from')"
                                />

                                <x-booking::form.control-group.error control-name="from" />
                            </x-booking::form.control-group>
                
                            <!-- To Input Field -->
                            <x-booking::form.control-group class="w-full">
                                <x-booking::form.control-group.label class="hidden">
                                    @lang('booking::app.admin.catalog.products.edit.booking.slots.modal.slot.to')
                                </x-booking::form.control-group.label>
                
                                <x-booking::form.control-group.control
                                    type="time"
                                    name="to"
                                    rules="required"
                                    :label="trans('booking::app.admin.catalog.products.edit.booking.slots.modal.slot.to')"
                                    :placeholder="trans('booking::app.admin.catalog.products.edit.booking.slots.modal.slot.to')"
                                />

                                <!-- For Avoiding object value in last input field -->
                                <x-booking::form.control-group.control type="hidden" />

                                <x-booking::form.control-group.error control-name="to" />
                            </x-booking::form.control-group>
                        </div>
                    </x-slot:content>
                </x-admin::drawer>
            </form>
        </x-booking::form>
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
                :value="slotId"
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

            <div
                class="icon-cross w-fit text-2xl p-1.5 cursor-pointer transition-all"
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
    
                    week_days: [
                        "{{ trans('booking::app.admin.catalog.products.edit.booking.slots.modal.slot.sunday') }}",
                        "{{ trans('booking::app.admin.catalog.products.edit.booking.slots.modal.slot.monday') }}",
                        "{{ trans('booking::app.admin.catalog.products.edit.booking.slots.modal.slot.tuesday') }}",
                        "{{ trans('booking::app.admin.catalog.products.edit.booking.slots.modal.slot.wednesday') }}",
                        "{{ trans('booking::app.admin.catalog.products.edit.booking.slots.modal.slot.thursday') }}",
                        "{{ trans('booking::app.admin.catalog.products.edit.booking.slots.modal.slot.friday') }}",
                        "{{ trans('booking::app.admin.catalog.products.edit.booking.slots.modal.slot.saturday') }}"
                    ],

                    same_for_week: [],

                    different_for_week: [],

                    optionRowCount: 0,

                    currentWeek: '',

                    currentTime: '',

                    currentIndex: '',

                    slotLength: 0,

                    slotAdd: [],

                    slotId: 0,
                }
            },

            created() {
                if (! this.bookingProduct && ! this.bookingProduct.slots) {
                    return;
                }

                if (parseInt(this.bookingProduct.same_slot_all_days)) {
                    this.same_for_week = this.bookingProduct.slots;
                } else {
                    let updatedData = this.bookingProduct.slots?.map((item, index) => {
                        let updatedItem = {};

                        updatedItem[this.week_days[index]] = item;

                        return updatedItem;
                    });

                    console.log(updatedItem, 'update');
                    if (updatedData) {
                        this.different_for_week = updatedData;
                    }
                }

                if (this.same_for_week){
                    let [lastId] = Object.values(this.same_for_week).map(obj => obj.id);
    
                    this.optionRowCount = lastId?.split('_')[1];
                }
            },

            methods: {
                addSlot(dayIndex = null, day = null) {
                    this.slotId++;

                    if (parseInt(this.sameSlotAllDays)) {
                        this.slotAdd.push({
                            'from': '',
                            'to': '',
                        });
                    } else {
                        if (this.slotLength === 0) {
                            this.slotAdd.push({
                                'id': '',
                                'from': '',
                                'to': '',
                            });
                        } else {
                            this.slotAdd[this.slotLength++] = {
                                'id': '',
                                'from': '',
                                'to': ''
                            };
                        }
                    }
                },

                remove(slot, dayIndex = null) {
                    if (dayIndex != null) {
                        let index = this.slots['different_for_week'][dayIndex].indexOf(slot)
    
                        this.slots['different_for_week'][dayIndex].splice(index, 1)
                    } else {
                        let index = this.slots['same_for_week'].indexOf(slot)
    
                        this.slots['same_for_week'].splice(index, 1)
                    }
                },

                removeIndex(index) {
                    if (parseInt(this.sameSlotAllDays)) {
                        this.same_for_week.splice(index, 1);
                    } else {
                        this.slots['different_for_week'][this.currentIndex].splice(index, 1);
                    }
                },

                storeSlot(params, { resetForm }) {
                    const formDataObj = {};

                    let formData = new FormData(this.$refs.createOptionsForm);

                    formData.forEach((value, key) => (formDataObj[key] = value));

                    this.slotLength = this.slotAdd.length;

                    this.slotData(formDataObj);

                    this.slotAdd = [];

                    this.$refs.drawerform.toggle();
                },

                editSlot(element) {
                    if (parseInt(this.sameSlotAllDays)) {
                        this.$refs.editModalForm.setValues(this.same_for_week[element]);
                    } else {
                        this.$refs.editModalForm.setValues(element);
                    }

                    this.$refs.editDrawerform.toggle();
                },

                editStore(params) {
                    if (parseInt(this.sameSlotAllDays)) {
                        let foundIndex = this.same_for_week.findIndex(item => item.id === params.id);
                        
                        if (foundIndex !== -1) {
                            this.same_for_week[foundIndex] = { 
                                ...this.same_for_week[foundIndex], 
                                ...params
                            };
                        }
                    } else {
                        this.different_for_week.forEach(element => {
                            if (element.hasOwnProperty(this.currentWeek)) {
                                element[this.currentWeek][this.currentTime] = params
                            }
                        });
                    }

                    this.$refs.editDrawerform.toggle();
                },

                removeSlot(element) {
                    this.$emitter.emit('open-confirm-modal', {
                        agree: () => {
                            console.log(element);
                            if (parseInt(this.sameSlotAllDays)) {

                            } else {
                                this.different_for_week.forEach(element => {
                                    if (element.hasOwnProperty(this.currentWeek)) {
                                        element[this.currentWeek][this.currentTime] = {id: element.id, from: '00:00', to: '00:00'}
                                    }
                                });
                            }
                        },
                    });
                },

                slotData(params) {
                    let item = [];

                    if (parseInt(this.sameSlotAllDays)) {
                        Object.keys(params).forEach(key => {
                            let matches = key.match(/booking\[slots\]\[(\d+)\]\[(from|to|id)\]/);

                            if (params[key] == '[object Object]') {
                                this.optionRowCount++;
                                params[key] = 'option_' + this.optionRowCount;
                            }

                            if (matches) {
                                let index = parseInt(matches[1]);

                                if (! item[index]) {
                                    item[index] = {};
                                }
                                if (params[key].length) {
                                    item[index][matches[2]] = params[key];
                                }
                            }
                        });

                        if (this.same_for_week?.length) {
                            this.same_for_week = this.same_for_week.concat(item);
                        } else {
                            this.same_for_week = item;
                        }

                        this.slots.same_for_week = [];
                    } else {
                        for (const key in params) {
                            let matches = key.match(/booking\[slots\]\[(\d+)\]\[(from|to|id)\]/);
                            const slotIndex = matches[1];
                            const prop = matches[2];

                            if (! this.slots['different_for_week'][this.currentIndex][slotIndex]) {
                                this.slots['different_for_week'][this.currentIndex][slotIndex] = {};
                            }

                            this.slots['different_for_week'][this.currentIndex][slotIndex][prop] = params[key];
                        }
                    }
                },
            },
        });

        app.component('v-slot-item', {
            template: '#v-slot-item-template',
    
            props: ['controlName', 'slotItem', 'slotId'],

            methods: {
                remove() {
                    this.$emit('onRemoveSlot', this.slotItem)
                },
            }
        });
    </script>
@endpushOnce