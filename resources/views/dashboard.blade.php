<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <!-- Hero -->
    <div class="relative overflow-hidden">
        <!-- Gradients -->
        <div aria-hidden="true" class="flex absolute -top-96 start-1/2 transform -translate-x-1/2">
            <div
                class="bg-gradient-to-r from-violet-300/50 to-purple-100 blur-3xl w-[25rem] h-[44rem] rotate-[-60deg] transform -translate-x-[10rem] dark:from-violet-900/50 dark:to-purple-900">
            </div>
            <div
                class="bg-gradient-to-tl from-blue-50 via-blue-100 to-blue-50 blur-3xl w-[90rem] h-[50rem] rounded-fulls origin-top-left -rotate-12 -translate-x-[15rem] dark:from-indigo-900/70 dark:via-indigo-900/70 dark:to-blue-900/70">
            </div>
        </div>
        <!-- End Gradients -->

        <div class="relative z-10">
            <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 py-10 lg:py-16">
                <div class="max-w-2xl text-center mx-auto">
                    <!-- Title -->
                    <div class="mt-5 max-w-2xl">
                        <h2
                            class="block font-semibold text-gray-800 text-4xl md:text-5xl lg:text-6xl dark:text-gray-200">
                            Pendaftaran Mahasiswa Baru
                        </h2>
                    </div>
                    <!-- End Title -->

                    <div class="mt-5 max-w-3xl">
                        <p class="text-lg text-gray-600 dark:text-gray-400 mb-4">
                            Selamat datang di website pendaftaran mahasiswa baru Universitas **. Silahkan melakukan
                            pendaftaran dengan mengisi form pendaftaran yang telah disediakan. Terima kasih.
                        </p>
                        <video id="my-video" class="video-js" controls preload="auto" width="640" height="264"
                            poster="https://minangsatu.com/upload/IMG-20220215-WA0064.jpg" data-setup="{}">
                            <source src="{{ asset('assets/video_smk.mp4') }}" type="video/mp4" />
                            <p class="vjs-no-js">
                                To view this video please enable JavaScript, and consider upgrading to a
                                web browser that
                                <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5
                                    video</a>
                            </p>
                        </video>
                    </div>


                    <div class="mt-5 max-w-3xl">
                        <img src="https://minangsatu.com/upload/IMG-20220215-WA0064.jpg" alt="">
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Hero -->
    @push('styles')
        <link href="https://vjs.zencdn.net/8.6.1/video-js.css" rel="stylesheet" />
    @endpush

    @push('scripts')
        <script src="https://vjs.zencdn.net/8.6.1/video.min.js"></script>
    @endpush
</x-app-layout>
