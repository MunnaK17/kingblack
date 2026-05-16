@php
    $seoTitle = 'KINGBLACK - Bimbel TNI POLRI & Latihan Fisik Seleksi';
    $seoDescription = 'KINGBLACK membantu persiapan seleksi TNI, POLRI, sekolah kedinasan, CPNS, PTN, dan kedokteran melalui latihan fisik, akademik, psikotes, dan pendampingan terarah.';
    $canonicalUrl = url('/');
    $businessName = config('seo.business_name');
    $brandName = config('seo.brand_name');
    $address = config('seo.address');
    $openingHours = config('seo.opening_hours');
    $schema = [
        '@context' => 'https://schema.org',
        '@graph' => [
            [
                '@type' => ['Organization', 'LocalBusiness', 'EducationalOrganization'],
                '@id' => $canonicalUrl . '#organization',
                'name' => $businessName,
                'alternateName' => $brandName,
                'url' => $canonicalUrl,
                'logo' => asset('images/logos.png'),
                'image' => asset('images/og-kingblack.jpg'),
                'description' => $seoDescription,
                'telephone' => config('seo.phone'),
                'address' => [
                    '@type' => 'PostalAddress',
                    'streetAddress' => $address['street'],
                    'addressLocality' => $address['locality'],
                    'addressRegion' => $address['region'],
                    'postalCode' => $address['postal_code'],
                    'addressCountry' => $address['country'],
                ],
                'openingHoursSpecification' => [
                    [
                        '@type' => 'OpeningHoursSpecification',
                        'dayOfWeek' => $openingHours['days'],
                        'opens' => $openingHours['opens'],
                        'closes' => $openingHours['closes'],
                    ],
                ],
                'sameAs' => config('seo.same_as'),
                'contactPoint' => [
                    [
                        '@type' => 'ContactPoint',
                        'contactType' => 'customer service',
                        'telephone' => config('seo.phone'),
                        'areaServed' => 'ID',
                        'availableLanguage' => ['Indonesian'],
                    ],
                ],
                'areaServed' => [
                    [
                        '@type' => 'AdministrativeArea',
                        'name' => config('seo.area_served'),
                    ],
                    [
                        '@type' => 'Country',
                        'name' => 'Indonesia',
                    ],
                ],
                'knowsAbout' => [
                    'Bimbel TNI',
                    'Bimbel POLRI',
                    'Latihan fisik TNI POLRI',
                    'Persiapan seleksi sekolah kedinasan',
                    'Pendaftaran KINGBLACK',
                ],
            ],
            [
                '@type' => 'WebSite',
                '@id' => $canonicalUrl . '#website',
                'url' => $canonicalUrl,
                'name' => $businessName,
                'alternateName' => $brandName,
                'publisher' => [
                    '@id' => $canonicalUrl . '#organization',
                ],
            ],
            [
                '@type' => 'FAQPage',
                '@id' => $canonicalUrl . '#faq',
                'mainEntity' => [
                    [
                        '@type' => 'Question',
                        'name' => 'Apa saja syarat untuk bergabung dengan KINGBLACK?',
                        'acceptedAnswer' => [
                            '@type' => 'Answer',
                            'text' => 'Peserta cukup menghubungi admin melalui WhatsApp, memilih program, lalu mengikuti arahan pendaftaran yang diberikan.',
                        ],
                    ],
                    [
                        '@type' => 'Question',
                        'name' => 'Berapa lama durasi program bimbingan?',
                        'acceptedAnswer' => [
                            '@type' => 'Answer',
                            'text' => 'Durasi program menyesuaikan jenis program yang dipilih dan kebutuhan persiapan peserta.',
                        ],
                    ],
                    [
                        '@type' => 'Question',
                        'name' => 'Apakah ada jaminan kelulusan?',
                        'acceptedAnswer' => [
                            '@type' => 'Answer',
                            'text' => 'KINGBLACK fokus memberikan pendampingan dan latihan terbaik. Hasil akhir tetap bergantung pada proses, usaha, dan performa peserta saat seleksi.',
                        ],
                    ],
                    [
                        '@type' => 'Question',
                        'name' => 'Di mana lokasi latihan dilakukan?',
                        'acceptedAnswer' => [
                            '@type' => 'Answer',
                            'text' => 'Lokasi latihan akan diinformasikan langsung oleh admin saat proses konsultasi dan pendaftaran.',
                        ],
                    ],
                    [
                        '@type' => 'Question',
                        'name' => 'Bagaimana cara melakukan pendaftaran?',
                        'acceptedAnswer' => [
                            '@type' => 'Answer',
                            'text' => 'Klik tombol WhatsApp di website, lalu konsultasikan program yang ingin kamu ambil dengan admin.',
                        ],
                    ],
                ],
            ],
        ],
    ];
@endphp

<x-layouts.app
    :title="$seoTitle"
    :description="$seoDescription"
    :canonical="$canonicalUrl"
    :og-image="asset('images/og-kingblack.jpg')"
    :schema="$schema"
>
    <x-site.navbar />
    <x-site.welcome-popup />

    <main>
        <x-home.hero />
        <x-home.trust-bar />
        <x-home.problem />
        <x-home.program />
        <x-home.about />
        <x-home.facilities />
        <x-home.coach />
        @include('components.form-pendaftaran')
        <x-home.faq />
        <x-home.cta />
    </main>

    <x-site.footer />
</x-layouts.app>
