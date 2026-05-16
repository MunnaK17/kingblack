<section id="coach" class="relative isolate overflow-hidden bg-white">
    <div class="pointer-events-none absolute inset-0 z-0 bg-[radial-gradient(circle_at_78%_20%,rgba(245,158,11,0.13),transparent_30%),linear-gradient(180deg,#ffffff_0%,#fffdf8_100%)]"></div>
    <div class="relative z-10 grid w-full lg:grid-cols-[0.46fr_0.54fr]">
        <div class="relative min-h-[460px] overflow-hidden bg-black sm:min-h-[560px] lg:min-h-[760px]" data-reveal="slide-right">
            <img
                src="{{ asset('images/wahyu.webp') }}"
                alt="Coach KINGBLACK mendampingi latihan fisik seleksi TNI POLRI"
                class="absolute inset-0 h-full w-full object-cover object-center transition duration-500"
                data-coach-image
            >
            <div class="absolute inset-0 bg-gradient-to-t from-black via-black/45 to-black/10"></div>
            <div class="absolute inset-0 bg-gradient-to-r from-black/65 via-transparent to-transparent"></div>

            <div class="absolute left-5 top-5 z-10 flex items-center gap-3 sm:left-8 sm:top-8">
                <img src="{{ asset('images/logos.png') }}" alt="Logo KINGBLACK" class="h-10 w-10 object-contain">
                <span class="text-[0.68rem] font-black uppercase tracking-[0.28em] text-white/70">
                    Coach Team
                </span>
            </div>

            <div class="absolute bottom-6 left-5 right-5 z-10 sm:bottom-10 sm:left-8 sm:right-8 lg:left-12 lg:right-12">
                <span class="inline-flex rounded-full bg-white px-4 py-2 text-[0.68rem] font-black uppercase tracking-[0.22em] text-black" data-coach-badge>
                    Elite Physical Training
                </span>

                <div class="mt-5 text-4xl font-black uppercase leading-none tracking-tight text-white drop-shadow-2xl sm:text-6xl lg:text-7xl" data-coach-display-name>
                    Wahyu<br>Setiawan
                </div>

                <div class="mt-6 grid max-w-lg grid-cols-3 overflow-hidden rounded-2xl border border-white/12 bg-white/10 text-white backdrop-blur-md">
                    <div class="border-r border-white/10 p-4">
                        <span class="block text-2xl font-black sm:text-3xl" data-coach-stat-one>12+</span>
                        <span class="mt-1 block text-[0.62rem] font-bold uppercase tracking-[0.18em] text-white/58">Years</span>
                    </div>
                    <div class="border-r border-white/10 p-4">
                        <span class="block text-2xl font-black sm:text-3xl" data-coach-stat-two>3</span>
                        <span class="mt-1 block text-[0.62rem] font-bold uppercase tracking-[0.18em] text-white/58">Focus</span>
                    </div>
                    <div class="p-4">
                        <span class="block text-2xl font-black sm:text-3xl" data-coach-stat-three>1:1</span>
                        <span class="mt-1 block text-[0.62rem] font-bold uppercase tracking-[0.18em] text-white/58">Drill</span>
                    </div>
                </div>
            </div>

            <button
                type="button"
                class="absolute right-5 top-1/2 z-20 flex h-12 w-12 -translate-y-1/2 items-center justify-center rounded-full border border-white/20 bg-white text-black shadow-2xl shadow-black/30 transition hover:scale-105 hover:bg-zinc-100 focus:outline-none focus:ring-2 focus:ring-white sm:right-8 sm:h-14 sm:w-14"
                aria-label="Lihat coach berikutnya"
                data-coach-next
            >
                <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2.4" viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M5 12h14"></path>
                    <path d="m13 6 6 6-6 6"></path>
                </svg>
            </button>
        </div>

        <div class="relative flex items-center overflow-hidden bg-white/90 px-5 py-12 sm:px-8 sm:py-16 lg:min-h-[760px] lg:px-14 xl:px-20" data-reveal="slide-left">
            <div class="pointer-events-none absolute -right-24 -top-24 h-80 w-80 rounded-full bg-amber-200/25 blur-3xl"></div>
            <div class="pointer-events-none absolute -bottom-24 left-10 h-64 w-64 rounded-full bg-yellow-100/45 blur-3xl"></div>
            <div class="relative z-10 mx-auto w-full max-w-3xl">
                <header>
                    <p class="text-xs font-black uppercase tracking-[0.3em] text-zinc-500">
                        Pelatih KINGBLACK
                    </p>

                    <h2 class="mt-5 text-4xl font-black uppercase leading-[0.9] tracking-tight text-black sm:text-5xl lg:text-6xl">
                        Dilatih Oleh
                        <span class="block text-zinc-700">Coach</span>
                        <span class="block text-black">Berpengalaman</span>
                    </h2>

                    <div class="mt-7 flex items-center gap-4">
                        <div class="h-1 w-20 bg-black"></div>
                        <span class="hidden text-[0.68rem] font-black uppercase tracking-[0.24em] text-zinc-400 sm:inline">
                            Physical. Mental. Discipline.
                        </span>
                    </div>

                    <p class="mt-7 text-sm leading-7 text-zinc-600 sm:text-base sm:leading-8">
                        Disiplin latihan bertemu pendampingan teknis yang terarah. Program KINGBLACK dipandu oleh pelatih yang memahami kebutuhan fisik, mental, dan kesiapan seleksi.
                    </p>
                </header>

                <div class="mt-9 rounded-3xl border border-zinc-200 bg-zinc-50 p-5 sm:p-7">
                    <div class="flex flex-col gap-4 sm:flex-row sm:items-start sm:justify-between">
                        <div>
                            <p class="text-xs font-black uppercase tracking-[0.24em] text-zinc-500">Lead Coach</p>
                            <h3 class="mt-2 text-2xl font-black text-black sm:text-3xl" data-coach-name>Coach Wahyu Setiawan</h3>
                        </div>

                        <span class="inline-flex w-fit rounded-full border border-zinc-200 bg-white px-4 py-2 text-[0.68rem] font-black uppercase tracking-[0.18em] text-zinc-700" data-coach-specialty-pill>
                            Sprint &amp; Agility
                        </span>
                    </div>

                    <p class="mt-5 text-sm leading-7 text-zinc-600 sm:text-base sm:leading-8" data-coach-bio>
                        Berpengalaman dalam pembinaan fisik, teknik lari, kelincahan, daya tahan, dan pengondisian mental peserta agar lebih siap menghadapi tahapan seleksi.
                    </p>

                    <div class="mt-7 grid gap-3 sm:grid-cols-3">
                        <div class="rounded-2xl border border-zinc-200 bg-white p-4">
                            <span class="block text-[0.68rem] font-black uppercase tracking-[0.2em] text-zinc-500">Achievement</span>
                            <span class="mt-3 block text-sm font-black text-black sm:text-base" data-coach-achievement>Pembina Fisik</span>
                        </div>
                        <div class="rounded-2xl border border-zinc-200 bg-white p-4">
                            <span class="block text-[0.68rem] font-black uppercase tracking-[0.2em] text-zinc-500">Specialty</span>
                            <span class="mt-3 block text-sm font-black text-black sm:text-base" data-coach-specialty>Sprint &amp; Agility</span>
                        </div>
                        <div class="rounded-2xl border border-zinc-200 bg-white p-4">
                            <span class="block text-[0.68rem] font-black uppercase tracking-[0.2em] text-zinc-500">Focus</span>
                            <span class="mt-3 block text-sm font-black text-black sm:text-base" data-coach-focus>Seleksi Jasmani</span>
                        </div>
                    </div>
                </div>

                <div class="mt-8 grid gap-4 sm:grid-cols-[auto_1fr] sm:items-center">
                    <a
                        href="#pendaftaran"
                        class="inline-flex w-full items-center justify-center gap-3 rounded-xl bg-black px-7 py-5 text-center text-xs font-black uppercase tracking-[0.2em] text-white shadow-xl shadow-black/20 transition hover:-translate-y-1 hover:bg-zinc-800 sm:w-auto"
                    >
                        Latihan Bareng Coach KINGBLACK
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M5 12h14"></path>
                            <path d="m13 6 6 6-6 6"></path>
                        </svg>
                    </a>

                    <p class="text-xs font-semibold leading-5 text-zinc-500">
                        Pilih target seleksi dan paket persiapan melalui form pendaftaran.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    (() => {
        const root = document.querySelector('#coach');

        if (!root) {
            return;
        }

        const coaches = [
            {
                image: '{{ asset('images/wahyu.webp') }}',
                badge: 'Elite Physical Training',
                displayName: 'Wahyu<br>Setiawan',
                name: 'Coach Wahyu Setiawan',
                pill: 'Sprint & Agility',
                bio: 'Berpengalaman dalam pembinaan fisik, teknik lari, kelincahan, daya tahan, dan pengondisian mental peserta agar lebih siap menghadapi tahapan seleksi.',
                achievement: 'Pembina Fisik',
                specialty: 'Sprint & Agility',
                focus: 'Seleksi Jasmani',
                stats: ['12+', '3', '1:1'],
            },
            {
                image: '{{ asset('images/ad.webp') }}',
                badge: 'Strength Conditioning',
                displayName: 'Bang<br>black',
                name: 'Coach Bang Black',
                pill: 'Strength & Conditioning',
                bio: 'fokus pada latihan kekuatan, stabilitas tubuh, mobilitas, dan program conditioning agar peserta punya fondasi fisik yang lebih siap.',
                achievement: 'Strength Coach',
                specialty: 'Power & Mobility',
                focus: 'Daya Tahan',
                stats: ['8+', '4', '2:1'],
            },
        ];

        let currentIndex = 0;

        const targets = {
            image: root.querySelector('[data-coach-image]'),
            badge: root.querySelector('[data-coach-badge]'),
            displayName: root.querySelector('[data-coach-display-name]'),
            name: root.querySelector('[data-coach-name]'),
            pill: root.querySelector('[data-coach-specialty-pill]'),
            bio: root.querySelector('[data-coach-bio]'),
            achievement: root.querySelector('[data-coach-achievement]'),
            specialty: root.querySelector('[data-coach-specialty]'),
            focus: root.querySelector('[data-coach-focus]'),
            statOne: root.querySelector('[data-coach-stat-one]'),
            statTwo: root.querySelector('[data-coach-stat-two]'),
            statThree: root.querySelector('[data-coach-stat-three]'),
            next: root.querySelector('[data-coach-next]'),
        };

        const setCoach = (index) => {
            const coach = coaches[index];

            targets.image.src = coach.image;
            targets.badge.textContent = coach.badge;
            targets.displayName.innerHTML = coach.displayName;
            targets.name.textContent = coach.name;
            targets.pill.textContent = coach.pill;
            targets.bio.textContent = coach.bio;
            targets.achievement.textContent = coach.achievement;
            targets.specialty.textContent = coach.specialty;
            targets.focus.textContent = coach.focus;
            targets.statOne.textContent = coach.stats[0];
            targets.statTwo.textContent = coach.stats[1];
            targets.statThree.textContent = coach.stats[2];
        };

        let autoRotate = window.setInterval(() => {
            currentIndex = (currentIndex + 1) % coaches.length;
            setCoach(currentIndex);
        }, 6000);

        const restartAutoRotate = () => {
            window.clearInterval(autoRotate);
            autoRotate = window.setInterval(() => {
                currentIndex = (currentIndex + 1) % coaches.length;
                setCoach(currentIndex);
            }, 6000);
        };

        targets.next?.addEventListener('click', () => {
            currentIndex = (currentIndex + 1) % coaches.length;
            setCoach(currentIndex);
            restartAutoRotate();
        });
    })();
</script>
