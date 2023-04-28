<x-container class="flex items-center w-full h-[820px] overflow-x-hidden">
    <div class="grid grid-cols-12 gap-10 w-full">
        {{-- Buttons --}}
        <div class="col-span-2">
            <div class="flex flex-col justify-center items-center gap-10 h-full">
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
        <div class="col-span-5">
            <div class="relative h-[414px] w-[414px]">
                <x-top-trader-image imageName="circle2" />
                <x-top-trader-image imageName="circle" active={{ true }} />
                <x-top-trader-image imageName="circle3" />
            </div>
        </div>
        <div class="col-span-5">
            {{-- Title --}}
            <div class="text-3xl text-primary w-fit-content font-semibold border-b border-black pb-8 mb-6">
                {{ __('messages.widgets.title') }}
            </div>
            {{-- List content --}}
            <div class="relative">
                <x-top-trader-content-block id="trustworthy" item="1" class="" />
                <x-top-trader-content-block id="simple" item="2" class="active" />
                <x-top-trader-content-block id="informative" item="3" class="" />
            </div>
        </div>
    </div>
</x-container>
