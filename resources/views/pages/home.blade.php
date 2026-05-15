<x-layouts.app title="KINGBLACK">
    <x-site.navbar />
    <x-site.welcome-popup />

    <main>
        <x-home.hero />
        <x-home.trust-bar />
        <x-home.problem />
        <x-home.program />
        <x-home.facilities />
        <x-home.coach />
        @include('components.form-pendaftaran')
        <x-home.about />
        <x-home.faq />
        <x-home.cta />
    </main>

    <x-site.footer />
</x-layouts.app>
