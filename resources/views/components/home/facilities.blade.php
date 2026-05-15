@php
    $facilities = [
        [
            'title' => 'Area Latihan Lari dan Fisik',
            'description' => 'Fasilitas latihan untuk menunjang persiapan jasmani seperti lari, push-up, sit-up, pull-up, dan latihan ketahanan tubuh.',
            'image' => 'images//madya.jpg',
        ],
        [
            'title' => 'Area GYM',
            'description' => 'Fasilitas GYM dengan peralatan lengkap untuk latihan kekuatan otot, kebugaran, dan persiapan fisik yang optimal bagi peserta.',
            'image' => 'images/gym.jpg',
        ],
        [
            'title' => 'Stadion Akuatik',
            'description' => 'Fasilitas kolam renang untuk latihan renang yang mendukung persiapan fisik dan ketahanan tubuh peserta dalam menghadapi tantangan seleksi.',
            'image' => 'images/renang.jpg',
        ],
    ];
@endphp

<section id="facilities" class="home-section bg-white py-16 lg:py-20">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
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
        </div>

        <div class="mt-12 grid gap-6 md:grid-cols-3">
            @foreach ($facilities as $facility)
                <article class="group overflow-hidden border border-gray-200 bg-white shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-md" data-reveal="slide-up" data-reveal-delay="{{ $loop->index * 120 }}">
                    
                    {{-- foto portrait --}}
                    <div class="aspect-[3/4] overflow-hidden bg-gray-100">
                        <img
                            src="{{ asset($facility['image']) }}"
                            alt="{{ $facility['title'] }}"
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
