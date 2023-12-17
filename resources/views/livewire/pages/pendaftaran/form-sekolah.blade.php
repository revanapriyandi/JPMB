<div>
    <form wire:submit="save">
        <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <div class="sm:col-span-3">
                <x-input-label for="alamat_sekolah" value="{{ __('Alamat Sekolah') }}" class="block text-sm" />
                <div class="mt-2">
                    <x-text-input wire:model="alamat_sekolah" id="alamat_sekolah" name="alamat_sekolah" type="text"
                        class="mt-1 block w-full" placeholder="{{ __('Alamat Sekolah') }}" />
                    <x-input-error for="alamat_sekolah" class="mt-2" />
                </div>
            </div>
            <div class="sm:col-span-3">
                <x-input-label for="asal_sekolah" value="{{ __('Asal Sekolah') }}" class="block text-sm" />
                <div class="mt-2">
                    <x-text-input wire:model="asal_sekolah" id="asal_sekolah" name="asal_sekolah" type="text"
                        class="mt-1 block w-full" placeholder="{{ __('Asal Sekolah') }}" />
                    <x-input-error for="asal_sekolah" class="mt-2" />
                </div>
            </div>
            <div class="sm:col-span-3">
                <x-input-label for="jurusan" value="{{ __('Jurusan') }}" class="block text-sm" />
                <div class="mt-2">
                    <x-text-input wire:model="jurusan" id="jurusan" name="jurusan" type="text"
                        class="mt-1 block w-full" placeholder="{{ __('Jurusan') }}" />
                    <x-input-error for="jurusan" class="mt-2" />
                </div>
            </div>
            <div class="sm:col-span-3">
                <x-input-label for="tahun_lulus" value="{{ __('Tahun Lulus') }}" class="block text-sm" />
                <div class="mt-2">
                    <x-text-input wire:model="tahun_lulus" id="tahun_lulus" name="tahun_lulus" type="number"
                        class="mt-1 block w-full" placeholder="{{ __('2017') }}" />
                    <x-input-error for="tahun_lulus" class="mt-2" />
                </div>
            </div>
            <div class="sm:col-span-3">
                <x-input-label for="nilai_raport" value="{{ __('Rata Rata Raport') }}" class="block text-sm" />
                <div class="mt-2">
                    <x-text-input wire:model="nilai_raport" id="nilai_raport" name="nilai_raport" type="number"
                        class="mt-1 block w-full" placeholder="{{ __('Rata Rata Raport') }}" />
                    <x-input-error for="nilai_raport" class="mt-2" />
                </div>
            </div>
            <div class="sm:col-span-3">
                <x-input-label for="nilai_un" value="{{ __('Nilai Ujian Nasional') }}" class="block text-sm" />
                <div class="mt-2">
                    <x-text-input wire:model="nilai_un" id="nilai_un" name="nilai_un" type="number"
                        class="mt-1 block w-full" placeholder="{{ __('Nilan UN') }}" />
                    <x-input-error for="nilai_un" class="mt-2" />
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
</div>
