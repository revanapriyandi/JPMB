<!-- Stepper -->
<div>

    <h1 class="text-2xl font-semibold text-gray-800 dark:text-white text-center ">Form Pendaftaran</h1>
    <ul class="relative flex flex-row gap-x-2 max-w-xl mx-auto mt-4 pt-3">
        <li class="flex items-center gap-x-2 shrink basis-0 flex-1 group">
            <button class="text-dark" wire:click="setIndex(0)">
                <div class="min-w-[28px] min-h-[28px] inline-flex justify-center items-center text-xs align-middle">
                    <span
                        class="w-7 h-7 flex justify-center items-center flex-shrink-0 bg-gray-800 font-medium text-white rounded-full dark:bg-white dark:text-gray-800">
                        1
                    </span>
                    <span class="ms-2 block text-sm font-medium text-gray-800 dark:text-white">
                        Data Pribadi
                    </span>
                </div>
            </button>
            <div class="w-full h-px flex-1 bg-gray-200 group-last:hidden dark:bg-gray-700"></div>
        </li>

        <li class="flex items-center gap-x-2 shrink basis-0 flex-1 group">
            <button class="text-dark" wire:click="setIndex(1)">
                <div class="min-w-[28px] min-h-[28px] inline-flex justify-center items-center text-xs align-middle">
                    <span
                        class="w-7 h-7 flex justify-center items-center flex-shrink-0 bg-gray-800 font-medium text-white rounded-full dark:bg-white dark:text-gray-800">
                        2
                    </span>
                    <span class="ms-2 block text-sm font-medium text-gray-800 dark:text-white">
                        Data Orang Tua
                    </span>
                </div>
            </button>
            <div class="w-full h-px flex-1 bg-gray-200 group-last:hidden dark:bg-gray-700"></div>
        </li>

        <li class="flex items-center gap-x-2 shrink basis-0 flex-1 group">
            <button class="text-dark" wire:click="setIndex(2)">
                <div class="min-w-[28px] min-h-[28px] inline-flex justify-center items-center text-xs align-middle">
                    <span
                        class="w-7 h-7 flex justify-center items-center flex-shrink-0 bg-gray-800 font-medium text-white rounded-full dark:bg-white dark:text-gray-800">
                        3
                    </span>
                    <span class="ms-2 block text-sm font-medium text-gray-800 dark:text-white">
                        Data Sekolah
                    </span>
                </div>
            </button>
            <div class="w-full h-px flex-1 bg-gray-200 group-last:hidden dark:bg-gray-700"></div>
        </li>
        <li class="flex items-center gap-x-2 shrink basis-0 flex-1 group">
            <button class="text-dark" wire:click="setIndex(3)">
                <div class="min-w-[28px] min-h-[28px] inline-flex justify-center items-center text-xs align-middle">
                    <span
                        class="w-7 h-7 flex justify-center items-center flex-shrink-0 bg-gray-800 font-medium text-white rounded-full dark:bg-white dark:text-gray-800">
                        4
                    </span>
                    <span class="ms-2 block text-sm font-medium text-gray-800 dark:text-white">
                        Pilihan Jurusan
                    </span>
                </div>
            </button>
            <div class="w-full h-px flex-1 bg-gray-200 group-last:hidden dark:bg-gray-700"></div>
        </li>
    </ul>
    <!-- End Stepper -->

    <div class="mt-5 sm:mt-8">
        <!-- First Content -->
        <div style="{{ $index == 0 ? '' : 'display: none;' }}">
            <div class="p-4">
                <livewire:pages.pendaftaran.form-pribadi />
            </div>
        </div>
        <!-- End First Content -->

        <!-- Second Content -->
        <div style="{{ $index == 1 ? '' : 'display: none;' }}">
            <div class="p-4 ">
                <livewire:pages.pendaftaran.form-orang-tua />
            </div>
        </div>
        <!-- End Second Content -->

        <!-- Third Content -->
        <div style="{{ $index == 2 ? '' : 'display: none;' }}">
            <div class="p-4 ">
                <livewire:pages.pendaftaran.form-sekolah />
            </div>
        </div>

        <div style="{{ $index == 3 ? '' : 'display: none;' }}">
            <div class="p-4 ">
                <livewire:pages.pendaftaran.form-jurusan />
            </div>
        </div>

        <div class="mt-5 flex justify-between items-center gap-x-2">
            <button type="button"
                class="py-2 px-3 inline-flex items-center gap-x-1 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                wire:click="PrevIndex()" {{ $index == 0 ? 'disabled' : '' }}>
                <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="m15 18-6-6 6-6" />
                </svg>
                Back
            </button>
            @if ($index != $lastIndex)
                <button type="button"
                    class="py-2 px-3 inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent bg-gray-700 text-white hover:bg-gray-800 disabled:opacity-50 disabled:pointer-events-none"
                    wire:click="NextIndex()">
                    <span>Next</span>
                    <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6" />
                    </svg>
                </button>
            @endif

        </div>
    </div>

</div>
