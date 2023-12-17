 <x-modal name="users-modal" :show="$errors->isNotEmpty()" focusable>
     <form wire:submit="save" class="p-6">

         <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
             @if ($editMode)
                 {{ __('Edit User') }}
             @else
                 {{ __('Add User') }}
             @endif
         </h2>

         <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
             {{ __('Please enter the user information and press save or cancel.') }}
         </p>

         <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
             <div class="sm:col-span-3">
                 <x-input-label for="name" value="{{ __('Nama Lengkap') }}" class="block text-sm" />
                 <div class="mt-2">
                     <x-text-input wire:model="name" id="name" name="name" type="text"
                         class="mt-1 block w-full" placeholder="{{ __('Nama Lengkap') }}" />
                     <x-input-error for="name" class="mt-2" />
                 </div>
             </div>

             <div class="sm:col-span-3">
                 <x-input-label for="username" value="{{ __('Username') }}" class="block text-sm" />
                 <div class="mt-2">
                     <x-text-input wire:model="username" id="username" name="username" type="text"
                         class="mt-1 block w-full" placeholder="{{ __('Username') }}" />
                     <x-input-error for="username" class="mt-2" />
                 </div>
             </div>

             <div class="sm:col-span-3">
                 <x-input-label for="email" value="{{ __('Email Address') }}" class="block text-sm" />
                 <div class="mt-2">
                     <x-text-input wire:model="email" id="email" name="email" type="email"
                         class="mt-1 block w-full" placeholder="{{ __('Email') }}" />
                     <x-input-error for="email" class="mt-2" />
                 </div>
             </div>

             <div class="sm:col-span-3">
                 <x-input-label for="isAdmin" value="{{ __('Is Admin') }}" class="block text-sm" />
                 <div class="mt-2">
                     <select id="isAdmin" name="isAdmin" autocomplete="isAdmin" wire:model="isAdmin"
                         class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                         <option value="0">No</option>
                         <option value="1">Yes</option>
                     </select>
                     <x-input-error for="isAdmin" class="mt-2" />
                 </div>
             </div>

             <div class="sm:col-span-3">
                 <x-input-label for="password" value="{{ __('Password') }}" class="block text-sm" />
                 <div class="mt-2">
                     <x-text-input wire:model="password" id="password" name="password" type="password"
                         class="mt-1 block w-full" placeholder="{{ __('Password') }}" />
                     <x-input-error for="password" class="mt-2" />
                 </div>
             </div>

             <div class="sm:col-span-3">
                 <x-input-label for="password_confirmation" value="{{ __('Confirm Password') }}"
                     class="block text-sm" />
                 <div class="mt-2">
                     <x-text-input wire:model="password_confirmation" id="password_confirmation"
                         name="password_confirmation" type="password" class="mt-1 block w-full"
                         placeholder="{{ __('Confirm Password') }}" />
                     <x-input-error for="password" class="mt-2" />
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
 </x-modal>
