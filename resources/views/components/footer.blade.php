<footer class="bg-gray-100">
    <x-container class="pb-5 pt-10">
        <div class="lg:flex justify-between gap-10">
            <div class="lg:w-2/12 w-full">
                <img src="{{ asset('images/logo/logo.svg') }}" class="h-8 lg:h-6" alt="Logo">
            </div>
            <div class="lg:w-8/12 w-full">
                {{-- Footer menu --}}
                <div
                    class="grid lg:grid-cols-5 grid-cols-2 md:grid-cols-3 justify-between lg:mb-8 mb-12 lg:gap-2 gap-y-8 lg:gap-y-0 mt-8 lg:mt-0">
                    <div class="col-span-1">
                        <x-footer-nav-items key="products" navitems="6" />
                    </div>
                    <div class="col-span-1">
                        <x-footer-nav-items key="platforms" navitems="2" />
                    </div>
                    <div class="col-span-1">
                        <x-footer-nav-items key="learn" navitems="2" />
                    </div>
                    <div class="col-span-1">
                        <x-footer-nav-items key="company" navitems="4" />
                    </div>
                    <div class="col-span-1">
                        <div>
                            <div class="text-black font-semibold text-sm">
                                {{ __('messages.footer.social') }}
                            </div>
                            <div class="flex items-center xl:gap-5 lg:gap-2 gap-5 mt-4">
                                <a href="https://goldenburggroup.eu" target="_blank">
                                    <img src="{{ asset('images/icons/social/facebook.svg') }}" alt="facebook"
                                        class="cursor-pointer">
                                </a>
                                <a href="https://goldenburggroup.eu" target="_blank">
                                    <img src="{{ asset('images/icons/social/instagram.svg') }}" alt="instagram"
                                        class="cursor-pointer">
                                </a>
                                <a href="https://goldenburggroup.eu" target="_blank">
                                    <img src="{{ asset('images/icons/social/twitter.svg') }}" alt="twitter"
                                        class="cursor-pointer">
                                </a>
                                <a href="https://goldenburggroup.eu" target="_blank">
                                    <img src="{{ asset('images/icons/social/linkedin.svg') }}" alt="linkedin"
                                        class="cursor-pointer">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Documents --}}
                <div class="flex gap-5 text-sm mb-8 flex-wrap sm:flex-nowrap">
                    @for ($i = 1; $i <= 4; $i++)
                        <a href="https://goldenburggroup.eu" target="_blank"
                            class="cursor-pointer hover:text-black transition duration-300">
                            {{ __('messages.footer.documents.doc-' . $i) }}</a>
                    @endfor
                </div>
                {{-- Messages --}}
                @for ($i = 1; $i <= 3; $i++)
                    <div class="text-xs mb-3">
                        {{ __('messages.footer.messages.msg-' . $i) }}
                    </div>
                @endfor
            </div>
            {{-- Downloads --}}
            <div class="lg:w-2/12 w-full flex lg:justify-end justify-center sm:justify-start">
                <div class="flex lg:block items-center justify-center gap-4 flex-wrap sm:flex-nowrap">
                    <a href="https://goldenburggroup.eu" target="_blank">
                        <img src="{{ asset('images/icons/appstore.svg') }}" alt="appstore"
                            class="lg:mb-4 cursor-pointer">
                    </a>
                    <a href="https://goldenburggroup.eu" target="_blank">
                        <img src="{{ asset('images/icons/googleplay.svg') }}" alt="googleplay"
                            class="lg:mb-4 cursor-pointer">
                    </a>
                    <x-button width="w-fit-content">
                        <img src="{{ asset('images/icons/qr.svg') }}" alt="qr">
                    </x-button>
                </div>
            </div>
        </div>
    </x-container>
    {{-- Last Message --}}
    <div class="bg-gray-200">
        <x-container class="py-2 text-xs text-center">
            {!! __('messages.footer.messages.msg-4') !!}
        </x-container>
    </div>
</footer>
