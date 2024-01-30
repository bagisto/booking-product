<x-admin::layouts>
    @push('styles')
        @bagistoVite(['src/Resources/assets/css/admin.css'], 'booking')
    @endpush

    <!-- Page Title -->
    <x-slot:title>
        @lang('booking::app.admin.sales.bookings.index.title')
    </x-slot>

    <div class="flex gap-[16px] justify-between items-center max-sm:flex-wrap">
        <p class="py-3 text-xl text-gray-800 dark:text-white font-bold">
            @lang('booking::app.admin.sales.bookings.index.title')
        </p>

        <div class="flex gap-2.5 items-center">
            <div class="grid grid-cols-2">
                <a
                    href="{{ route('admin.sales.bookings.index') }}"
                    class="icon-calendar p-1.5 border border-black text-xl cursor-pointer {{ request('view_type') ? '' : 'bg-gray-600 text-white' }}"
                >
                </a>

                <a
                    href="{{ route('admin.sales.bookings.index', ['view_type' => 'calendar']) }}"
                    class="icon-cancel p-1.5 text-xl border border-black cursor-pointer {{ request('view_type') ? 'bg-gray-600 text-white' : '' }}"
                >
                </a>
            </div>
            <!-- Export Modal -->
            @if (! request('view_type'))
                <x-admin::datagrid.export src="{{ route('admin.sales.bookings.index') }}" />
            @endif
        </div>
    </div>

    <!-- Datagrid -->
    @if (! request('view_type'))
        <x-admin::datagrid src="{{ route('admin.sales.bookings.index') }}" />
    @else
        @include('booking::admin.sales.bookings.calendar')
    @endif
</x-admin::layouts>