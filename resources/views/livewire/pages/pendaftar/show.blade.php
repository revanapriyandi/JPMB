<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Data Pendaftar
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-3 text-gray-900 dark:text-gray-100">
                    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">

                        <div class="max-w-2xl mx-auto text-center ">
                            <h2 class="text-2xl font-bold md:text-3xl md:leading-tight text-gray-800 dark:text-gray-200">
                                Data Pendaftar {{ $pendaftar->nama }}
                            </h2>
                        </div>

                        <div
                            class="mt-4 bg-blue-50 border border-blue-500 text-sm text-gray-500 rounded-lg p-5 dark:bg-blue-600/[.15] mb-10 lg:mb-14">
                            <div class="flex">
                                <svg class="flex-shrink-0 h-4 w-4 text-blue-600 mt-0.5 dark:text-white"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <path d="M12 16v-4"></path>
                                    <path d="M12 8h.01"></path>
                                </svg>
                                <div class="ms-3">
                                    <h3 class="text-blue-600 font-semibold dark:font-medium dark:text-white">
                                        Info Pendaftar
                                    </h3>
                                    <p class="mt-2 text-gray-800 dark:text-slate-400">
                                        Berikut adalah data pendaftar yang telah mendaftar di website ini. Anda dapat
                                        mengubah status pendaftaran dari pendaftar ini.
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class="max-w-5xl mx-auto mt-4">
                            <div class="grid sm:grid-cols-2 gap-6 md:gap-12">
                                <div class="flex flex-col">
                                    <div class="-m-1.5 overflow-x-auto">
                                        <div class="p-1.5 min-w-full inline-block align-middle">
                                            <div class="overflow-hidden">
                                                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">

                                                    <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                                        <tr>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                NISN
                                                            </td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                {{ $pendaftar->nisn }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                NIK
                                                            </td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                {{ $pendaftar->nik }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                Nama Lengkap
                                                            </td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                {{ $pendaftar->nama }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                Email
                                                            </td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                <a
                                                                    href="mailto:{{ $pendaftar->email }}">{{ $pendaftar->email }}</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                Nomor HP / Whatsapp
                                                            </td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                <a
                                                                    href="https://wa.me/{{ $pendaftar->phone_number }}">{{ $pendaftar->phone_number }}</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                Tempat Lahir
                                                            </td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                {{ $pendaftar->tempat_lahir }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                Tanggal Lahir
                                                            </td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                {{ date('d F Y', strtotime($pendaftar->tanggal_lahir)) }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                Jenis Kelamin
                                                            </td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                @if ($pendaftar->jenis_kelamin == 'L')
                                                                    Laki-laki
                                                                @else
                                                                    Perempuan
                                                                @endif
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col">
                                    <div class="-m-1.5 overflow-x-auto">
                                        <div class="p-1.5 min-w-full inline-block align-middle">
                                            <div class="overflow-hidden">
                                                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">

                                                    <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                                        <tr>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                Asal Sekolah
                                                            </td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                {{ $pendaftar->asal_sekolah }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                Jurusan Asal
                                                            </td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                {{ $pendaftar->jurusan }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                Jurusan Lulus
                                                            </td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                {{ $pendaftar->tahun_lulus }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                Nilai Raport
                                                            </td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                {{ number_format($pendaftar->nilai_raport, 2, ',', '.') }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                Nilai UN
                                                            </td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                {{ number_format($pendaftar->nilai_un, 2, ',', '.') }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                Alamat Sekolah
                                                            </td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                {{ $pendaftar->alamat_sekolah }}
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col">
                                    <div class="-m-1.5 overflow-x-auto">
                                        <div class="p-1.5 min-w-full inline-block align-middle">
                                            <div class="overflow-hidden">
                                                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">

                                                    <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                                        <tr>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                Nama Ibu Kandung
                                                            </td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                {{ $pendaftar->nama_ibukandung }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                Pekerjaan Ibu Kandung
                                                            </td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                {{ $pendaftar->pekerjaan_ibukandung }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                Nama Ayah Kandung
                                                            </td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                {{ $pendaftar->nama_ayahkandung }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                Pekerjaaan Ayah Kandung
                                                            </td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                {{ $pendaftar->pekerjaan_ayahkandung }}
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col">
                                    <div class="-m-1.5 overflow-x-auto">
                                        <div class="p-1.5 min-w-full inline-block align-middle">
                                            <div class="overflow-hidden">
                                                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">

                                                    <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                                        <tr>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                Jurusan Didaftar 1
                                                            </td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                {{ $pendaftar->jurusan_pilihan1 }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                Jurusan Didaftar 2
                                                            </td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                {{ $pendaftar->jurusan_pilihan2 }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                Jurusan Didaftar 3
                                                            </td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                {{ $pendaftar->jurusan_pilihan3 }}
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <hr class="my-4">
                                            <form wire:submit="updateStatusPendaftaran">
                                                <div class="sm:col-span-3 p-3">
                                                    <x-input-label for="status_pendaftaran"
                                                        value="{{ __('Status Pendaftaran') }}"
                                                        class="block text-sm" />
                                                    <div class="mt-2">
                                                        <select name="status_pendaftaran" id="status_pendaftaran"
                                                            wire:model.change="status_pendaftaran"
                                                            class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm w-full">
                                                            <option value="">-- Pilih Status Pendaftaran --
                                                            </option>
                                                            <option value="PENDING">Belum Diverifikasi</option>
                                                            <option value="DITERIMA">Diterima</option>
                                                            <option value="DITOLAK">Ditolak</option>
                                                        </select>
                                                        <x-input-error for="status_pendaftaran" class="mt-2" />
                                                    </div>
                                                </div>
                                                @if ($status_pendaftaran == 'DITERIMA')
                                                    <div class="sm:col-span-3 p-3">
                                                        <x-input-label for="jurusan_diterima"
                                                            value="{{ __('Jurusan Diterima') }}"
                                                            class="block text-sm" />
                                                        <div class="mt-2">
                                                            <x-text-input wire:model="jurusan_diterima"
                                                                id="jurusan_diterima" name="jurusan_diterima"
                                                                type="text" class="mt-1 block w-full" required
                                                                autofocus autocomplete="jurusan_diterima" />
                                                            <x-input-error for="status_pendaftaran" class="mt-2" />
                                                        </div>
                                                    </div>
                                                @endif

                                                <x-danger-button class="mt-4" wire:click="hapusDataPendaftar">
                                                    Hapus Pendaftar
                                                </x-danger-button>
                                                <x-primary-button class="mt-4">
                                                    {{ __('Update Status Pendaftaran') }}
                                                </x-primary-button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
