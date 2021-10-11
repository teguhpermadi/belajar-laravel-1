<?php

namespace Modules\Profile\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class Avatar extends Component
{
    use WithFileUploads;
    public $user, $foo;

    public function mount($user){
        $this->user = $user;
    }

    public function render()
    {
        return view('profile::livewire.avatar');
    }

    public function upload()
    {
        $foo = $this->file->store('avatar');
        $this->foo = $foo;
    }

}
