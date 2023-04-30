@props(['key', 'active' => false])

<button
    class="flex justify-center items-center flex-col md:w-28 px-5 py-5 rounded-3xl gap-2 transition duration-500 cursor-pointer trader__btn @if ($active) bg-secondary @else bg-gray-300 @endif hover:bg-opacity-80" 
    data-key={{ $key }}>
    <div class="flex justify-center items-center relative 
    @if ($active) filter invert @endif"
    id="trader__icons-{{ $key }}">
        {{ $slot }}
    </div>
    <div class="text-white md:text-lg text-base @if (!$active) hidden @endif" id="trader__title-{{ $key }}">
        {{ __('messages.widgets.items.item-' . $key + 1 . '.title') }}
    </div>
</button>
