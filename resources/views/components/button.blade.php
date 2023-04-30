@props(['href', 'width' => 'md:w-52 w-full', 'class' => ''])

<a class="bg-white px-2 h-16 rounded-2xl hover:bg-opacity-80 text-black font-medium flex justify-center items-center gap-2 md:text-lg text-base transition duration-300 cursor-pointer {{ $width }} {{ $class }}" href="https://goldenburggroup.eu" target="_blank">
    {{ $slot }}
</a>
