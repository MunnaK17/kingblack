<section id="about" class="home-section relative isolate overflow-hidden bg-white">
    <!-- Soft transition dari section sebelumnya -->
    <div class="pointer-events-none absolute inset-x-0 top-0 z-20 h-20 bg-gradient-to-b from-black/10 to-transparent"></div>

    <div class="pointer-events-none absolute inset-0 z-0 bg-[radial-gradient(circle_at_88%_8%,rgba(245,158,11,0.16),transparent_30%),radial-gradient(circle_at_68%_82%,rgba(234,179,8,0.10),transparent_32%),linear-gradient(135deg,#ffffff_0%,#ffffff_56%,#fffaf0_100%)]"></div>

    <div class="relative z-10 grid lg:min-h-[640px] lg:grid-cols-[0.95fr_1.05fr]">

        <!-- Image Left -->
        <div class="relative min-h-[320px] sm:min-h-[420px] lg:min-h-[640px]" data-reveal="slide-right">
            <img 
                src="{{ asset('images/renang.webp') }}" 
                alt="Latihan fisik persiapan seleksi TNI POLRI di KINGBLACK" 
                class="absolute inset-0 h-full w-full object-cover object-center grayscale"
            />

            <div class="absolute inset-0 bg-black/55"></div>
            <div class="absolute inset-0 bg-gradient-to-r from-black/75 via-black/45 to-black/10"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/45 via-transparent to-transparent"></div>
        </div>

        <!-- Content Right -->
        <div class="relative flex items-center px-6 py-10 sm:px-10 sm:py-14 lg:px-20 lg:py-16">
            
            <!-- Diagonal white gold separator -->
            <div class="absolute inset-y-0 -left-20 hidden w-40 -skew-x-6 bg-[linear-gradient(180deg,#ffffff_0%,#fff8e7_100%)] lg:block"></div>

            <!-- Subtle background detail -->
            <div class="pointer-events-none absolute -right-28 -top-28 h-80 w-80 rounded-full bg-amber-200/25 blur-3xl"></div>
            <div class="pointer-events-none absolute -bottom-24 right-12 h-64 w-64 rounded-full bg-yellow-100/40 blur-3xl"></div>

            <div class="relative z-10 max-w-2xl" data-reveal="slide-left">
                <p class="text-xs font-bold uppercase tracking-[0.24em] text-gray-600">
                    Tentang Kami
                </p>

                <h2 class="mt-4 text-3xl font-black uppercase leading-tight text-black sm:text-4xl lg:text-5xl">
                    Membangun
                    <span class="block text-black">Karakter Elite</span>
                </h2>

                <div class="mt-5 h-1 w-16 bg-black sm:mt-6"></div>

                <div class="mt-6 space-y-4 text-sm leading-7 text-gray-700 sm:mt-8 sm:space-y-5 sm:text-base sm:leading-8">
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

                <blockquote class="mt-6 border-l-4 border-black bg-white/75 px-5 py-4 text-sm font-medium leading-7 text-gray-900 shadow-sm backdrop-blur-sm sm:mt-8 sm:px-6 sm:py-5 sm:text-base" data-reveal="zoom-in" data-reveal-delay="180">
                    <span class="block text-4xl font-black leading-none text-black">&ldquo;</span>
                    Disiplin adalah jembatan antara target dan hasil. Di KINGBLACK, kami membantu kamu
                    melewati jembatan itu dengan persiapan yang nyata.
                </blockquote>
            </div>
        </div>

    </div>
</section>
