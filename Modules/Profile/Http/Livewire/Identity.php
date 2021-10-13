<?php

namespace Modules\Profile\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Identity extends Component
{
    public $user, $name, $username, $email, $phone;

    protected $rules = [
        'name' => 'required',
        'username' => 'required|min:6',
        'email' => 'required|email',
        'phone' => 'required|numeric',
    ];

    public function mount($id)
    {
        $this->user = User::findOrFail($id);
        $this->name = $this->user->name;
        $this->username = $this->user->username;
        $this->email = $this->user->email;
        $this->phone = $this->user->phone;

    }
    
    public function render()
    {
        return view('profile::livewire.identity');
    }

    public function update()
    {
        $this->validate();
        $data = [
            'name' => $this->name,
            'username' => $this->username,
            'email' => $this->email,
            'phone' => $this->phone
        ];
        // dd($data);
        User::findOrFail($this->user->id)->update($data);
    }
}
