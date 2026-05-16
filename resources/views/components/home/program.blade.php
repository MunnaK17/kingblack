<section id="program" class="relative isolate overflow-hidden bg-black py-20 sm:py-24">
    <!-- Background -->
    <div 
        class="absolute inset-0 -z-20 bg-cover bg-center bg-no-repeat opacity-66 grayscale"
        style="background-image: url('{{ asset('images/program-bg.webp') }}');"
    ></div>
    <div class="absolute inset-0 -z-10 bg-black/85"></div>
    <div class="absolute inset-0 -z-10 bg-[radial-gradient(circle_at_top_center,rgba(255,215,120,0.08),transparent_40%)]"></div>
    <div class="absolute bottom-0 left-0 -z-10 h-40 w-40 bg-yellow-500/10 blur-3xl"></div>
    <div class="absolute right-0 top-0 -z-10 h-52 w-52 bg-yellow-500/10 blur-3xl"></div>

    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <!-- Header -->
        <div class="mx-auto max-w-3xl text-center" data-reveal="slide-up">
            <p class="text-xs font-bold uppercase tracking-[0.28em] text-white">
                Program Kingblack
            </p>
            <h2 class="mt-4 text-3xl font-black uppercase leading-tight text-white sm:text-4xl lg:text-5xl">
                Pilih Program Terbaik
                <span class="block text-white">Untuk Masa Depan Gemilang</span>
            </h2>
            <p class="mt-4 text-sm leading-7 text-gray-300 sm:text-base">
                Program persiapan terlengkap untuk seleksi TNI, POLRI, dan Sekolah Kedinasan.
            </p>

            <div class="mt-6 flex items-center justify-center gap-3 lg:hidden">
                <button type="button" class="flex h-11 w-11 items-center justify-center rounded-full border border-white/15 bg-white/10 text-white backdrop-blur-sm" data-program-prev aria-label="Program sebelumnya">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><path d="M19 12H5"></path><path d="m11 18-6-6 6-6"></path></svg>
                </button>
                <button type="button" class="flex h-11 w-11 items-center justify-center rounded-full bg-yellow-400 text-black shadow-lg shadow-yellow-500/20" data-program-next aria-label="Program berikutnya">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><path d="M5 12h14"></path><path d="m13 6 6 6-6 6"></path></svg>
                </button>
            </div>
        </div>

        <!-- Cards -->
        <div class="mt-10 flex snap-x snap-mandatory gap-4 overflow-x-auto scroll-smooth pb-4 [scrollbar-width:none] sm:gap-5 lg:mt-14 lg:grid lg:grid-cols-4 lg:gap-6 lg:overflow-visible lg:pb-0" data-program-track>

            <!-- Executive -->
            <article class="relative min-w-[84%] snap-center overflow-hidden rounded-3xl border border-yellow-500/60 bg-white/5 p-6 shadow-[0_0_30px_rgba(234,179,8,0.15)] backdrop-blur-sm sm:min-w-[62%] lg:min-w-0" data-reveal="zoom-in" data-reveal-delay="80">
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_top,rgba(255,215,120,0.12),transparent_50%)]"></div>

                <div class="relative z-10">
                    <div class="mb-6 inline-flex items-center gap-2 rounded-full border border-yellow-500/40 bg-yellow-500/10 px-3 py-1 text-[10px] font-bold uppercase tracking-[0.2em] text-yellow-400">
                        <span>program unggulan</span>
                    </div>

                    <div class="flex h-12 w-12 items-center justify-center rounded-2xl border border-yellow-500/40 bg-yellow-500/10 text-yellow-400">
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M5 16L3 6l5.5 4L12 3l3.5 7L21 6l-2 10H5zm0 2h14v2H5v-2z"/>
                        </svg>
                    </div>

                    <h3 class="mt-5 text-2xl font-black uppercase text-white">
                        Executive
                    </h3>

                    <p class="mt-4 text-sm leading-7 text-gray-300">
                        Program premium terlengkap mencakup semua aspek seleksi secara menyeluruh dan terarah.
                    </p>

                    <ul class="mt-5 space-y-2 text-sm text-gray-200">
                        <li class="flex items-start gap-2">
                            <span class="mt-1 text-yellow-400">&check;</span>
                            <span>Jasmani &amp; Fisik</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="mt-1 text-yellow-400">&check;</span>
                            <span>Akademik</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="mt-1 text-yellow-400">&check;</span>
                            <span>Psikotest</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="mt-1 text-yellow-400">&check;</span>
                            <span>Strategi &amp; Mental</span>
                        </li>
                    </ul>

                    <a href="#pendaftaran" class="mt-8 inline-flex w-full items-center justify-center gap-2 rounded-xl bg-gradient-to-r from-yellow-300 via-yellow-500 to-yellow-600 px-4 py-3 text-sm font-black uppercase tracking-wide text-black transition hover:-translate-y-0.5">
                        Daftar
                        <span>&rarr;</span>
                    </a>
                </div>
            </article>

            <!-- Jasmani / Fisik -->
            <article class="min-w-[84%] snap-center rounded-3xl border border-white/10 bg-white/5 p-6 backdrop-blur-sm transition hover:border-yellow-500/40 hover:bg-white/10 sm:min-w-[62%] lg:min-w-0" data-reveal="zoom-in" data-reveal-delay="180">
                <div class="flex h-12 w-12 items-center justify-center rounded-2xl border border-white/10 bg-white/5 text-white">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                        <path d="M6 9v6m12-6v6M3 10h3v4H3v-4zm15 0h3v4h-3v-4zM9 8h6v8H9V8z"/>
                    </svg>
                </div>

                <h3 class="mt-5 text-2xl font-black uppercase text-white">
                    Jasmani / Fisik
                </h3>

                <p class="mt-4 text-sm leading-7 text-gray-300">
                    Pembinaan fisik terarah untuk membangun kekuatan, stamina, dan performa terbaik.
                </p>

                <ul class="mt-5 space-y-2 text-sm text-gray-200">
                    <li class="flex items-start gap-2"><span class="mt-1 text-yellow-400">&check;</span><span>Latihan Terstruktur</span></li>
                    <li class="flex items-start gap-2"><span class="mt-1 text-yellow-400">&check;</span><span>Tes Fisik Lengkap</span></li>
                    <li class="flex items-start gap-2"><span class="mt-1 text-yellow-400">&check;</span><span>Monitoring Progress</span></li>
                </ul>

                <a href="#pendaftaran" class="mt-8 inline-flex w-full items-center justify-center gap-2 rounded-xl border border-white/10 bg-white/5 px-4 py-3 text-sm font-black uppercase tracking-wide text-white transition hover:border-yellow-500/40 hover:text-yellow-400">
                    Daftar
                    <span>&rarr;</span>
                </a>
            </article>

            <!-- Akademik -->
            <article class="min-w-[84%] snap-center rounded-3xl border border-white/10 bg-white/5 p-6 backdrop-blur-sm transition hover:border-yellow-500/40 hover:bg-white/10 sm:min-w-[62%] lg:min-w-0" data-reveal="zoom-in" data-reveal-delay="280">
                <div class="flex h-12 w-12 items-center justify-center rounded-2xl border border-white/10 bg-white/5 text-white">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                        <path d="M4 19.5A2.5 2.5 0 016.5 17H20"/>
                        <path d="M20 22V6a2 2 0 00-2-2H8a4 4 0 00-4 4v11.5"/>
                    </svg>
                </div>

                <h3 class="mt-5 text-2xl font-black uppercase text-white">
                    Akademik
                </h3>

                <p class="mt-4 text-sm leading-7 text-gray-300">
                    Pembelajaran akademik selektif untuk penguasaan materi dan strategi ujian.
                </p>

                <ul class="mt-5 space-y-2 text-sm text-gray-200">
                    <li class="flex items-start gap-2"><span class="mt-1 text-yellow-400">&check;</span><span>Materi Inti Seleksi</span></li>
                    <li class="flex items-start gap-2"><span class="mt-1 text-yellow-400">&check;</span><span>Try Out &amp; Evaluasi</span></li>
                    <li class="flex items-start gap-2"><span class="mt-1 text-yellow-400">&check;</span><span>Pembahasan Mendalam</span></li>
                </ul>

                <a href="#pendaftaran" class="mt-8 inline-flex w-full items-center justify-center gap-2 rounded-xl border border-white/10 bg-white/5 px-4 py-3 text-sm font-black uppercase tracking-wide text-white transition hover:border-yellow-500/40 hover:text-yellow-400">
                    Daftar
                    <span>&rarr;</span>
                </a>
            </article>

            <!-- Psikotest -->
            <article class="min-w-[84%] snap-center rounded-3xl border border-white/10 bg-white/5 p-6 backdrop-blur-sm transition hover:border-yellow-500/40 hover:bg-white/10 sm:min-w-[62%] lg:min-w-0" data-reveal="zoom-in" data-reveal-delay="380">
                <div class="flex h-12 w-12 items-center justify-center rounded-2xl border border-white/10 bg-white/5 text-white">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                        <path d="M9.5 17a2.5 2.5 0 100-5 3.5 3.5 0 013.5-3.5A3.5 3.5 0 1116.5 12"/>
                        <path d="M12 17h.01"/>
                        <path d="M12 21c4.418 0 8-3.582 8-8s-3.582-8-8-8-8 3.582-8 8 3.582 8 8 8z"/>
                    </svg>
                </div>

                <h3 class="mt-5 text-2xl font-black uppercase text-white">
                    Psikotest
                </h3>

                <p class="mt-4 text-sm leading-7 text-gray-300">
                    Latihan psikotest komprehensif untuk mengasah logika, kepribadian, dan stabilitas mental.
                </p>

                <ul class="mt-5 space-y-2 text-sm text-gray-200">
                    <li class="flex items-start gap-2"><span class="mt-1 text-yellow-400">&check;</span><span>Tes Potensi</span></li>
                    <li class="flex items-start gap-2"><span class="mt-1 text-yellow-400">&check;</span><span>Kepribadian</span></li>
                    <li class="flex items-start gap-2"><span class="mt-1 text-yellow-400">&check;</span><span>Wawancara</span></li>
                </ul>

                <a href="#pendaftaran" class="mt-8 inline-flex w-full items-center justify-center gap-2 rounded-xl border border-white/10 bg-white/5 px-4 py-3 text-sm font-black uppercase tracking-wide text-white transition hover:border-yellow-500/40 hover:text-yellow-400">
                    Daftar
                    <span>&rarr;</span>
                </a>
            </article>
        </div>

        <!-- Bottom Info -->

    </div>
</section>

<script>
    (() => {
        const track = document.querySelector('[data-program-track]');
        const next = document.querySelector('[data-program-next]');
        const prev = document.querySelector('[data-program-prev]');

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
