<section class="relative overflow-hidden">
    {{-- What if Block --}}
    <x-container class="lg:h-[834px] flex justify-center lg:items-center items-start flex-col lg:flex-row py-20 lg:py-0">
        <div class="lg:w-7/12 order-2 lg:order-1 mt-14 lg:mt-0 flex justify-center w-full">
            <img src="{{ asset('images/what-if-device.png') }}" alt="device" class="lg:h-3/4 lg:w-3/4">
        </div>
        <div class="lg:w-5/12 order-1 lg:order-2">
            {{-- Title --}}
            <div class="lg:text-3xl text-2xl mb-8 font-semibold">
                {{ __('messages.what-if.title') }}
            </div>
            {{-- List items --}}
            <ul class="list-disc ml-8 text-lg">
                @for ($i = 1; $i <= 7; $i++)
                    <li>
                        {{ __('messages.what-if.list.item-' . $i) }}
                    </li>
                @endfor
            </ul>
        </div>
    </x-container>
    {{-- Sub footer --}}
    <x-container class="lg:h-[424px] flex justify-center flex-col relative z-10 pb-24 lg:mb-0">
        {{-- Title --}}
        <div class="lg:text-3xl text-2xl mb-10 font-semibold xl:w-5/12 lg:w-1/2 sm:w-7/12 w-10/12">
            {{ __('messages.sub-footer.title') }}
        </div>
        {{-- Button --}}
        <a href="https://goldenburggroup.eu" target="_blank"
            class="bg-primary px-2 h-16 rounded-2xl hover:bg-opacity-80 text-black font-medium flex justify-center items-center gap-2 text-lg transition duration-300 cursor-pointer md:w-72 w-60">
            {{ __('messages.sub-footer.btn') }}
        </a>
    </x-container>

    {{-- Absolute position vector --}}
    <div class="absolute -right-[211px] xl:-bottom-[537px] -bottom-[795px] lg:-bottom-[550px] h-full meta-trader-vector w-full z-0 hidden md:block">
        <img src="{{ asset('images/subfooter-vector.png') }}" class="w-full" alt="device">
    </div>
</section>
