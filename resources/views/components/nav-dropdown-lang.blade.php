@props(['key'])

<button id="dd-{{ $key }}__btn" data-dropdown-toggle="dd-{{ $key }}"
    class="flex items-center justify-between w-full py-2 pl-3 pr-4 text-gray-700 hover:bg-gray-50 lg:hover:bg-transparent lg:p-0 lg:w-auto capitalize">
    {{ Request::path() }}
    <svg class="w-5 h-5 ml-1 transition duration-300 rotate-180" id="dd-{{ $key }}__icon" aria-hidden="true"
        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd"
            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
            clip-rule="evenodd"></path>
    </svg>
</button>
<!-- Dropdown menu -->
<div id="dd-{{ $key }}"
    class="z-10 hidden lg:mt-5 lg:opacity-0 transition-opacity duration-300 lg:absolute font-normal bg-white rounded-lg lg:w-44">
    <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownLargeButton">
        <li>
            @if (Request::path() !== 'en')
                <a href="/en" class="block px-4 py-2 hover:bg-primary transition-colors duration-300 rounded">
                    English
                </a>
            @endif
            @if (Request::path() !== 'it')
                <a href="/it" class="block px-4 py-2 hover:bg-primary transition-colors duration-300 rounded">
                    Italian
                </a>
            @endif
            @if (Request::path() !== 'es')
                <a href="/es" class="block px-4 py-2 hover:bg-primary transition-colors duration-300 rounded">
                    Spanish
                </a>
            @endif
        </li>
    </ul>
</div>
