@props([
    'id' => null,
    'eyebrow' => null,
    'title' => null,
])

<section @if ($id) id="{{ $id }}" @endif {{ $attributes->merge(['class' => 'home-section']) }}>
    <div class="site-container">
        @if ($eyebrow || $title)
            <header class="section-header">
                @if ($eyebrow)
                    <p>{{ $eyebrow }}</p>
                @endif

                @if ($title)
                    <h2>{{ $title }}</h2>
                @endif
            </header>
        @endif

        {{ $slot }}
    </div>
</section>
