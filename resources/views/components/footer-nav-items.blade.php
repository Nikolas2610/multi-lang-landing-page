@props(['key', 'navitems'])

<div>
    <div class="text-black font-semibold text-sm">{{ __('messages.nav.' . $key . '.title') }}</div>
    <div class="mt-4 text-gray-300 text-xs">
        @for ($i = 1; $i <= $navitems; $i++)
            <div class="py-1 cursor-pointer hover:text-black transition duration-300">{{ __('messages.nav.' . $key . '.link-' . $i) }}</div>
        @endfor
    </div>
</div>