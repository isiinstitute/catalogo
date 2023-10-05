<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class AdminUser extends Component
{
    use WithPagination;

    public string $email;
    public string $name;

    public function render()
    {
        $users = User::paginate(1);
        return view('livewire.admin-user', compact('users'));
    }

    public function buscar()
    {
    }
}
