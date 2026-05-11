<section id="about" class="home-section relative overflow-hidden bg-white">
    <!-- Soft transition dari section sebelumnya -->
    <div class="pointer-events-none absolute inset-x-0 top-0 z-20 h-20 bg-gradient-to-b from-black/10 to-transparent"></div>

    <!-- Soft White Gold Background -->
   
    <div class="relative z-10 grid min-h-[640px] lg:grid-cols-[0.95fr_1.05fr]">

        <!-- Image Left -->
        <div class="relative min-h-[420px] lg:min-h-[640px]" data-reveal="slide-right">
            <img 
                src="{{ asset('images/renang.png') }}" 
                alt="Kegiatan latihan KINGBLACK" 
                class="absolute inset-0 h-full w-full object-cover object-center grayscale"
            />

            <div class="absolute inset-0 bg-black/55"></div>
            <div class="absolute inset-0 bg-gradient-to-r from-black/75 via-black/45 to-black/10"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/45 via-transparent to-transparent"></div>
        </div>

        <!-- Content Right -->
        <div class="relative flex items-center px-6 py-16 sm:px-10 lg:px-20">
            
            <!-- Diagonal white gold separator -->
            <div class="absolute inset-y-0 -left-20 hidden w-40 -skew-x-6 bg-[linear-gradient(180deg,#ffffff_0%,#fbf8f1_100%)] lg:block"></div>

            <!-- Subtle background detail -->
            <div class="absolute right-0 top-0 h-64 w-64 bg-gradient-to-bl from-amber-200/25 to-transparent"></div>
            <div class="absolute bottom-0 right-0 h-40 w-40 bg-gradient-to-tl from-black/5 to-transparent"></div>

            <div class="relative z-10 max-w-2xl" data-reveal="slide-left">
                <p class="text-xs font-bold uppercase tracking-[0.24em] text-gray-600">
                    Tentang Kami
                </p>

                <h2 class="mt-4 text-3xl font-black uppercase leading-tight text-black sm:text-4xl lg:text-5xl">
                    Membangun
                    <span class="block text-black">Karakter Elite</span>
                </h2>

                <div class="mt-6 h-1 w-16 bg-black"></div>

                <div class="mt-8 space-y-5 text-sm leading-7 text-gray-700 sm:text-base sm:leading-8">
                    <p>
                        <strong class="font-semibold text-black">KINGBLACK</strong> bukan sekadar tempat bimbingan belajar.
                        Kami adalah pusat pelatihan yang membantu calon peserta seleksi TNI/POLRI membangun kesiapan
                        jasmani, mental, dan akademik secara terarah.
                    </p>

                    <p>
                        Melalui program yang terstruktur, disiplin latihan yang kuat, dan pendampingan yang konsisten,
                        kami membantu peserta mempersiapkan diri dengan lebih percaya diri.
                    </p>
                </div>

                <blockquote class="mt-8 border-l-4 border-black bg-white/70 px-6 py-5 text-sm font-medium leading-7 text-gray-900 backdrop-blur-sm sm:text-base" data-reveal="zoom-in" data-reveal-delay="180">
                    <span class="block text-4xl font-black leading-none text-black">“</span>
                    Disiplin adalah jembatan antara target dan hasil. Di KINGBLACK, kami membantu kamu
                    melewati jembatan itu dengan persiapan yang nyata.
                </blockquote>
            </div>
        </div>

    </div>
</section>
