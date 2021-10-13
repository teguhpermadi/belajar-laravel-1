<?php

namespace Modules\Profile\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Modules\Profile\Rules\MatchOldPassword;

class Password extends Component
{
    public $old, $new, $confirm;

    public function render()
    {
        return view('profile::livewire.password');
    }

    public function update()
    {
        $this->validate([
            'old' => ['required', new MatchOldPassword],
            'new' => ['required'],
            'confirm' => ['same:new'],
        ]);

        User::find(auth()->user()->id)->update(['password'=> Hash::make($this->new)]);
        $this->old=null;
        $this->new=null;
        $this->confirm=null;
    }
}
