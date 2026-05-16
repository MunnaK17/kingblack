@php
    $facilities = [
        [
            'title' => 'Area Latihan Lari dan Fisik',
            'description' => 'Fasilitas latihan untuk menunjang persiapan jasmani seperti lari, push-up, sit-up, pull-up, dan latihan ketahanan tubuh.',
            'image' => 'images/madya.webp',
        ],
        [
            'title' => 'Area GYM',
            'description' => 'Fasilitas GYM dengan peralatan lengkap untuk latihan kekuatan otot, kebugaran, dan persiapan fisik yang optimal bagi peserta.',
            'image' => 'images/gym.webp',
        ],
        [
            'title' => 'Stadion Akuatik',
            'description' => 'Fasilitas kolam renang untuk latihan renang yang mendukung persiapan fisik dan ketahanan tubuh peserta dalam menghadapi tantangan seleksi.',
            'image' => 'images/renang-facility.webp',
        ],
    ];
@endphp

<section id="facilities" class="home-section relative isolate overflow-hidden bg-white py-16 lg:py-20">
    <div class="pointer-events-none absolute inset-0 z-0 bg-[radial-gradient(circle_at_12%_12%,rgba(245,158,11,0.14),transparent_28%),radial-gradient(circle_at_88%_72%,rgba(234,179,8,0.12),transparent_30%),linear-gradient(180deg,#ffffff_0%,#fffdf8_100%)]"></div>
    <div class="pointer-events-none absolute -left-24 top-20 z-0 h-72 w-72 rounded-full bg-amber-200/20 blur-3xl"></div>
    <div class="pointer-events-none absolute -right-24 bottom-10 z-0 h-80 w-80 rounded-full bg-yellow-100/50 blur-3xl"></div>

    <div class="relative z-10 mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center" data-reveal="slide-up">
            <p class="text-sm font-semibold uppercase tracking-[0.2em] text-gray-500">
                FASILITAS KAMI
            </p>

            <h2 class="mt-3 text-3xl font-bold leading-tight text-black sm:text-4xl">
                fasilitas pendukung latihan KINGBLACK
            </h2>

            <p class="mt-5 text-base leading-8 text-gray-700">
                KINGBLACK menyediakan fasilitas latihan dan pembelajaran yang mendukung peserta dalam mempersiapkan diri secara lebih terarah.
            </p>

            <div class="mt-6 flex items-center justify-center gap-3 md:hidden">
                <button type="button" class="flex h-11 w-11 items-center justify-center rounded-full border border-zinc-200 bg-white text-black shadow-sm" data-facilities-prev aria-label="Fasilitas sebelumnya">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><path d="M19 12H5"></path><path d="m11 18-6-6 6-6"></path></svg>
                </button>
                <button type="button" class="flex h-11 w-11 items-center justify-center rounded-full bg-black text-white shadow-lg" data-facilities-next aria-label="Fasilitas berikutnya">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><path d="M5 12h14"></path><path d="m13 6 6 6-6 6"></path></svg>
                </button>
            </div>
        </div>

        <div class="mt-10 flex snap-x snap-mandatory gap-4 overflow-x-auto scroll-smooth pb-4 [scrollbar-width:none] md:mt-12 md:grid md:grid-cols-3 md:gap-6 md:overflow-visible md:pb-0" data-facilities-track>
            @foreach ($facilities as $facility)
                <article class="group min-w-[84%] snap-center overflow-hidden border border-gray-200 bg-white/90 shadow-sm backdrop-blur-sm transition duration-300 hover:-translate-y-1 hover:shadow-md sm:min-w-[62%] md:min-w-0" data-reveal="slide-up" data-reveal-delay="{{ $loop->index * 120 }}">
                    
                    {{-- foto portrait --}}
                    <div class="aspect-[3/4] overflow-hidden bg-gray-100">
                        <img
                            src="{{ asset($facility['image']) }}"
                            alt="{{ $facility['title'] }} untuk latihan persiapan seleksi di KINGBLACK"
                            class="h-full w-full object-cover object-center grayscale transition duration-500 group-hover:scale-105 group-hover:grayscale-0"
                        >
                    </div>

                    <div class="p-6">
                        <h3 class="text-xl font-bold text-black">
                            {{ $facility['title'] }}
                        </h3>

                        <p class="mt-4 text-sm leading-7 text-gray-700">
                            {{ $facility['description'] }}
                        </p>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>

<script>
    (() => {
        const track = document.querySelector('[data-facilities-track]');
        const next = document.querySelector('[data-facilities-next]');
        const prev = document.querySelector('[data-facilities-prev]');

        if (!track || !next || !prev) return;

        const scrollCard = (direction) => {
            const card = track.querySelector('article');
            const amount = card ? card.getBoundingClientRect().width + 16 : track.clientWidth * 0.86;
            track.scrollBy({ left: amount * direction, behavior: 'smooth' });
        };

        next.addEventListener('click', () => scrollCard(1));
        prev.addEventListener('click', () => scrollCard(-1));
    })();
</script>
