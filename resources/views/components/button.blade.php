@props(['href', 'width' => 'w-52'])

<a class="bg-white px-2 h-16 rounded-2xl hover:bg-opacity-80 text-black font-medium flex justify-center items-center gap-2 text-lg transition duration-300 cursor-pointer {{ $width }}">
    {{ $slot }}
</a>
