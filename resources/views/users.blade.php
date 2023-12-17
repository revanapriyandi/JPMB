<x-app-layout>
    <x-slot name="header">

        <div class="md:flex md:justify-between px-4 md:p-0">
            <div class="w-full md:mb-0 md:w-2/4 md:flex space-y-4 md:space-y-0 md:space-x-2">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Users
                </h2>
            </div>

            <div class="md:flex md:items-center space-y-4 md:space-y-0 md:space-x-2">
                <div class=" w-full md:w-auto md:mb-0 md:ml-2">
                    <div class="inline-block relative w-full text-left md:w-auto">
                        <div>
                            <span class="rounded-md shadow-sm">
                                <x-primary-button type="button" x-data=""
                                    x-on:click.prevent="$dispatch('open-modal', 'users-modal')">
                                    Add User
                                </x-primary-button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>

    <div class="py-12 pr-3 pl-3">
        <div class=" mx-auto space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <livewire:pages.users.user-table />
            </div>
        </div>
    </div>

    <livewire:pages.users.form-modal />
</x-app-layout>
