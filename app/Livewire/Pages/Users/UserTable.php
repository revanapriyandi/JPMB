<?php

namespace App\Livewire\Pages\Users;

use App\Models\User;
use Livewire\Attributes\On;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\DataTableComponent;

class UserTable extends DataTableComponent
{
    protected $model = User::class;
    public array $users = [];

    public $columnSearch = [
        'name' => null,
        'username' => null,
        'email' => null,
    ];

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable()
                ->isHidden(),
            Column::make("Name", "name")
                ->sortable()
                ->searchable(),
            Column::make("Username", "username")
                ->sortable()
                ->searchable(),
            Column::make("Email", "email")
                ->sortable()
                ->searchable(),
            Column::make("Is admin", "is_admin")
                ->sortable()
                ->format(function ($value) {
                    return $value ? "Yes" : "No";
                }),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Actions", "id")
                ->format(function ($value) {
                    return view("components.datatables-dropdown", ["id" => $value]);
                })
        ];
    }

    #[On('confirmDelete')]
    public function confirmDelete($id)
    {
        $this->js(
            "confirm('Are you sure you want to delete this user?') || event.stopImmediatePropagation()"
        );
        $user = User::findOrFail($id);
        $user->delete();
    }
}
