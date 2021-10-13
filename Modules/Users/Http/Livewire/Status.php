<?php

namespace Modules\Users\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Status extends Component
{
    public $user;

    public function mount($id)
    {
        $user = User::findOrFail($id);
        $this->user = $user;
    }

    public function render()
    {
        return view('users::livewire.status');
    }

    public function change($id, $status)
    {
        $user = User::findOrFail($id);
        $user->status = $status;
        $user->save();
        // User::findOrFail($id)->update([
        //     'status' => $status
        // ]);
    }
}
