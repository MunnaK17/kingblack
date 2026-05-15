<section 
    id="hero" 
    class="hero-section relative isolate overflow-hidden py-0"
    style="
        background-image: url('{{ asset('images/s.png') }}');
        background-size: cover;
        background-position: center 60%;
        background-repeat: no-repeat;
    "
>
    {{-- Overlay utama --}}
    <div class="absolute inset-0 -z-10 bg-black/20"></div>
    <div class="absolute inset-0 -z-10 bg-gradient-to-r from-black/80 via-black/25 to-slate-950/20"></div>
    <div class="absolute inset-0 -z-10 bg-gradient-to-b from-black/40 via-transparent to-slate-950/70"></div>

    {{-- Transisi natural ke section berikutnya --}}
    <div class="pointer-events-none absolute inset-x-0 bottom-0 z-0 h-48 bg-gradient-to-b from-transparent via-slate-950/70 to-slate-950"></div>

    <div class="relative z-10 mx-auto grid min-h-screen max-w-7xl items-center gap-10 px-6 pt-20 pb-32 lg:grid-cols-[1.05fr_0.95fr] lg:px-8 lg:pt-24 lg:pb-40">
        <div class="hero-content max-w-3xl text-black">
            <p class="mt-6 text-sm font-bold uppercase tracking-[0.28em] text-yellow-400 sm:text-base" data-reveal="fade-in">
                Program Persiapan Seleksi Eksklusif
            </p>

            <h1 class="mt-6 max-w-4xl text-4xl font-black leading-tight text-white sm:text-5xl lg:text-6xl" data-reveal="slide-up" data-reveal-delay="120">
                Siap Lolos Seleksi TNI, Polri, Kedinasan, CPNS, PTN & Kedokteran — Dengan Persiapan yang Benar
            </h1>

            <p class="mt-6 max-w-2xl text-base leading-8 text-gray-100 sm:text-lg" data-reveal="slide-up" data-reveal-delay="220">
                Kami tahu kamu serius ingin lolos. Karena itu, Kingblack Executive hadir bukan hanya untuk mengajari — tapi menemanimu dari nol hingga benar-benar siap menghadapi seleksi secara akademik, fisik, dan mental.
            </p>

            <div class="hero-actions flex flex-col gap-4 pt-8 sm:flex-row" data-reveal="slide-up" data-reveal-delay="320">
                <a href="{{ \App\Support\Whatsapp::url('hero') }}" class="inline-flex items-center justify-center rounded-md bg-white px-6 py-3 text-sm font-bold text-black shadow-lg shadow-black/25 transition hover:-translate-y-0.5 hover:bg-yellow-400">
                    Mulai Konsultasi Gratis
                </a>

                <a href="#program" class="inline-flex items-center justify-center rounded-md border border-white/30 bg-white/10 px-6 py-3 text-sm font-bold text-white shadow-sm backdrop-blur transition hover:-translate-y-0.5 hover:bg-white hover:text-black">
                    Lihat Semua Program
                </a>
            </div>
        </div>
    </div>
</section>
