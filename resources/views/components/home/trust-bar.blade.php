<section  
    id="trust-bar"
    class="trust-bar relative isolate overflow-hidden bg-cover bg-center bg-no-repeat py-20 sm:py-32" 
    style="background-image: url('{{ asset('images/trust-bg.webp') }}');"
    aria-label="Pilihan tujuan institusi"
>
    {{-- Background overlay --}}
    <div class="absolute inset-0 z-0 bg-slate-950/75"></div>
    <div class="absolute inset-0 z-0 bg-gradient-to-r from-slate-950 via-slate-950/70 to-slate-950/50"></div>

    {{-- Fade masuk dari hero --}}
    <div class="pointer-events-none absolute inset-x-0 top-0 z-0 h-40 bg-gradient-to-b from-slate-950 to-transparent"></div>

    {{-- Fade bawah agar lanjut ke section berikutnya tetap smooth --}}
    <div class="pointer-events-none absolute inset-x-0 bottom-0 z-0 h-32 bg-gradient-to-b from-transparent to-slate-950"></div>
    
    <div class="site-container relative z-10">
        <div class="mb-16 text-center" data-reveal="slide-up">
            <h2 class="mx-auto max-w-3xl text-3xl font-bold leading-tight text-white sm:text-4xl lg:text-5xl">
                Pilih Tujuan Impian Kamu, KingBlack Siap Membantu
            </h2>
        </div>
        
        <div class="flex flex-wrap items-center justify-center gap-8 sm:gap-12 lg:gap-16">
            <div class="flex items-center justify-center" data-reveal="zoom-in" data-reveal-delay="80">
                <img src="{{ asset('images/logo_tni.png') }}" alt="Logo TNI" class="h-20 w-auto opacity-80 transition hover:scale-105 hover:opacity-100 sm:h-24" />
            </div>

            <div class="flex items-center justify-center" data-reveal="zoom-in" data-reveal-delay="160">
                <img src="{{ asset('images/logo_polri.png') }}" alt="Logo POLRI" class="h-20 w-auto opacity-80 transition hover:scale-105 hover:opacity-100 sm:h-24" />
            </div>

            <div class="flex items-center justify-center" data-reveal="zoom-in" data-reveal-delay="240">
                <img src="{{ asset('images/logo_akmil.png') }}" alt="Logo AKMIL" class="h-20 w-auto opacity-80 transition hover:scale-105 hover:opacity-100 sm:h-24" />
            </div>

            <div class="flex items-center justify-center" data-reveal="zoom-in" data-reveal-delay="320">
                <img src="{{ asset('images/logo_akpol.png') }}" alt="Logo AKPOL" class="h-20 w-auto opacity-80 transition hover:scale-105 hover:opacity-100 sm:h-24" />
            </div>
        </div>
    </div>
</section>
