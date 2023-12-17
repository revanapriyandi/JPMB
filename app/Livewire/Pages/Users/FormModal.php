<?php

namespace App\Livewire\Pages\Users;

use App\Models\User;
use Exception;
use Livewire\Attributes\On;
use Livewire\Component;

class FormModal extends Component
{
    public $editMode = false;

    public $id;
    public $name = '';
    public $username = '';
    public $email = '';
    public $password = '';
    public $password_confirmation = '';
    public $isAdmin = false;

    public function rules()
    {
        return [
            'name' => ['required', 'min:3', 'max:255'],
            'username' => ['required', 'min:3', 'max:255', 'unique:users,username,'  . ($this->editMode ? $this->id : '')],
            'email' => ['required', 'email', 'min:3', 'max:255', 'unique:users,email,'  . ($this->editMode ? $this->id : ''), 'regex:/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/'],
            'password' => $this->editMode ? ['nullable'] : ['required', 'min:6', 'max:255', 'confirmed'],
            'isAdmin' => ['required', 'boolean'],
        ];
    }

    public function updated()
    {
        $this->validate();
    }

    #[On('editUser')]
    public function edit($id)
    {
        $this->editMode = true;

        $user = User::find($id);

        $this->id = $user->id;
        $this->name = $user->name;
        $this->username = $user->username;
        $this->email = $user->email;
        $this->isAdmin = $user->is_admin;
    }

    public function save()
    {
        $this->validate();
        try {

            $data = [
                'name' => $this->name,
                'username' => $this->username,
                'email' => $this->email,
                'is_admin' => $this->isAdmin,
            ];

            if ($this->editMode) {
                if ($this->password) {
                    $data['password'] = bcrypt($this->password);
                }

                $user = User::find($this->id);
                $user->update($data);

                $this->dispatch('saved', 'success', 'User updated successfully.');
            } else {
                $data['password'] = bcrypt($this->password);

                User::create($data);

                $this->dispatch('saved', 'success', 'User created successfully.');
            }

            $this->reset();
            $this->dispatch('close');
        } catch (Exception $e) {
            $this->dispatch('saved', 'error', 'Error saving user. Error: ' . $e->getMessage());
        }
    }


    public function render()
    {
        return view('livewire.pages.users.form-modal');
    }
}
