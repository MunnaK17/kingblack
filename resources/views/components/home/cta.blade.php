<section id="cta" class="cta-section relative isolate overflow-hidden bg-white py-20 lg:py-24">
    <!-- Soft White Gold Background -->
    <div class="absolute inset-0 z-0 bg-[linear-gradient(135deg,#ffffff_0%,#ffffff_58%,#faf8f2_82%,#f5ecd7_100%)]"></div>
    <div class="absolute right-0 top-0 z-0 h-[420px] w-[520px] bg-amber-300/12 blur-3xl"></div>
    <div class="absolute bottom-0 left-0 z-0 h-[280px] w-[420px] bg-yellow-200/20 blur-3xl"></div>
    <div class="absolute right-[35%] top-1/2 z-0 h-[180px] w-[180px] -translate-y-1/2 rounded-full bg-amber-200/10 blur-2xl"></div>

    <!-- Background Image Right -->
    <div
        class="absolute inset-y-0 right-0 z-0 hidden w-[48%] bg-cover bg-center bg-no-repeat grayscale lg:block"
        style="
            background-image: url('{{ asset('images/group.jpg') }}');
            clip-path: polygon(14% 0, 100% 0, 100% 100%, 0 100%);
        "
    ></div>

    <!-- Image Overlay -->
    <div
        class="absolute inset-y-0 right-0 z-0 hidden w-[48%] lg:block"
        style="
            clip-path: polygon(14% 0, 100% 0, 100% 100%, 0 100%);
            background: linear-gradient(90deg, rgba(255,255,255,0.96) 0%, rgba(255,255,255,0.76) 36%, rgba(255,255,255,0.38) 100%);
        "
    ></div>

    <!-- Mobile Background Image -->
    <div
        class="absolute inset-0 z-0 bg-cover bg-center bg-no-repeat opacity-10 grayscale lg:hidden"
        style="background-image: url('{{ asset('images/solo.jpg') }}');"
    ></div>

    <!-- Subtle Diagonal Separator -->
    <div
        class="absolute inset-y-0 left-[54%] z-10 hidden w-px rotate-[8deg] bg-gradient-to-b from-transparent via-black/15 to-transparent lg:block"
    ></div>

    <div class="relative z-20 mx-auto max-w-7xl px-6 lg:px-8">
        <div class="max-w-2xl">

            <!-- Brand -->
            <div class="flex items-center gap-3" data-reveal="fade-in">
                <img src="{{ asset('images/logos.png') }}" alt="Logo Kingblack" class="h-8 w-8 object-contain">
                <p class="text-sm font-black uppercase tracking-[0.35em] text-black">
                    Konsultasi Program
                </p>
            </div>

            <h2 class="mt-8 max-w-3xl text-4xl font-black uppercase leading-tight tracking-tight text-black sm:text-5xl lg:text-6xl" data-reveal="slide-up" data-reveal-delay="100">
                Mulai Konsultasi
                <span class="block text-black">
                    Persiapan Seleksi Kamu
                </span>
            </h2>

            <p class="mt-6 max-w-xl text-base leading-8 text-gray-700 sm:text-lg" data-reveal="slide-up" data-reveal-delay="180">
                Diskusikan target seleksi, pilihan program, dan langkah persiapan awal bersama tim KINGBLACK.
            </p>

            <div class="mt-8 flex flex-col gap-3 sm:flex-row sm:items-center" data-reveal="slide-up" data-reveal-delay="260">
                <a
                    href="{{ \App\Support\Whatsapp::url('hero') }}"
                    class="group inline-flex w-full items-center justify-center gap-3 rounded-md bg-black px-6 py-4 text-sm font-black uppercase tracking-wide text-white shadow-lg shadow-black/20 transition hover:-translate-y-0.5 hover:bg-gray-800 hover:shadow-black/30 sm:w-auto"
                >
                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.67-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.076 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347M12.051 2C6.477 2 1.95 6.477 1.95 12.001c0 1.762.463 3.486 1.34 5.005L2 22l5.121-1.266a10.14 10.14 0 004.93 1.256h.001c5.574 0 10.101-4.477 10.101-10S17.625 2 12.051 2z"/>
                    </svg>
                    Konsultasi via WhatsApp
                    <span class="transition group-hover:translate-x-1">&rarr;</span>
                </a>

                <a
                    href="#program"
                    class="inline-flex w-full items-center justify-center rounded-md border border-black/15 bg-white/70 px-6 py-4 text-sm font-black uppercase tracking-wide text-black transition hover:-translate-y-0.5 hover:bg-white sm:w-auto"
                >
                    Lihat Program Dulu
                </a>
            </div>

            <div class="mt-6 flex flex-col gap-3 text-sm text-gray-700 sm:flex-row sm:flex-wrap sm:items-center" data-reveal="fade-in" data-reveal-delay="360">
                <div class="flex items-center gap-2">
                    <svg class="h-5 w-5 text-black" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                        <path d="M9 12l2 2 4-4"></path>
                    </svg>
                    <span>Gratis konsultasi</span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="h-5 w-5 text-black" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M20 6L9 17l-5-5"></path>
                    </svg>
                    <span>Rekomendasi program sesuai target</span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="h-5 w-5 text-black" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M22 2L11 13"></path>
                        <path d="M22 2l-7 20-4-9-9-4 20-7z"></path>
                    </svg>
                    <span>Langsung via WhatsApp</span>
                </div>
            </div>
        </div>
    </div>
</section>
