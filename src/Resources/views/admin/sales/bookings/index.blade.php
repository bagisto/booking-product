@push('styles')
    @bagistoVite([
        'src/Resources/assets/css/app.css',
        'src/Resources/assets/js/app.js'
    ], 'booking')
@endpush

<x-admin::layouts>
    <!-- Page Title -->
    <x-slot:title>
        @lang('booking::app.admin.sales.bookings.index.title')
    </x-slot>

    <v-booking-products></v-booking-products>

    @pushOnce('scripts')
        <script type="text/x-template" id="v-booking-products-template">
            <div class="flex items-center justify-between gap-[16px] max-sm:flex-wrap">
                <p class="py-3 text-xl font-bold text-gray-800 dark:text-white">
                    @lang('booking::app.admin.sales.bookings.index.title')
                </p>
        
                <div class="flex items-center gap-2.5">
                    <!-- Export Modal -->
                    <x-admin::datagrid.export
                        v-if="viewType == 'table'"
                        src="{{ route('admin.sales.bookings.index') }}" 
                    />
        
                    <!-- View Switcher -->
                    <div class="grid grid-cols-2 border border-gray-300 dark:border-gray-700">
                        <!-- List Icon -->
                        <button
                            class="icon-list cursor-pointer p-1.5 text-xl"
                            :class="{'bg-blue-700 text-white' : viewType == 'table'}"
                            @click="viewType ='table'"
                        >
                        </button>
        
                        <!-- Calender Icon -->
                        <button
                            class="icon-calendar cursor-pointer p-1.5 text-xl"
                            :class="{'bg-blue-700 text-white' : viewType == 'calendar'}"
                            @click="viewType ='calendar'"
                        >
                        </button>
                    </div>
                </div>
            </div>

            <template v-if="viewType == 'table'">
                <x-admin::datagrid :src="route('admin.sales.bookings.index')" />
            </template>

            <template v-else>
                @include('booking::admin.sales.bookings.calendar')
            </template>
        </script>

        <script type="module">
            app.component('v-booking-products', {
                template: '#v-booking-products-template',
                
                data() {
                    return {
                        viewType: 'table',
                    };
                },
            });
        </script>
    @endPushOnce
</x-admin::layouts>