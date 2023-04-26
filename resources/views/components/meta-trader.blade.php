<div class="h-[820px] bg-white text-white relative overflow-hidden mt-20">
    <x-container class="flex items-center h-full">
        <div class="z-10 w-4/12">
            {{-- Title --}}
            <div class="text-3xl mb-8 font-semibold">
                {{ __('messages.meta-trader.title') }}
            </div>
            {{-- Subtitle --}}
            <div class="text-lg mb-8">
                {{ __('messages.meta-trader.paragraph') }}
            </div>
            {{-- Buttons --}}
            <div class="flex items-center gap-4 mb-6">
                <x-button>
                    <img src="{{ asset('images/icons/file.svg') }}" alt="globe">
                    {{ __('messages.meta-trader.btn-1') }}
                </x-button>
            </div>
            <div class="flex items-center gap-4">
                <x-button>
                    <img src="{{ asset('images/icons/playstore.svg') }}" alt="globe">
                    {{ __('messages.meta-trader.btn-2') }}
                </x-button>
            </div>
        </div>
        <div class="h-full flex items-center justify-end z-10 w-8/12">
            <img src="{{ asset('images/meta-trader-device.png') }}" class="w-full" alt="device">
        </div>
    </x-container>
    {{-- Absolute position vector --}}
    <div class="absolute right-0 -bottom-4 h-full meta-trader-vector w-full">
        <img src="{{ asset('images/meta-trader-vector.png') }}" class="w-full" alt="device">
    </div>
</div>
