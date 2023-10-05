<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Database\Query\Builder;
use Livewire\Component;
use Livewire\WithPagination;

use function PHPUnit\Framework\isEmpty;

class AdminUser extends Component
{
    use WithPagination;

    public string $email = '';
    public string $name = '';

    public function render()
    {
        $users = User::where(function ($query) {
            if (!empty($this->name)) {
                $query->where('name', 'LIKE', '%' . $this->name . '%');
            }
            if (!empty($this->email)) {
                $query->where('email', 'LIKE', '%' . $this->email . '%');
            }
        })->paginate();
        return view('livewire.admin-user', compact('users'));
    }

    public function buscar()
    {
        $this->resetPage();
    }
}
