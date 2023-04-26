<footer class="bg-gray-100">
    <x-container class="pb-5 pt-10">
        <div class="flex justify-between gap-10">
            <div class="w-2/12">
                <img src="{{ asset('images/logo/logo.svg') }}" class="h-6" alt="Logo">
            </div>
            <div class="w-8/12">
                {{-- Footer menu --}}
                <div class="flex justify-between mb-8 gap-2">
                    <x-footer-nav-items key="products" navitems="6" />
                    <x-footer-nav-items key="platforms" navitems="2" />
                    <x-footer-nav-items key="learn" navitems="2" />
                    <x-footer-nav-items key="company" navitems="4" />

                    <div>
                        {{ __('messages.footer.social') }}
                        <div class="flex items-center gap-5 mt-4">
                            <img src="{{ asset('images/icons/social/facebook.svg') }}" alt="facebook" class="cursor-pointer">
                            <img src="{{ asset('images/icons/social/instagram.svg') }}" alt="instagram" class="cursor-pointer">
                            <img src="{{ asset('images/icons/social/twitter.svg') }}" alt="twitter" class="cursor-pointer">
                            <img src="{{ asset('images/icons/social/linkedin.svg') }}" alt="linkedin" class="cursor-pointer">
                        </div>
                    </div>
                </div>

                {{-- Documents --}}
                <div class="flex gap-5 text-sm mb-8">
                    @for ($i = 1; $i <= 4; $i++)
                        <div class="cursor-pointer hover:text-black transition duration-300">{{ __('messages.footer.documents.doc-' . $i) }}</div>
                    @endfor
                </div>
                {{-- Messages --}}
                @for ($i = 1; $i <= 3; $i++)
                    <div class="text-xs mb-3">
                        {{ __('messages.footer.messages.msg-' . $i) }}
                    </div>
                @endfor
            </div>
            <div class="w-2/12 flex justify-end">
                <div>
                    <img src="{{ asset('images/icons/appstore.svg') }}" alt="appstore" class="mb-4 cursor-pointer">
                    <img src="{{ asset('images/icons/googleplay.svg') }}" alt="googleplay" class="mb-4 cursor-pointer">
                    <x-button width="w-fit-content">
                        <img src="{{ asset('images/icons/qr.svg') }}" alt="qr">
                    </x-button>
                </div>
            </div>
        </div>
    </x-container>
    <div class="bg-gray-200">
        <x-container class="py-2 text-xs text-center">
            {{!! __('messages.footer.messages.msg-4') !!}}
        </x-container>
    </div>
</footer>
