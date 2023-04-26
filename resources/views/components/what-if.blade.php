<section class="relative overflow-hidden">
    {{-- What if Block --}}
    <x-container class="h-[834px] flex justify-center items-center">
        <div class="w-7/12">
            <img src="{{ asset('images/what-if-device.png') }}" alt="device">
        </div>
        <div class="w-5/12">
            {{-- Title --}}
            <div class="text-3xl mb-8 font-semibold w-2/4">
                {{ __('messages.what-if.title') }}
            </div>
            {{-- List items --}}
            <ul class="list-disc ml-8">
                @for ($i = 1; $i <= 7; $i++)
                    <li>
                        {{ __('messages.what-if.list.item-' . $i) }}
                    </li>
                @endfor
            </ul>
        </div>
    </x-container>
    {{-- Sub footer --}}
    <x-container class="h-[424px] flex justify-center flex-col relative z-10">
        {{-- Title --}}
        <div class="text-4xl mb-10 font-semibold w-4/12">
            {{ __('messages.sub-footer.title') }}
        </div>
        {{-- Button --}}
        <a href="#"
            class="bg-primary px-2 h-16 rounded-2xl hover:bg-opacity-80 text-black font-medium flex justify-center items-center gap-2 text-2xl transition duration-300 cursor-pointer w-64">
            {{ __('messages.sub-footer.btn') }}
        </a>
    </x-container>

    {{-- Absolute position vector --}}
    <div class="absolute -right-[211px] -bottom-[537px] h-full meta-trader-vector w-full z-0">
        <img src="{{ asset('images/subfooter-vector.png') }}" class="w-full" alt="device">
    </div>
</section>
