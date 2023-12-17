@if ($pendaftaran->status_pendaftaran == 'PENDING')
    <div
        class="relative overflow-hidden before:absolute before:top-0 before:start-1/2 before:bg-[url('https://preline.co/assets/svg/examples/polygon-bg-element.svg')] before:bg-no-repeat before:bg-top before:bg-cover before:w-full before:h-full before:-z-[1] before:transform before:-translate-x-1/2 dark:before:bg-[url('https://preline.co/assets/svg/examples/polygon-bg-element-dark.svg')]">
        <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 pt-24 pb-10">

            <!-- Title -->
            <div class="mt-5 max-w-2xl text-center mx-auto">
                <h1 class="block font-bold text-gray-800 text-4xl md:text-5xl lg:text-6xl dark:text-gray-200">
                    Data Pendaftaran Anda Sedang
                    <span class="bg-clip-text bg-gradient-to-tl from-blue-600 to-violet-600 text-transparent">
                        Diproses
                    </span>
                </h1>
            </div>
            <!-- End Title -->

            <div class="mt-5 max-w-3xl text-center mx-auto">
                <p class="text-lg text-gray-600 dark:text-gray-400">
                    Status pendaftaran anda sedang diproses. Silahkan menunggu konfirmasi selanjutnya.
                    Terima kasih.
                </p>
            </div>

        </div>
    </div>
@elseif ($pendaftaran->status_pendaftaran == 'DITERIMA')
    <div
        class="relative overflow-hidden before:absolute before:top-0 before:start-1/2 before:bg-[url('https://preline.co/assets/svg/examples/polygon-bg-element.svg')] before:bg-no-repeat before:bg-top before:bg-cover before:w-full before:h-full before:-z-[1] before:transform before:-translate-x-1/2 dark:before:bg-[url('https://preline.co/assets/svg/examples/polygon-bg-element-dark.svg')]">
        <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 pt-24 pb-10">

            <!-- Title -->
            <div class="mt-5 max-w-2xl text-center mx-auto">
                <h1 class="block font-bold text-gray-800 text-4xl md:text-5xl lg:text-6xl dark:text-gray-200">
                    Selamat Anda Diterima
                    <span class="bg-clip-text bg-gradient-to-tl from-blue-600 to-violet-600 text-transparent">
                        Diterima
                    </span>
                </h1>
            </div>
            <!-- End Title -->

            <div class="mt-5 max-w-3xl text-center mx-auto">
                <p class="text-lg text-gray-600 dark:text-gray-400">
                    Status pendaftaran anda telah diterima. Silahkan datang ke kampus untuk melakukan registrasi ulang.
                    Selamat bergabung di Kampus pada program studi {{ Str::upper($pendaftaran->jurusan_diterima) }}.
                    Terima kasih.
                </p>
            </div>

        </div>
    </div>
@elseif ($pendaftaran->status_pendaftaran == 'DITOLAK')
    <div
        class="relative overflow-hidden before:absolute before:top-0 before:start-1/2 before:bg-[url('https://preline.co/assets/svg/examples/polygon-bg-element.svg')] before:bg-no-repeat before:bg-top before:bg-cover before:w-full before:h-full before:-z-[1] before:transform before:-translate-x-1/2 dark:before:bg-[url('https://preline.co/assets/svg/examples/polygon-bg-element-dark.svg')]">
        <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 pt-24 pb-10">

            <!-- Title -->
            <div class="mt-5 max-w-2xl text-center mx-auto">
                <h1 class="block font-bold text-gray-800 text-4xl md:text-5xl lg:text-6xl dark:text-gray-200">
                    Sayangnya Anda
                    <span class="bg-clip-text bg-gradient-to-tl from-red-600 to-violet-600 text-transparent">
                        Ditolak
                    </span>
                </h1>
            </div>
            <!-- End Title -->

            <div class="mt-5 max-w-3xl text-center mx-auto">
                <p class="text-lg text-gray-600 dark:text-gray-400">
                    Status pendaftaran anda ditolak. Silahkan daftar kembali pada periode pendaftaran berikutnya.
                    Tetap semangat dan jangan menyerah.
                    Terima kasih.
                </p>
            </div>

        </div>
    </div>
@endif
