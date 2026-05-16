<div
    id="welcome-popup"
    class="fixed inset-0 z-[100] hidden items-center justify-center bg-black/70 px-4 py-6 backdrop-blur-sm sm:px-6"
    role="dialog"
    aria-modal="true"
    aria-label="Promo KINGBLACK"
    data-welcome-popup
>
    <div class="relative w-full max-w-[34rem]">
        <button
            type="button"
            class="absolute -right-2 -top-3 z-10 inline-flex h-9 w-9 items-center justify-center rounded-full bg-white text-xl font-medium leading-none text-black shadow-lg transition hover:scale-105 hover:bg-gray-100 focus:outline-none focus:ring focus:ring-gray-300 sm:-right-4 sm:-top-4"
            aria-label="Tutup popup"
            data-welcome-popup-close
        >
            &times;
        </button>

        <a
            href="{{ \App\Support\Whatsapp::url('hero') }}"
            target="_blank"
            rel="noopener noreferrer"
            aria-label="Hubungi KINGBLACK via WhatsApp"
        >
            <img
                src="{{ asset('images/poster.webp') }}"
                alt="Promo pendaftaran program persiapan seleksi KINGBLACK"
                class="max-h-[86vh] w-full rounded-lg object-contain shadow-2xl transition hover:scale-[1.01]"
            >
        </a>
    </div>
</div>
