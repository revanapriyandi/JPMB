<div
    class="relative overflow-hidden before:absolute before:top-0 before:start-1/2 before:bg-[url('https://preline.co/assets/svg/examples/polygon-bg-element.svg')] before:bg-no-repeat before:bg-top before:bg-cover before:w-full before:h-full before:-z-[1] before:transform before:-translate-x-1/2 dark:before:bg-[url('https://preline.co/assets/svg/examples/polygon-bg-element-dark.svg')]">
    <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Title -->
        <div class="text-center">
            <h1 class=" font-bold text-gray-800 text-2xl  dark:text-gray-200">
                Status Pendaftaran
            </h1>
        </div>
        <!-- End Title -->

        <div class="">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                    <div class="p-3 text-gray-900 dark:text-gray-100">
                        <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
                            <div class="max-w-5xl mx-auto mt-4">
                                <div class="">
                                    <div class="flex flex-col">
                                        <div class="-m-1.5 overflow-x-auto">
                                            <div class="p-1.5 min-w-full inline-block align-middle">
                                                <div class="overflow-hidden">
                                                    <table
                                                        class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">

                                                        <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                                            <tr>
                                                                <td
                                                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                    Nama Lengkap
                                                                </td>
                                                                <td
                                                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                    {{ $pendaftaran->nama_lengkap }}
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
                                                                        href="mailto:{{ $pendaftaran->email }}">{{ $pendaftaran->email }}</a>
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
                                                                        href="tel:{{ $pendaftaran->no_telepon }}">{{ $pendaftaran->no_telepon }}</a>
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
                                                                        href="https://wa.me/{{ $pendaftaran->no_hp }}">{{ $pendaftaran->no_hp }}</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td
                                                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                    Tempat Lahir
                                                                </td>
                                                                <td
                                                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                    {{ $pendaftaran->tempat_lahir }}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td
                                                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                    Tanggal Lahir
                                                                </td>
                                                                <td
                                                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                    {{ date('d F Y', strtotime($pendaftaran->tanggal_lahir)) }}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td
                                                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                    Kabupaten
                                                                </td>
                                                                <td
                                                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                    {{ $pendaftaran->kabupaten_lahir->name }}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td
                                                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                    Provinsi
                                                                </td>
                                                                <td
                                                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                    {{ $pendaftaran->provinsi_lahir->name }}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td
                                                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                    Negara
                                                                </td>
                                                                <td
                                                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                    {{ $pendaftaran->negara_lahir ?? 'Indonesia' }}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td
                                                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                    Jenis Kelamin
                                                                </td>
                                                                <td
                                                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                    @if ($pendaftaran->jenis_kelamin == 'L')
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
                                                    <table
                                                        class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">

                                                        <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                                            <tr>
                                                                <td
                                                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                    Alamat KTP
                                                                </td>
                                                                <td
                                                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                    {{ $pendaftaran->alamat_ktp }}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td
                                                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                    Alamat Tinggal
                                                                </td>
                                                                <td
                                                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                    {{ $pendaftaran->alamat_tinggal }}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td
                                                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                    Kecamatan
                                                                </td>
                                                                <td
                                                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                    {{ $pendaftaran->kecamatan }}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td
                                                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                    Kabupaten
                                                                </td>
                                                                <td
                                                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                    {{ $pendaftaran->kabupaten->name }}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td
                                                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                    Provinsi
                                                                </td>
                                                                <td
                                                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                    {{ $pendaftaran->provinsi->name }}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td
                                                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                    Kewarganegaraan
                                                                </td>
                                                                <td
                                                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                    @if ($pendaftaran->kewarganegaraan == 'wni_keturunan')
                                                                        WNI Keturunan
                                                                    @elseif($pendaftaran->kewarganegaraan == 'wni_asli')
                                                                        WNI Asli
                                                                    @elseif($pendaftaran->kewarganegaraan == 'wna')
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
                                                                    {{ $pendaftaran->negara_wna ?? 'Indonesia' }}
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
                                                    <table
                                                        class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">

                                                        <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                                            <tr>
                                                                <td
                                                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                    Status Menikah
                                                                </td>
                                                                <td
                                                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                                                    @if ($pendaftaran->status_menikah == 'belum_menikah')
                                                                        Belum Menikah
                                                                    @elseif($pendaftaran->status_menikah == 'menikah')
                                                                        Menikah
                                                                    @elseif($pendaftaran->status_menikah == 'lainnya')
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
                                                                    {{ ucfirst($pendaftaran->agama) }}
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
</div>
