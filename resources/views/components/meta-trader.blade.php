<div class="lg:h-[820px] bg-white text-black lg:text-white relative overflow-hidden mt-20">
    <x-container class="lg:flex items-center h-full relative z-10">
        <div class="z-10 lg:w-4/12">
            {{-- Title --}}
            <div class="md:text-3xl text-2xl mb-8 font-semibold">
                {{ __('messages.meta-trader.title') }}
            </div>
            {{-- Paragraph --}}
            <div class="text-lg mb-8 z-10">
                {{ __('messages.meta-trader.paragraph') }}
            </div>
            {{-- Buttons --}}
            <div class="flex lg:block items-center gap-4 mt-6 lg:mt-0">
                <x-button class="border lg:border-0 lg:mb-6">
                    <img src="{{ asset('images/icons/file.svg') }}" alt="globe">
                    {{ __('messages.meta-trader.btn-1') }}
                </x-button>
                <x-button class="border lg:border-0">
                    <img src="{{ asset('images/icons/playstore.svg') }}" alt="globe">
                    {{ __('messages.meta-trader.btn-2') }}
                </x-button>
            </div>
        </div>
        {{-- Device --}}
        <div class="lg:h-full flex items-center justify-end z-10 lg:w-8/12 mt-10 lg:mt-0">
            <img src="{{ asset('images/meta-trader-device.png') }}" class="w-full" alt="device">
        </div>
    </x-container>
    {{-- Absolute position vector --}}
    <div class="absolute right-0 -bottom-4 lg:h-full meta-trader-vector w-full">
        <img src="{{ asset('images/meta-trader-vector.png') }}" class="w-full" alt="device">
    </div>
</div>
