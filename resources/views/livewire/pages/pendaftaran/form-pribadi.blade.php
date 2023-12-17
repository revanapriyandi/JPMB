<div>
    <form wire:submit="save">
        <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <div class="sm:col-span-3">
                <x-input-label for="nik" value="{{ __('NIK') }}" class="block text-sm" />
                <div class="mt-2">
                    <x-text-input wire:model="nik" id="nik" name="nik" type="number" class="mt-1 block w-full"
                        placeholder="{{ __('NIK') }}" />
                    <x-input-error for="nik" class="mt-2" />
                </div>
            </div>
            <div class="sm:col-span-3">
                <x-input-label for="nisn" value="{{ __('NISN') }}" class="block text-sm" />
                <div class="mt-2">
                    <x-text-input wire:model="nisn" id="nisn" name="nisn" type="number"
                        class="mt-1 block w-full" placeholder="{{ __('NISN') }}" />
                    <x-input-error for="nisn" class="mt-2" />
                </div>
            </div>
            <div class="sm:col-span-3">
                <x-input-label for="nama" value="{{ __('Nama Lengkap') }}" class="block text-sm" />
                <div class="mt-2">
                    <x-text-input wire:model="nama" id="nama" name="nama" type="text"
                        class="mt-1 block w-full" placeholder="{{ __('Nama Lengkap') }}" />
                    <x-input-error for="nama" class="mt-2" />
                </div>
            </div>
            <div class="sm:col-span-3">
                <x-input-label for="email" value="{{ __('Email Address') }}" class="block text-sm" />
                <div class="mt-2">
                    <x-text-input wire:model="email" id="email" name="email" type="email"
                        class="mt-1 block w-full" placeholder="{{ __('Email Address') }}" />
                    <x-input-error for="email" class="mt-2" />
                </div>
            </div>
            <div class="sm:col-span-3">
                <x-input-label for="phone_number" value="{{ __('Phone Number / WA') }}" class="block text-sm" />
                <div class="mt-2">
                    <x-text-input wire:model="phone_number" id="phone_number" name="phone_number" type="text"
                        class="mt-1 block w-full" placeholder="{{ __('62xx') }}" />
                    <x-input-error for="phone_number" class="mt-2" />
                </div>
            </div>
            <div class="sm:col-span-3">
                <x-input-label for="tanggal_lahir" value="{{ __('Tanggal Lahir') }}" class="block text-sm" />
                <div class="mt-2">
                    <x-text-input wire:model="tanggal_lahir" id="tanggal_lahir" name="tanggal_lahir" type="date"
                        class="mt-1 block w-full" />
                    <x-input-error for="tanggal_lahir" class="mt-2" />
                </div>
            </div>
            <div class="sm:col-span-3">
                <x-input-label for="tempat_lahir" value="{{ __('Tempat Lahir') }}" class="block text-sm" />
                <div class="mt-2">
                    <x-text-input wire:model="tempat_lahir" id="tempat_lahir" name="tempat_lahir" type="text"
                        class="mt-1 block w-full" placeholder="{{ __('Tempat Lahir') }}" />
                    <x-input-error for="tempat_lahir" class="mt-2" />
                </div>
            </div>
            <div class="sm:col-span-3">
                <x-input-label for="jenis_kelamin" value="{{ __('Jenis Kelamin') }}" class="block text-sm" />
                <div class="mt-2">
                    <select name="jenis_kelamin" id="jenis_kelamin" wire:model="jenis_kelamin"
                        class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm w-full">
                        <option value="">-- Pilih Jenis Kelamin --</option>
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                    <x-input-error for="jenis_kelamin" class="mt-2" />
                </div>
            </div>
            <div class="sm:col-span-6">
                <x-input-label for="alamat" value="{{ __('Alamat') }}" class="block text-sm" />
                <div class="mt-2">
                    <textarea name="alamat" id="alamat" wire:model="alamat" rows="3"
                        class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
                        autocomplete="none"></textarea>
                    <x-input-error for="alamat" class="mt-2" />
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
