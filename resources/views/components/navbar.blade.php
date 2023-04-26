<nav class="bg-white fixed w-full z-20 top-0 left-0">
    <x-container class="flex flex-wrap items-center justify-between mx-auto py-8">
        <a href="https://flowbite.com/" class="flex items-center">
            <img src="{{ asset('images/logo/logo.svg') }}" class="h-8" alt="Logo">
        </a>
        <div class="flex md:order-2 items-center gap-4 relative">
            <div class="md:flex flex-col hidden">
                <x-nav-dropdown-lang title="En" key="lang" />
            </div>
            <a href="" class="hidden md:block">Sign In</a>
            <button type="button"
                class="text-black bg-primary hover:bg-opacity-60 transition duration-300 focus:ring-0 focus:outline-none font-medium rounded-xl text-sm py-3 px-6 text-center mr-3 md:mr-0">
                Get started
            </button>

            <button data-collapse-toggle="navbar-sticky" type="button" id="burger"
                class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-primary"
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
        <div class="items-center hidden justify-between w-full md:flex md:w-auto md:order-1 px-4" id="navbar-sticky">
            <ul
                class="flex flex-col p-4 md:p-0 mt-4 font-medium rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:bg-white overflow-x-auto md:overflow-x-hidden md:overflow-y-hidden h-[80vh] md:h-auto">
                <li>
                    <x-nav-dropdown title="Products" key="products" navitems="6" />
                </li>
                <li>
                    <x-nav-dropdown title="Platforms" key="platforms" navitems="2" />
                </li>
                <li>
                    <x-nav-dropdown title="Learn" key="learn" navitems="2" />
                </li>
                <li>
                    <x-nav-dropdown title="Company" key="company" navitems="4" />
                </li>
                <li class="md:hidden">
                    <x-nav-dropdown-lang title="En" key="lang-mob" />
                </li>
                <li
                    class="py-2 pl-3 pr-4 text-gray-700 hover:bg-gray-50 md:hover:bg-transparent md:p-0 md:w-auto cursor-pointer md:hidden">
                    Sign in
                </li>
            </ul>
        </div>

    </x-container>
</nav>
