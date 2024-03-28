@props([
    'isActive' => false,
])

<v-booking-modal
    is-active="{{ $isActive }}"
    {{ $attributes }}
>
    @isset($open)
        <template v-slot:open>
            {{ $open }}
        </template>
    @endisset

    @isset($header)
        <template v-slot:header="{ close, isOpen }">
            <div {{ $header->attributes->merge(['class' => 'flex justify-between items-center gap-2.5 py-3']) }}>
                {{ $header }}

                <span
                    class="icon-cancel-1 text-3xl cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-950 hover:rounded-md"
                    @click="close"
                >
                </span>
            </div>
        </template>
    @endisset

    @isset($content)
        <template v-slot:content>
            <div {{ $content->attributes->merge(['class' => 'py-2.5 border-b dark:border-gray-800']) }}>
                {{ $content }}
            </div>
        </template>
    @endisset

    @isset($footer)
        <template v-slot:footer>
            <div {{ $footer->attributes->merge(['class' => 'flex gap-4 justify-end py-2.5']) }}>
                {{ $footer }}
            </div>
        </template>
    @endisset
</v-booking-modal>

@pushOnce('scripts')
    <script
        type="text/x-template"
        id="v-booking-modal-template"
    >
        <div>
            <div @click="open">
                <slot name="open"></slot>
            </div>

            <transition
                tag="div"
                name="modal-overlay"
                enter-class="ease-out duration-300"
                enter-from-class="opacity-0"
                enter-to-class="opacity-100"
                leave-class="ease-in duration-200"
                leave-from-class="opacity-100"
                leave-to-class="opacity-0"
            >
            </transition>

            <transition
                tag="div"
                name="modal-content"
                enter-class="ease-out duration-300"
                enter-from-class="opacity-0 translate-y-4 md:translate-y-0 md:scale-95"
                enter-to-class="opacity-100 translate-y-0 md:scale-100"
                leave-class="ease-in duration-200"
                leave-from-class="opacity-100 translate-y-0 md:scale-100"
                leave-to-class="opacity-0 translate-y-4 md:translate-y-0 md:scale-95"
            >
                <div
                    class="calendar absolute bg-white border border-gray-300 text-xs transform -translate-x-1/2 rounded-md transition-all duration-300 shadow-md z-[9999]"
                    :class="isOpen ? 'w-[305px] h-fit px-4 py-3' : 'hidden'"
                >
                    <slot
                        name="header"
                        :close="close"
                        :isOpen="isOpen"
                    >
                        Default Header
                    </slot>

                    <slot name="content">
                        Default Content
                    </slot>
                    
                    <slot name="footer">
                        Default footer
                    </slot>
                </div>
            </transition>
        </div>
    </script>

    <script type="module">
        app.component('v-booking-modal', {
            template: '#v-booking-modal-template',

            props: ['isActive'],

            data() {
                return {
                    isOpen: this.isActive,
                };
            },

            methods: {
                toggle() {
                    this.isOpen = true;

                    this.$emit('toggle', { isActive: this.isOpen });
                },

                open() {
                    this.isOpen = true;

                    this.$emit('open', { isActive: this.isOpen });
                },

                close() {
                    this.isOpen = false;

                    this.$emit('close', { isActive: this.isOpen });
                },
            }
        });
    </script>
@endPushOnce