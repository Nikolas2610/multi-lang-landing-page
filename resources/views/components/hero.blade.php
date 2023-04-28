<div class="h-[834px] bg-custom-radial-gradient text-white relative mt-24">
    <x-container class="flex items-center h-full">
        <div class="z-10 w-1/2">
            {{-- Title --}}
            <div class="text-primary text-3xl mb-6 uppercase font-semibold w-full">
                {{ __('messages.hero.title') }}
            </div>
            {{-- Subtitle --}}
            <div class="text-xl mb-6 font-semibold">
                {{ __('messages.hero.subtitle') }}
            </div>
            {{-- List items --}}
            <ul class="list-disc ml-8 mb-8 text-lg">
                @for ($i = 1; $i <= 3; $i++)
                    <li>
                        {{ __('messages.hero.list.item-' . $i) }}
                    </li>
                @endfor
            </ul>
            {{-- Buttons --}}
            <div class="flex items-center gap-4 mb-6">
                <x-button>
                    <img src="{{ asset('images/icons/apple.svg') }}" alt="globe">
                    {{ __('messages.hero.btn-1') }}
                </x-button>
                <x-button>
                    <img src="{{ asset('images/icons/playstore.svg') }}" alt="globe">
                    {{ __('messages.hero.btn-2') }}
                </x-button>
            </div>
            <div class="flex items-center gap-4">
                <x-button>
                    <img src="{{ asset('images/icons/earth-globe.svg') }}" alt="globe">
                    {{ __('messages.hero.btn-3') }}
                </x-button>
                <x-button width="w-fit-content">
                    <img src="{{ asset('images/icons/qr.svg') }}" alt="qr">
                </x-button>
            </div>
        </div>
        <div class="h-full flex items-center justify-end z-10 w-1/2">
            <img src="{{ asset('images/device.png') }}" class="w-full" alt="device">
        </div>
    </x-container>
    {{-- Absolute position vector --}}
    <div class="absolute right-0 top-0 h-full">
        <img src="{{ asset('images/hero-vector.png') }}" class="" alt="device">
    </div>
</div>
