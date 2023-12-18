<div>
    <form wire:submit="save">
        <div class="grid grid-cols-1 gap-y-8">
            <div class="sm:col-span-3">
                <x-input-label for="nama_lengkap" value="{{ __('Nama Lengkap') }}" class="block text-sm" />
                <div class="mt-2">
                    <x-text-input wire:model="nama_lengkap" id="nama_lengkap" name="nama_lengkap" type="text"
                        class="mt-1 block w-full" placeholder="{{ __('Nama Lengkap') }}" />
                    <x-input-error for="nama_lengkap" class="mt-2" />
                </div>
                <small class="text-gray-400">*Sesuai Ijazah disertai gelar</small>
            </div>
            <div class="sm:col-span-3">
                <x-input-label for="alamat_ktp" value="{{ __('Alamat KTP') }}" class="block text-sm" />
                <div class="mt-2">
                    <textarea name="alamat_ktp" id="alamat_ktp" wire:model="alamat_ktp" rows="3"
                        class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
                        autocomplete="none"></textarea>
                    <x-input-error for="alamat_ktp" class="mt-2" />
                </div>
            </div>
            <div class="sm:col-span-3">
                <x-input-label for="alamat_tinggal" value="{{ __('Alamat Lengkap Saat ini') }}" class="block text-sm" />
                <div class="mt-2">
                    <textarea name="alamat_tinggal" id="alamat_tinggal" wire:model="alamat_tinggal" rows="3"
                        class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
                        autocomplete="none"></textarea>
                    <x-input-error for="alamat_tinggal" class="mt-2" />
                </div>
            </div>
            <div class="sm:col-span-3">
                <x-input-label for="kecamatan" value="{{ __('Kecamatan') }}" class="block text-sm" />
                <div class="mt-2">
                    <x-text-input wire:model="kecamatan" id="kecamatan" name="kecamatan" type="text"
                        class="mt-1 block w-full" placeholder="{{ __('Kecamatan') }}" />
                    <x-input-error for="kecamatan" class="mt-2" />
                </div>
            </div>
            <div class="sm:col-span-3">
                <x-input-label for="kabupaten_id" value="{{ __('Kabupaten') }}" class="block text-sm" />
                <div class="mt-2">
                    <select name="kabupaten_id" id="kabupaten_id" wire:model="kabupaten_id" x-init="$($refs.kabupaten_id).select2({
                        placeholder: '--- Select Values ---',
                        responsive: true,
                    }).on('change', function(e) {
                        value = Array.from(e.target.options).filter(option => option.selected).map(option => option.value);
                    });"
                        x-ref="kabupaten_id"
                        class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm w-full">
                        <option value="">-- Pilih Kabupaten --</option>
                        @foreach ($kabupatens as $value)
                            <option value="{{ $value->id }}">{{ $value->name }}</option>
                        @endforeach
                    </select>
                    <x-input-error for="kabupaten_id" class="mt-2" />
                </div>
            </div>
            <div class="sm:col-span-3">
                <x-input-label for="provinsi_id" value="{{ __('Provinsi') }}" class="block text-sm" />
                <div class="mt-2">
                    <select name="provinsi_id" id="provinsi_id" wire:model="provinsi_id" x-init="$($refs.provinsi_id).select2({
                        placeholder: '--- Select Values ---',
                        responsive: true,
                    }).on('change', function(e) {
                        value = Array.from(e.target.options).filter(option => option.selected).map(option => option.value);
                    });"
                        x-ref="provinsi_id"
                        class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm w-full">
                        <option value="">-- Pilih Provinsi --</option>
                        @foreach ($provinsis as $value)
                            <option value="{{ $value->id }}">{{ $value->name }}</option>
                        @endforeach
                    </select>
                    <x-input-error for="provinsi_id" class="mt-2" />
                </div>
            </div>
            <div class="sm:col-span-3">
                <x-input-label for="no_telepon" value="{{ __('Nomor Telepon') }}" class="block text-sm" />
                <div class="mt-2">
                    <x-text-input wire:model="no_telepon" id="no_telepon" name="no_telepon" type="number"
                        class="mt-1 block w-full" placeholder="{{ __('8..') }}" />
                    <x-input-error for="no_telepon" class="mt-2" />
                </div>
            </div>
            <div class="sm:col-span-3">
                <x-input-label for="no_hp" value="{{ __('Nomor Hp') }}" class="block text-sm" />
                <div class="mt-2">
                    <x-text-input wire:model="no_hp" id="no_hp" name="no_hp" type="number"
                        class="mt-1 block w-full" placeholder="{{ __('628') }}" />
                    <x-input-error for="no_hp" class="mt-2" />
                </div>
            </div>
            <div class="sm:col-span-3">
                <x-input-label for="email" value="{{ __('Email') }}" class="block text-sm" />
                <div class="mt-2">
                    <x-text-input wire:model="email" id="email" name="email" type="email"
                        class="mt-1 block w-full" placeholder="{{ __('Email') }}" />
                    <x-input-error for="email" class="mt-2" />
                </div>
            </div>
            <div class="sm:col-span-3">
                <x-input-label for="kewarganegaraan" value="{{ __('Kewarganegaraan') }}" class="block text-sm" />
                <div class="mt-2">
                    <div class="flex justify-center">
                        <div class="mb-[0.125rem] mr-4 inline-block min-h-[1.5rem] pl-[1.5rem]">
                            <x-radio wire:model="kewarganegaraan" value="wni_asli" id="kewarganegaraan_1"
                                name="kewarganegaraan">
                                WNI Asli
                            </x-radio>
                        </div>
                        <div class="mb-[0.125rem] mr-4 inline-block min-h-[1.5rem] pl-[1.5rem]">
                            <x-radio wire:model="kewarganegaraan" value="wni_keturunan" id="kewarganegaraan_2"
                                name="kewarganegaraan">
                                WNI Keturunan
                            </x-radio>
                        </div>
                        <div class="mb-[0.125rem] mr-4 inline-block min-h-[1.5rem] pl-[1.5rem]">
                            <x-radio wire:model="kewarganegaraan" value="wna" id="kewarganegaraan_3"
                                name="kewarganegaraan">
                                WNA
                            </x-radio>
                        </div>
                    </div>
                    <x-input-error for="kewarganegaraan" class="mt-2" />
                </div>
            </div>
            <div class="sm:col-span-3">
                <x-input-label for="negara_wna" value="{{ __('Negara WNA (Jika WNA)') }}" class="block text-sm" />
                <div class="mt-2">
                    <x-text-input wire:model="negara_wna" id="negara_wna" name="negara_wna" type="text"
                        class="mt-1 block w-full" />
                    <x-input-error for="negara_wna" class="mt-2" />
                </div>
            </div>
            <div class="sm:col-span-3">
                <x-input-label for="tanggal_lahir" value="{{ __('Tanggal Lahir (Sesuai Ijazah)') }}"
                    class="block text-sm" />
                <div class="mt-2">
                    <x-text-input wire:model="tanggal_lahir" id="tanggal_lahir" name="tanggal_lahir" type="date"
                        class="mt-1 block w-full" placeholder="{{ __('Tanggal Lahir') }}" />
                    <x-input-error for="tanggal_lahir" class="mt-2" />
                </div>
            </div>
            <div class="sm:col-span-3">
                <x-input-label for="tempat_lahir" value="{{ __('Tempat Lahir (Sesuai Ijazah)') }}"
                    class="block text-sm" />
                <div class="mt-2">
                    <x-text-input wire:model="tempat_lahir" id="tempat_lahir" name="tempat_lahir" type="text"
                        class="mt-1 block w-full" placeholder="{{ __('Tempat Lahir') }}" />
                    <x-input-error for="tempat_lahir" class="mt-2" />
                </div>
            </div>
            <div class="sm:col-span-3">
                <x-input-label for="kabupaten_lahir_id" value="{{ __('Kabupaten Kelahiran') }}"
                    class="block text-sm" />
                <div class="mt-2">
                    <select name="kabupaten_lahir_id" id="kabupaten_lahir_id" wire:model="kabupaten_lahir_id"
                        x-init="$($refs.kabupaten_lahir_id).select2({
                            placeholder: '--- Select Values ---',
                            responsive: true,
                        }).on('change', function(e) {
                            value = Array.from(e.target.options).filter(option => option.selected).map(option => option.value);
                        });" x-ref="kabupaten_lahir_id"
                        class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm w-full">
                        <option value="">-- Pilih Kabupaten --</option>
                        @foreach ($kabupatens as $value)
                            <option value="{{ $value->id }}">{{ $value->name }}</option>
                        @endforeach
                    </select>
                    <x-input-error for="kabupaten_lahir_id" class="mt-2" />
                </div>
            </div>
            <div class="sm:col-span-3">
                <x-input-label for="provinsi_lahir_id" value="{{ __('Provinsi Kelahiran') }}"
                    class="block text-sm" />
                <div class="mt-2">
                    <select name="provinsi_lahir_id" id="provinsi_lahir_id" wire:model="provinsi_lahir_id"
                        x-init="$($refs.provinsi_lahir_id).select2({
                            placeholder: '--- Select Values ---',
                            responsive: true,
                        }).on('change', function(e) {
                            value = Array.from(e.target.options).filter(option => option.selected).map(option => option.value);
                        });" x-ref="provinsi_lahir_id"
                        class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm w-full">
                        <option value="">-- Pilih Provinsi --</option>
                        @foreach ($provinsis as $value)
                            <option value="{{ $value->id }}">{{ $value->name }}</option>
                        @endforeach
                    </select>
                    <x-input-error for="provinsi_lahir_id" class="mt-2" />
                </div>
            </div>
            <div class="sm:col-span-3">
                <x-input-label for="negara_lahir"
                    value="{{ __('Negara Kelahiran (Bila Tempat Lahir diluar negeri)') }}" class="block text-sm" />
                <div class="mt-2">
                    <x-text-input wire:model="negara_lahir" id="negara_lahir" name="negara_lahir" type="text"
                        class="mt-1 block w-full" placeholder="{{ __('Negara') }}" />
                    <x-input-error for="negara_lahir" class="mt-2" />
                </div>
            </div>
            <div class="sm:col-span-3">
                <x-input-label for="jenis_kelamin" value="{{ __('Jenis Kelamin') }}" class="block text-sm" />
                <div class="mt-2">
                    <div class="flex justify-center">
                        <div class="mb-[0.125rem] mr-4 inline-block min-h-[1.5rem] pl-[1.5rem]">
                            <x-radio wire:model="jenis_kelamin" value="L" id="jenis_kelamin_l"
                                name="jenis_kelamin">
                                Laki - Laki
                            </x-radio>
                        </div>
                        <div class="mb-[0.125rem] mr-4 inline-block min-h-[1.5rem] pl-[1.5rem]">
                            <x-radio wire:model="jenis_kelamin" value="P" id="jenis_kelamin_p"
                                name="jenis_kelamin">
                                Perempuan
                            </x-radio>
                        </div>
                    </div>
                    <x-input-error for="jenis_kelamin" class="mt-2" />
                </div>
            </div>
            <div class="sm:col-span-3">
                <x-input-label for="status_menikah" value="{{ __('Status Pernikahan') }}" class="block text-sm" />
                <div class="mt-2">
                    <div class="flex justify-center">
                        <div class="mb-[0.125rem] mr-4 inline-block min-h-[1.5rem] pl-[1.5rem]">
                            <x-radio wire:model="status_menikah" value="belum_menikah" id="status_menikah1"
                                name="status_menikah">
                                Belum Menikah
                            </x-radio>
                        </div>
                        <div class="mb-[0.125rem] mr-4 inline-block min-h-[1.5rem] pl-[1.5rem]">
                            <x-radio wire:model="status_menikah" value="menikah" id="status_menikah2"
                                name="status_menikah">
                                Menikah
                            </x-radio>
                        </div>
                        <div class="mb-[0.125rem] mr-4 inline-block min-h-[1.5rem] pl-[1.5rem]">
                            <x-radio wire:model="status_menikah" value="lainnya" id="status_menikah3"
                                name="status_menikah">
                                Lainnya
                            </x-radio>
                        </div>
                    </div>
                    <x-input-error for="status_menikah" class="mt-2" />
                </div>
            </div>
            <div class="sm:col-span-3">
                <x-input-label for="agama" value="{{ __('Agama') }}" class="block text-sm" />
                <div class="mt-2">
                    <div class="flex justify-center">
                        <div class="mb-[0.125rem] mr-4 inline-block min-h-[1.5rem] pl-[1.5rem]">
                            <x-radio wire:model="agama" value="islam" id="agama1" name="agama">
                                Islam
                            </x-radio>
                        </div>
                        <div class="mb-[0.125rem] mr-4 inline-block min-h-[1.5rem] pl-[1.5rem]">
                            <x-radio wire:model="agama" value="katolik" id="agama2" name="agama">
                                Katolik
                            </x-radio>
                        </div>
                        <div class="mb-[0.125rem] mr-4 inline-block min-h-[1.5rem] pl-[1.5rem]">
                            <x-radio wire:model="agama" value="kristen" id="agama3" name="agama">
                                Kristen
                            </x-radio>
                        </div>
                        <div class="mb-[0.125rem] mr-4 inline-block min-h-[1.5rem] pl-[1.5rem]">
                            <x-radio wire:model="agama" value="hindu" id="agama4" name="agama">
                                Hindu
                            </x-radio>
                        </div>
                        <div class="mb-[0.125rem] mr-4 inline-block min-h-[1.5rem] pl-[1.5rem]">
                            <x-radio wire:model="agama" value="budha" id="agama5" name="agama">
                                Budha
                            </x-radio>
                        </div>
                        <div class="mb-[0.125rem] mr-4 inline-block min-h-[1.5rem] pl-[1.5rem]">
                            <x-radio wire:model="agama" value="lainnya" id="agama6" name="agama">
                                Lainnya
                            </x-radio>
                        </div>

                    </div>
                    <x-input-error for="agama" class="mt-2" />
                </div>
            </div>
        </div>
        <div class="mt-6 flex justify-end">
            <x-secondary-button x-on:click="$dispatch('close')">
                {{ __('Cancel') }}
            </x-secondary-button>

            <x-primary-button class="ms-3">
                {{ __('Simpan') }}
            </x-primary-button>
        </div>
    </form>

    @push('styles')
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    @endpush

    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

        <script>
            $(document).ready(function() {
                $('#kabupaten_id').select2();
                $('#provinsi_id').select2();
                $('#kabupaten_lahir_id').select2();
                $('#provinsi_lahir_id').select2();

                $('#kabupaten_id').on('change', function(e) {
                    @this.set('kabupaten_id', e.target.value);
                });

                $('#provinsi_id').on('change', function(e) {
                    @this.set('provinsi_id', e.target.value);
                });

                $('#kabupaten_lahir_id').on('change', function(e) {
                    @this.set('kabupaten_lahir_id', e.target.value);
                });

                $('#provinsi_lahir_id').on('change', function(e) {
                    @this.set('provinsi_lahir_id', e.target.value);
                });
            });
        </script>
    @endpush
</div>
