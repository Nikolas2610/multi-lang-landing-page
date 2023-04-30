<x-container class="flex items-center xl:h-[820px] overflow-x-hidden w-full">
    <div class="grid grid-cols-12 xl:gap-10 w-full">
        {{-- Buttons --}}
        <div class="xl:col-span-2 col-span-12 w-full h-fit xl:h-full">
            <div class="flex xl:flex-col justify-center items-center xl:gap-10 gap-4 h-full my-10 xl:my-0">
                <x-top-trader-button key="0">
                    <img src="{{ asset('images/icons/top-trader-platform/security/Vector.svg') }}" alt="circle">
                    <img src="{{ asset('images/icons/top-trader-platform/security/Vector-1.svg') }}" alt="circle"
                        class="absolute top-30 left-30">
                </x-top-trader-button>
                <x-top-trader-button key="1" active={{ true }}>
                    <img src="{{ asset('images/icons/top-trader-platform/simple.svg') }}" alt="circle">
                </x-top-trader-button>
                <x-top-trader-button key="2">
                    <img src="{{ asset('images/icons/top-trader-platform/y.svg') }}" alt="circle">
                </x-top-trader-button>
            </div>
        </div>
        {{-- Images --}}
        <div class="xl:col-span-5 col-span-12 order-2 xl:order-1">
            <div class="flex justify-center">
                <div class="relative md:h-[414px] md:w-[414px] h-[314px] w-[314px]">
                    <x-top-trader-image imageName="circle2" />
                    <x-top-trader-image imageName="circle" active={{ true }} />
                    <x-top-trader-image imageName="circle3" />
                </div>
            </div>
        </div>
        {{-- Content --}}
        <div class="xl:col-span-5 col-span-12 order-1 xl:order-2">
            {{-- Main Title --}}
            <div class="flex justify-center">
                <div class="md:text-3xl text-2xl text-primary w-fit-content font-semibold border-b border-black pb-8 mb-6">
                    {{ __('messages.widgets.title') }}
                </div>
            </div>
            {{-- Change content --}}
            <div class="flex justify-center">
                <div class="relative min-h-[350px] md:w-[400px] w-[300px] xl:min-h-fit">
                    <x-top-trader-content-block id="trustworthy" item="1" class="" />
                    <x-top-trader-content-block id="simple" item="2" class="active" />
                    <x-top-trader-content-block id="informative" item="3" class="" />
                </div>
            </div>
        </div>
    </div>
</x-container>