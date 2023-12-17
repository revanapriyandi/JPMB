<div>
    <form wire:submit="save">
        <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <div class="sm:col-span-3">
                <x-input-label for="nama_ibukandung" value="{{ __('Nama Ibu Kandung') }}" class="block text-sm" />
                <div class="mt-2">
                    <x-text-input wire:model="nama_ibukandung" id="nama_ibukandung" name="nama_ibukandung" type="text"
                        class="mt-1 block w-full" placeholder="{{ __('Nama Ibu Kandung') }}" />
                    <x-input-error for="nama_ibukandung" class="mt-2" />
                </div>
            </div>
            <div class="sm:col-span-3">
                <x-input-label for="nama_ayahkandung" value="{{ __('Nama Ayah Kandung') }}" class="block text-sm" />
                <div class="mt-2">
                    <x-text-input wire:model="nama_ayahkandung" id="nama_ayahkandung" name="nama_ayahkandung"
                        type="text" class="mt-1 block w-full" placeholder="{{ __('Nama Ayah Kandung') }}" />
                    <x-input-error for="nama_ayahkandung" class="mt-2" />
                </div>
            </div>
            <div class="sm:col-span-3">
                <x-input-label for="pekerjaan_ibukandung" value="{{ __('Pekerjaan Ibu') }}" class="block text-sm" />
                <div class="mt-2">
                    <x-text-input wire:model="pekerjaan_ibukandung" id="pekerjaan_ibukandung"
                        name="pekerjaan_ibukandung" type="text" class="mt-1 block w-full"
                        placeholder="{{ __('Pekerjaan Ibu') }}" />
                    <x-input-error for="pekerjaan_ibukandung" class="mt-2" />
                </div>
            </div>
            <div class="sm:col-span-3">
                <x-input-label for="pekerjaan_ayahkandung" value="{{ __('Pekerjaan Ayah') }}" class="block text-sm" />
                <div class="mt-2">
                    <x-text-input wire:model="pekerjaan_ayahkandung" id="pekerjaan_ayahkandung"
                        name="pekerjaan_ayahkandung" type="text" class="mt-1 block w-full"
                        placeholder="{{ __('Pekerjaan Ayah') }}" />
                    <x-input-error for="pekerjaan_ayahkandung" class="mt-2" />
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
