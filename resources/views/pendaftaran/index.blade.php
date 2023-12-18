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
                            <a href="javascript:window.print()"
                                class="inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white dark:bg-gray-800 text-base font-medium text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:text-sm">
                                <i class="fas fa-pdf mr-2"></i> Cetak Pendaftaran
                            </a>
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
                        $pendaftaran = App\Models\Pendaftaran::where('user_id', auth()->user()->id)->first();
                    @endphp

                    @if ($pendaftaran)
                        @include('pendaftaran.statusPendaftaran')
                    @else
                        <livewire:pages.pendaftaran.form-daftar />
                    @endif

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
