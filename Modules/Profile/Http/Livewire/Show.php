<?php

namespace Modules\Profile\Http\Livewire;

use Livewire\Component;

class Show extends Component
{
    public $user;

    public function mount($user = null)
    {
        $this->user = $user;
    }

    public function render()
    {
        return view('profile::livewire.show');
    }
}
