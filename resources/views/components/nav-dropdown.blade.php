@props(['title', 'key', 'navitems'])

<button id="dd-{{ $key }}__btn" data-dropdown-toggle="dd-{{ $key }}"
    class="flex items-center justify-between w-full py-2 pl-3 pr-4  text-gray-700 hover:bg-gray-50 md:hover:bg-transparent md:p-0 md:w-auto">
    {{ $title }}
    <svg class="w-5 h-5 ml-1 transition duration-300 rotate-180" id="dd-{{ $key }}__icon" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd"
            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
            clip-rule="evenodd"></path>
    </svg>
</button>
<!-- Dropdown menu -->
<div id="dd-{{ $key }}" class="z-10 hidden transition-opacity md:opacity-0 duration-300 md:absolute font-normal bg-white rounded-lg md:shadow md:w-44 w-full">
    <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownLargeButton">
        @for ($i = 1; $i <= $navitems; $i++)
            <li>
                <a href="#" class="block px-4 py-2 hover:bg-primary transition-colors duration-300 rounded">{{ __('messages.nav.' . $key . '.link-' . $i) }}</a>
            </li>
        @endfor
    </ul>
</div>
