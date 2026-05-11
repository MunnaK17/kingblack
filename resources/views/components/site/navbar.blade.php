<header class="sticky top-0 z-50 border-b border-gray-200 bg-white/95 backdrop-blur" data-reveal="fade-in">
    <nav class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8" aria-label="Navigasi utama">
        <div class="flex min-h-16 items-center justify-between gap-3 lg:min-h-20">
            {{-- Logo --}}
            <a
                href="{{ url('/') }}"
                class="inline-flex min-w-0 shrink-0 items-center gap-3 text-lg font-bold tracking-tight text-black sm:text-xl"
                aria-label="KINGBLACK home"
            >
                <img src="{{ asset('images/logos.png') }}" alt="" class="h-9 w-9 shrink-0 object-contain">
                <span class="truncate">KINGBLACK</span>
            </a>

            {{-- Desktop Menu --}}
            <ul class="hidden items-center gap-8 text-sm font-medium text-gray-700 lg:flex">
                <li>
                    <a href="#hero" data-nav-link class="border-b border-black pb-1 text-black transition hover:text-black">
                        Home
                    </a>
                </li>
                <li>
                    <a href="#program" data-nav-link class="border-b border-transparent pb-1 transition hover:text-black">
                        Program
                    </a>
                </li>
                <li>
                    <a href="#about" data-nav-link class="border-b border-transparent pb-1 transition hover:text-black">
                        Tentang
                    </a>
                </li>
                <li>
                    <a href="#faq" data-nav-link class="border-b border-transparent pb-1 transition hover:text-black">
                        FAQ
                    </a>
                </li>
                <li>
                    <a href="#cta" data-nav-link class="border-b border-transparent pb-1 transition hover:text-black">
                        Kontak
                    </a>
                </li>
            </ul>

            {{-- Desktop CTA --}}
            <a
                href="{{ \App\Support\Whatsapp::url('hero') }}"
                class="hidden shrink-0 items-center justify-center rounded-lg bg-gray-950 px-6 py-3 text-sm font-bold text-white transition hover:bg-gray-800 lg:inline-flex"
            >
                daftar sekarang
            </a>

            {{-- Mobile Menu --}}
            <details class="group relative lg:hidden">
                <summary
                    class="flex h-11 w-11 cursor-pointer list-none items-center justify-center rounded-md border border-gray-300 text-black transition hover:bg-gray-100 [&::-webkit-details-marker]:hidden"
                    aria-label="Buka menu navigasi"
                >
                    <svg class="h-6 w-6 group-open:hidden" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" d="M4 7h16M4 12h16M4 17h16"></path>
                    </svg>
                    <svg class="hidden h-6 w-6 group-open:block" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" d="M6 6l12 12M18 6L6 18"></path>
                    </svg>
                </summary>

                <div class="absolute right-0 top-full mt-3 w-[min(20rem,calc(100vw-2rem))] rounded-lg border border-gray-200 bg-white p-2 shadow-lg">
                    <a href="#hero" data-nav-link class="block rounded-md bg-gray-100 px-4 py-3 text-sm font-bold text-black">
                        home
                    </a>
                    <a href="#program" data-nav-link class="block rounded-md px-4 py-3 text-sm font-medium text-gray-700 transition hover:bg-gray-100 hover:text-black">
                        program
                    </a>
                    <a href="#about" data-nav-link class="block rounded-md px-4 py-3 text-sm font-medium text-gray-700 transition hover:bg-gray-100 hover:text-black">
                        tentang
                    </a>
                    <a href="#faq" data-nav-link class="block rounded-md px-4 py-3 text-sm font-medium text-gray-700 transition hover:bg-gray-100 hover:text-black">
                        faq
                    </a>
                    <a href="#cta" data-nav-link class="block rounded-md px-4 py-3 text-sm font-medium text-gray-700 transition hover:bg-gray-100 hover:text-black">
                        kontak
                    </a>
                    <a
                        href="{{ \App\Support\Whatsapp::url('hero') }}"
                        class="mt-2 flex w-full items-center justify-center rounded-md bg-gray-950 px-4 py-3 text-sm font-bold text-white transition hover:bg-gray-800"
                    >
                        daftar sekarang
                    </a>
                </div>
            </details>
        </div>
    </nav>
</header>
