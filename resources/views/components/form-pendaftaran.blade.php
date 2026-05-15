<section id="pendaftaran" class="relative isolate overflow-hidden bg-black py-12 text-white sm:py-16 lg:py-20">
    <div class="absolute inset-0 -z-10 bg-[linear-gradient(135deg,#000000_0%,#111111_52%,#000000_100%)]"></div>
    <div class="absolute inset-x-0 top-0 -z-10 h-px bg-gradient-to-r from-transparent via-white/30 to-transparent"></div>

    <div class="mx-auto w-full max-w-7xl px-5 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 items-center gap-10 lg:grid-cols-[0.92fr_1.08fr] lg:gap-16">
            <div class="flex flex-col gap-5 sm:gap-6">
                <div class="flex items-center gap-4">
                    <span class="text-[0.68rem] font-black uppercase tracking-[0.3em] text-white/70 sm:text-xs">
                        Prestige &amp; Performance
                    </span>
                </div>

                <h2 class="max-w-2xl text-3xl font-black uppercase leading-[0.98] tracking-tight text-white sm:text-5xl lg:text-6xl">
                    Mulai Pendaftaran KINGBLACK
                </h2>

                <p class="max-w-xl text-sm leading-7 text-white/68 sm:text-base sm:leading-8">
                    Isi data singkat untuk memilih target seleksi dan paket persiapan kamu. Langkah pertama menuju karir elit dimulai di sini.
                </p>

                <div class="mt-4 grid gap-4 sm:grid-cols-2 lg:mt-8 lg:grid-cols-1">
                    <div class="flex items-start gap-4 rounded-2xl border border-white/10 bg-white/[0.03] p-4 sm:p-5">
                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full border border-white/15 bg-white text-black">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M20 6 9 17l-5-5"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-sm font-black uppercase tracking-wide text-white sm:text-base">Kurikulum Terarah</h3>
                            <p class="mt-1 text-sm leading-6 text-white/62">Materi standar seleksi dengan pendampingan instruktur berpengalaman.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 rounded-2xl border border-white/10 bg-white/[0.03] p-4 sm:p-5">
                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full border border-white/15 bg-white text-black">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M12 3 4 7v5c0 5 3.5 8 8 9 4.5-1 8-4 8-9V7l-8-4Z"></path>
                                <path d="m9 12 2 2 4-5"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-sm font-black uppercase tracking-wide text-white sm:text-base">Fokus Persiapan</h3>
                            <p class="mt-1 text-sm leading-6 text-white/62">Pilih target dan paket sesuai kebutuhan latihan kamu.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="relative">
                <div class="absolute -inset-1 rounded-3xl bg-white/10 blur-3xl"></div>
                <div class="relative rounded-3xl border border-zinc-200 bg-white p-5 text-black shadow-2xl shadow-black/60 sm:p-8 lg:p-10">
                    <div
                        data-registration-alert
                        class="{{ session('success') ? '' : 'hidden' }} mb-6 rounded-xl border border-[#b88718] bg-[#d4af37] px-4 py-3 text-sm font-black text-black shadow-lg shadow-black/10"
                    >
                        {{ session('success') }}
                    </div>

                    @if (session('error'))
                        <div class="mb-6 rounded-xl border border-red-200 bg-red-50 px-4 py-3 text-sm font-bold text-red-800">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ asset('submit.php') }}" class="space-y-5 sm:space-y-6" data-registration-form>
                        <div class="space-y-2">
                            <label for="nama" class="block text-xs font-black uppercase tracking-wide text-zinc-900">Nama lengkap</label>
                            <input
                                id="nama"
                                name="nama"
                                type="text"
                                value="{{ old('nama') }}"
                                autocomplete="name"
                                placeholder="Masukkan nama sesuai KTP"
                                class="w-full rounded-xl border border-zinc-200 bg-zinc-100 px-4 py-4 text-sm text-zinc-950 outline-none transition focus:border-black focus:bg-white focus:ring-1 focus:ring-black"
                                required
                            >
                            @error('nama')
                                <p class="text-sm font-medium text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="grid gap-5 md:grid-cols-2">
                            <div class="space-y-2">
                                <label for="nomor_hp" class="block text-xs font-black uppercase tracking-wide text-zinc-900">Nomor WhatsApp</label>
                                <input
                                    id="nomor_hp"
                                    name="nomor_hp"
                                    type="text"
                                    value="{{ old('nomor_hp') }}"
                                    autocomplete="tel"
                                    placeholder="0812xxxx"
                                    class="w-full rounded-xl border border-zinc-200 bg-zinc-100 px-4 py-4 text-sm text-zinc-950 outline-none transition focus:border-black focus:bg-white focus:ring-1 focus:ring-black"
                                    required
                                >
                                @error('nomor_hp')
                                    <p class="text-sm font-medium text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="space-y-2">
                                <label for="email" class="block text-xs font-black uppercase tracking-wide text-zinc-900">Email</label>
                                <input
                                id="email"
                                name="email"
                                type="email"
                                value="{{ old('email') }}"
                                    autocomplete="email"
                                    placeholder="email@example.com"
                                    class="w-full rounded-xl border border-zinc-200 bg-zinc-100 px-4 py-4 text-sm text-zinc-950 outline-none transition focus:border-black focus:bg-white focus:ring-1 focus:ring-black"
                                    required
                                >
                                @error('email')
                                    <p class="text-sm font-medium text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="space-y-2">
                            <label for="ingin_daftar" class="block text-xs font-black uppercase tracking-wide text-zinc-900">Ingin daftar apa?</label>
                            <select
                                id="ingin_daftar"
                                name="ingin_daftar"
                                class="w-full rounded-xl border border-zinc-200 bg-zinc-100 px-4 py-4 text-sm text-zinc-950 outline-none transition focus:border-black focus:bg-white focus:ring-1 focus:ring-black"
                                required
                            >
                                <option value="">Pilih Program</option>
                                <option value="tni_ad" @selected(old('ingin_daftar') === 'tni_ad')>TNI AD</option>
                                <option value="tni_au" @selected(old('ingin_daftar') === 'tni_au')>TNI AU</option>
                                <option value="tni_al" @selected(old('ingin_daftar') === 'tni_al')>TNI AL</option>
                                <option value="polri" @selected(old('ingin_daftar') === 'polri')>POLRI</option>
                                <option value="cpns" @selected(old('ingin_daftar') === 'cpns')>CPNS</option>
                            </select>
                            @error('ingin_daftar')
                                <p class="text-sm font-medium text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="grid gap-5 md:grid-cols-2">
                            <div class="space-y-2">
                                <label for="paket" class="block text-xs font-black uppercase tracking-wide text-zinc-900">Pilih paket</label>
                                <select
                                    id="paket"
                                    name="paket"
                                    class="w-full rounded-xl border border-zinc-200 bg-zinc-100 px-4 py-4 text-sm text-zinc-950 outline-none transition focus:border-black focus:bg-white focus:ring-1 focus:ring-black"
                                    required
                                >
                                    <option value="">Pilih Paket Persiapan</option>
                                    <option value="executive" @selected(old('paket') === 'executive')>Executive</option>
                                    <option value="jasmani" @selected(old('paket') === 'jasmani')>Jasmani</option>
                                    <option value="psikotes" @selected(old('paket') === 'psikotes')>Psikotes</option>
                                    <option value="akademik" @selected(old('paket') === 'akademik')>Akademik</option>
                                </select>
                                @error('paket')
                                    <p class="text-sm font-medium text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="space-y-2">
                                <label for="sumber" class="block text-xs font-black uppercase tracking-wide text-zinc-900">Tahu KINGBLACK dari mana?</label>
                                <select
                                    id="sumber"
                                    name="sumber"
                                    class="w-full rounded-xl border border-zinc-200 bg-zinc-100 px-4 py-4 text-sm text-zinc-950 outline-none transition focus:border-black focus:bg-white focus:ring-1 focus:ring-black"
                                    required
                                >
                                    <option value="">Sumber Informasi</option>
                                    <option value="google" @selected(old('sumber') === 'google')>Google</option>
                                    <option value="brosur" @selected(old('sumber') === 'brosur')>Brosur</option>
                                    <option value="website" @selected(old('sumber') === 'website')>Website</option>
                                    <option value="keluarga" @selected(old('sumber') === 'keluarga')>Keluarga</option>
                                    <option value="instagram" @selected(old('sumber') === 'instagram')>Instagram</option>
                                    <option value="tiktok" @selected(old('sumber') === 'tiktok')>TikTok</option>
                                    <option value="facebook" @selected(old('sumber') === 'facebook')>Facebook</option>
                                    <option value="teman" @selected(old('sumber') === 'teman')>Teman</option>
                                </select>
                                @error('sumber')
                                    <p class="text-sm font-medium text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <button
                            type="submit"
                            class="mt-2 w-full rounded-xl bg-black px-6 py-5 text-sm font-black uppercase tracking-[0.22em] text-white shadow-xl shadow-black/20 transition hover:bg-zinc-800 active:scale-[0.98] focus:outline-none focus:ring-2 focus:ring-black focus:ring-offset-2"
                        >
                            <span data-submit-label>Daftar Sekarang</span>
                        </button>

                        <p class="text-center text-xs font-semibold leading-5 text-zinc-500">
                            Dengan mendaftar, data kamu akan dikirim ke sistem pendaftaran KINGBLACK.
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    (() => {
        const form = document.querySelector('[data-registration-form]');
        const alertBox = document.querySelector('[data-registration-alert]');

        if (!form || !alertBox) {
            return;
        }

        const submitButton = form.querySelector('button[type="submit"]');
        const submitLabel = form.querySelector('[data-submit-label]');
        const showAlert = (message, type = 'success') => {
            alertBox.textContent = message;
            alertBox.classList.remove('hidden', 'border-[#b88718]', 'bg-[#d4af37]', 'text-black', 'border-red-200', 'bg-red-50', 'text-red-800');

            if (type === 'success') {
                alertBox.classList.add('border-[#b88718]', 'bg-[#d4af37]', 'text-black');
            } else {
                alertBox.classList.add('border-red-200', 'bg-red-50', 'text-red-800');
            }

            document.querySelector('#pendaftaran')?.scrollIntoView({
                behavior: 'smooth',
                block: 'start',
            });
        };

        form.addEventListener('submit', async (event) => {
            event.preventDefault();

            submitButton.disabled = true;
            submitButton.classList.add('cursor-not-allowed', 'opacity-70');
            submitLabel.textContent = 'Mengirim...';

            try {
                const response = await fetch('submit.php', {
                    method: 'POST',
                    body: new FormData(form),
                    headers: {
                        'Accept': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest',
                    },
                });

                const responseText = await response.text();
                let data = {};

                try {
                    data = responseText ? JSON.parse(responseText) : {};
                } catch (parseError) {
                    data = {
                        success: false,
                        message: responseText || 'Response submit.php bukan JSON valid.',
                    };
                }

                if (!response.ok || data.success === false) {
                    const firstError = data.errors
                        ? Object.values(data.errors).flat()[0]
                        : data.message;

                    showAlert(firstError || 'pendaftaran belum berhasil diproses. silakan coba lagi.', 'error');
                    return;
                }

                form.reset();
                showAlert(data.message || 'pendaftaran berhasil! data kamu sudah kami terima.');
            } catch (error) {
                showAlert(error.message || 'pendaftaran belum berhasil diproses. silakan coba lagi.', 'error');
            } finally {
                submitButton.disabled = false;
                submitButton.classList.remove('cursor-not-allowed', 'opacity-70');
                submitLabel.textContent = 'Daftar Sekarang';
            }
        });
    })();
</script>

