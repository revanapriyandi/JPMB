<div>
    <div class="bg-yellow-500 text-sm text-white rounded-lg p-4" role="alert">
        <span class="font-bold">Perhatian</span>
        <span class="block sm:inline">Pastikan data yang anda masukkan sudah benar, karena data yang sudah disimpan tidak
            dapat diubah.</span>
        Anda dapat memasukkan 3 pilihan jurusan yang anda inginkan.
    </div>
    <form wire:submit="save" class="mt-3">
        <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <div class="sm:col-span-3">
                <x-input-label for="jurusan_pilihan1" value="{{ __('Pilihan Jurusan 1') }}" class="block text-sm" />
                <div class="mt-2">
                    <x-text-input wire:model="jurusan_pilihan1" id="jurusan_pilihan1" name="jurusan_pilihan1"
                        type="text" class="mt-1 block w-full" placeholder="{{ __('Pilihan Jurusan 1') }}" />
                    <x-input-error for="jurusan_pilihan1" class="mt-2" />
                </div>
            </div>
            <div class="sm:col-span-3">
                <x-input-label for="jurusan_pilihan2" value="{{ __('Pilihan Jurusan 2') }}" class="block text-sm" />
                <div class="mt-2">
                    <x-text-input wire:model="jurusan_pilihan2" id="jurusan_pilihan2" name="jurusan_pilihan2"
                        type="text" class="mt-1 block w-full" placeholder="{{ __('Pilihan Jurusan 2') }}" />
                    <x-input-error for="jurusan_pilihan2" class="mt-2" />
                </div>
            </div>
            <div class="sm:col-span-3">
                <x-input-label for="jurusan_pilihan3" value="{{ __('Pilihan Jurusan 3') }}" class="block text-sm" />
                <div class="mt-2">
                    <x-text-input wire:model="jurusan_pilihan3" id="jurusan_pilihan3" name="jurusan_pilihan3"
                        type="text" class="mt-1 block w-full" placeholder="{{ __('Pilihan Jurusan 3') }}" />
                    <x-input-error for="jurusan_pilihan3" class="mt-2" />
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
