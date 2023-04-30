<nav class="bg-white fixed w-full z-20 top-0 left-0 text-md">
    <x-container class="flex flex-wrap items-center justify-between mx-auto lg:py-8 py-4">
        <a href="https://goldenburggroup.eu" target="_blank" class="flex items-center">
            <img src="{{ asset('images/logo/logo.svg') }}" class="xl:h-8 h-6" alt="Logo">
        </a>
        <div class="flex lg:order-2 items-center xl:gap-6 lg:gap-4 relative">
            <div class="lg:flex flex-col hidden">
                <x-nav-dropdown-lang key="lang" />
            </div>
            <a href="https://goldenburggroup.eu" target="_blank" class="hidden lg:block">
                {{ __('messages.nav.sign-in') }}
            </a>
            <a type="button" href="https://goldenburggroup.eu" target="_blank"
                class="text-black bg-primary hover:bg-opacity-60 transition duration-300 focus:ring-0 focus:outline-none font-medium rounded-xl text-sm py-3 xl:px-6 px-4 text-center mr-3 xl:mr-0">
                {{ __('messages.nav.btn') }}
            </a>

            <button data-collapse-toggle="navbar-sticky" type="button" id="burger"
                class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-primary"
                aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <div class="items-center hidden justify-between w-full lg:flex lg:w-auto lg:order-1 lg:px-4" id="navbar-sticky">
            <ul
                class="flex flex-col lg:p-4 py-2 lg:py-0  mt-4 font-medium rounded-lg lg:flex-row lg:space-x-8 lg:mt-0 lg:bg-white overflow-x-auto lg:overflow-x-hidden lg:overflow-y-hidden h-[94vh] lg:h-auto">
                <li>
                    <x-nav-dropdown key="products" navitems="6" />
                </li>
                <li>
                    <x-nav-dropdown key="platforms" navitems="2" />
                </li>
                <li>
                    <x-nav-dropdown key="learn" navitems="2" />
                </li>
                <li>
                    <x-nav-dropdown key="company" navitems="4" />
                </li>
                <li class="lg:hidden">
                    <x-nav-dropdown-lang key="lang-mob" />
                </li>
                <li
                    class="py-2 pl-3 pr-4 text-gray-700 hover:bg-gray-50 xl:hover:bg-transparent xl:p-0 xl:w-auto cursor-pointer lg:hidden">
                    {{ __('messages.nav.sign-in') }}
                </li>
            </ul>
        </div>

    </x-container>
</nav>
