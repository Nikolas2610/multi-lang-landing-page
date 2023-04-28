@props(['key', 'active' => false])

<button
    class="flex justify-center items-center flex-col py-5 w-28 rounded-3xl gap-2 transition duration-500 cursor-pointer trader__btn @if ($active) bg-secondary @else bg-gray-300 @endif hover:bg-opacity-80" 
    data-key={{ $key }}>
    <div class="flex justify-center items-center relative 
    @if ($active) filter invert @endif"
    id="trader__icons-{{ $key }}">
        {{ $slot }}
    </div>
    <div class="text-white text-lg @if (!$active) hidden @endif" id="trader__title-{{ $key }}">
        {{ __('messages.widgets.items.item-' . $key + 1 . '.title') }}
    </div>
</button>
