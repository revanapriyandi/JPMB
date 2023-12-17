<x-app-layout>
    <x-slot name="header">
        <div class="md:flex md:justify-between px-4 md:p-0">
            <div class="w-full md:mb-0 md:w-2/4 md:flex space-y-4 md:space-y-0 md:space-x-2">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Pendaftaran
                </h2>
            </div>

            <div class="md:flex md:items-center space-y-4 md:space-y-0 md:space-x-2">
                <div class=" w-full md:w-auto md:mb-0 md:ml-2">
                    <div class="inline-block relative w-full text-left md:w-auto">
                        <div>
                            {{ date('d F Y H:i A') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                    @php
                        $pendaftaran = App\Models\Pendaftaran::where('user_id', auth()->user()->id)
                            ->where('status', 1)
                            ->first();
                    @endphp

                    @if ($pendaftaran)
                        <div class="bg-gray-800 text-sm text-white rounded-lg p-4 dark:bg-white dark:text-gray-800"
                            role="alert">
                            <div class="flex">
                                <div class="py-1">
                                    <svg class="fill-current h-6 w-6 text-white mr-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zM2 10a8 8 0 1116 0 8 8 0 01-16 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-bold">Pendaftaran Anda telah berhasil!</p>
                                    <p class="text-sm">
                                        Silahkan cek email Anda untuk melihat informasi lebih lanjut.
                                    </p>

                                </div>
                            </div>
                        </div>
                        @include('pendaftaran.statusPendaftaran')
                    @else
                        <livewire:pages.pendaftaran.form-daftar />
                    @endif

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
