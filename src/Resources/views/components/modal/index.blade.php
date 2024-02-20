@props([
    'isActive' => false,
])

<v-modal
    is-active="{{ $isActive }}"
    {{ $attributes }}
>
    @isset($open)
        <template v-slot:open>
            {{ $open }}
        </template>
    @endisset

    @isset($header)
        <template v-slot:header="{ open, isOpen }">
            <div {{ $header->attributes->merge(['class' => 'flex justify-between items-center gap-2.5 px-4 py-3 border-b dark:border-gray-800']) }}>
                {{ $header }}
            </div>
        </template>
    @endisset

    @isset($content)
        <template v-slot:content>
            <div {{ $content->attributes->merge(['class' => 'px-2.5 py-4 border-b dark:border-gray-800']) }}>
                {{ $content }}
            </div>
        </template>
    @endisset

    @isset($footer)
        <template v-slot:footer="{ close, isOpen }">
            <div {{ $content->attributes->merge(['class' => 'flex gap-4 justify-end items-center py-2.5']) }}>
                <span
                    class="cursor-pointer text-blue-500 font-medium text-sm"
                    @click="close"
                >
                    Close
                </span>

                {{ $footer }}
            </div>
        </template>
    @endisset
</v-modal>

@pushOnce('scripts')
    <script type="text/x-template" id="v-modal-template">
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
                    class="calendar absolute w-[300px] h-[380px] px-4 py-3 bg-white border border-gray-300 text-xs transform -translate-x-1/2 rounded-md transition-all duration-300 shadow-md z-20"
                    :class="isOpen ? 'w-[300px] h-[380px] px-4 py-3' : 'hidden'"
                >
                    <slot name="content">
                        Default Content
                    </slot>
                    
                    <slot
                        name="footer"
                        :close="close"
                        :isOpen="isOpen"
                    >
                    </slot>
                </div>
            </transition>
        </div>
    </script>

    <script type="module">
        app.component('v-modal', {
            template: '#v-modal-template',

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