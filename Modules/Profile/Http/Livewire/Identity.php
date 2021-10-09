<?php

namespace Modules\Profile\Http\Livewire;

use Livewire\Component;

class Identity extends Component
{
    public $user;

    public function mount()
    {

    }
    
    public function render()
    {
        return view('profile::livewire.identity');
    }
}
