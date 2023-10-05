<?php

namespace App\Livewire;

use App\Models\Team;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class CreateUser extends Component
{
    public string $name;
    public string $email;
    public string $password;
    public string $password_confirmation;

    protected $rules = [
        'name' => 'required|string',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|confirmed',
    ];

    public function render()
    {
        return view('livewire.create-user');
    }

    public function registrar()
    {
        $this->validate();

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password)
        ]);

        $user->ownedTeams()->save(Team::forceCreate([
            'user_id' => $user->id,
            'name' => explode(' ', $user->name, 2)[0] . "'s Team",
            'personal_team' => true,
        ]));

        return redirect()->to(route('users.index'));
    }
}
