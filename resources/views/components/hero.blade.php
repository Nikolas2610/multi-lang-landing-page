<div class="h-full bg-custom-radial-gradient text-white relative xl:mt-24 pt-10">
    <x-container class="lg:flex items-center h-full z-10 relative">
        <div class="z-10 lg:w-1/2 flex lg:block lg:flex-row flex-col justify-center h-full lg:h-auto">
            {{-- Title --}}
            <div class="text-primary md:text-3xl text-2xl mb-6 uppercase font-semibold w-full md:leading-50 leading-10">
                {{ __('messages.hero.title') }}
            </div>
            {{-- Subtitle --}}
            <div class="text-xl mb-6 font-medium">
                {{ __('messages.hero.subtitle') }}
            </div>
            {{-- List items --}}
            <ul class="list-disc ml-8 mb-8 lg:text-lg text-base">
                @for ($i = 1; $i <= 3; $i++)
                    <li>
                        {{ __('messages.hero.list.item-' . $i) }}
                    </li>
                @endfor
            </ul>
            {{-- Buttons --}}
            <div class="flex items-center gap-4 mb-6">
                <div class="w-1/2 md:w-auto">
                    <x-button>
                        <img src="{{ asset('images/icons/apple.svg') }}" alt="globe">
                        {{ __('messages.hero.btn-1') }}
                    </x-button>
                </div>
                <div class="w-1/2 md:w-auto">
                    <x-button>
                        <img src="{{ asset('images/icons/playstore.svg') }}" alt="globe">
                        {{ __('messages.hero.btn-2') }}
                    </x-button>
                </div>
            </div>
            <div class="flex items-center gap-4">
                <div class="w-1/2 md:w-auto">
                    <x-button>
                        <img src="{{ asset('images/icons/earth-globe.svg') }}" alt="globe">
                        {{ __('messages.hero.btn-3') }}
                    </x-button>
                </div>
                <div class="w-1/2 md:w-auto">
                    <x-button width="w-fit-content">
                        <img src="{{ asset('images/icons/qr.svg') }}" alt="qr">
                    </x-button>
                </div>
            </div>
        </div>
        {{-- Device --}}
        <div class="h-full lg:flex items-center justify-end z-10 w-1/2 hidden">
            <img src="{{ asset('images/device.png') }}" class="w-full" alt="device">
        </div>
    </x-container>
    {{-- Absolute position vector --}}
    <div class="absolute right-0 top-0 h-full flex justify-end">
        <img src="{{ asset('images/hero-vector.png') }}" class="h-full text-right" alt="device">
    </div>
</div>
