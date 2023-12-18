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
                                Data Pendaftar {{ $pendaftar->nama_lengkap }}
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
                                                                Nama Lengkap
                                                            </td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                {{ $pendaftar->nama_lengkap }}
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
                                                                Nomor Telepon
                                                            </td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                <a
                                                                    href="tel:{{ $pendaftar->no_telepon }}">{{ $pendaftar->no_telepon }}</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                Nomor HP
                                                            </td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                <a
                                                                    href="https://wa.me/{{ $pendaftar->no_hp }}">{{ $pendaftar->no_hp }}</a>
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
                                                                Kabupaten
                                                            </td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                {{ $pendaftar->kabupaten_lahir->name }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                Provinsi
                                                            </td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                {{ $pendaftar->provinsi_lahir->name }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                Negara
                                                            </td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                {{ $pendaftar->negara_lahir ?? 'Indonesia' }}
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
                                                                Alamat KTP
                                                            </td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                {{ $pendaftar->alamat_ktp }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                Alamat Tinggal
                                                            </td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                {{ $pendaftar->alamat_tinggal }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                Kecamatan
                                                            </td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                {{ $pendaftar->kecamatan }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                Kabupaten
                                                            </td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                {{ $pendaftar->kabupaten->name }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                Provinsi
                                                            </td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                {{ $pendaftar->provinsi->name }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                Kewarganegaraan
                                                            </td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                @if ($pendaftar->kewarganegaraan == 'wni_keturunan')
                                                                    WNI Keturunan
                                                                @elseif($pendaftar->kewarganegaraan == 'wni_asli')
                                                                    WNI Asli
                                                                @elseif($pendaftar->kewarganegaraan == 'wna')
                                                                    WNA
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                Negara Asal
                                                            </td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                {{ $pendaftar->negara_wna ?? 'Indonesia' }}
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
                                                                Status Menikah
                                                            </td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                @if ($pendaftar->status_menikah == 'belum_menikah')
                                                                    Belum Menikah
                                                                @elseif($pendaftar->status_menikah == 'menikah')
                                                                    Menikah
                                                                @elseif($pendaftar->status_menikah == 'lainnya')
                                                                    Lainnya
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                Agama
                                                            </td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                {{ ucfirst($pendaftar->agama) }}
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                            <hr class="my-4">

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
