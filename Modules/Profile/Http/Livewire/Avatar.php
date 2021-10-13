<?php

namespace Modules\Profile\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Avatar extends Component
{
    use WithFileUploads;
    public $user, $avatar, $iteration, $avatarold;

    public function mount($id)
    {
        $this->user = User::findOrFail($id);
        $this->avatarold = $this->user->avatar;
    }

    public function render()
    {
        return view('profile::livewire.avatar');
    }

    public function upload()
    {
        $this->validate([
            'avatar' => 'image|mimes:png,jpg,jpeg',
        ]);

        dd($this->avatarold);
        Storage::delete([$this->avatarold]);
 
        $path = $this->avatar->store('avatar', 'public');
        User::findOrFail($this->user->id)->update(['avatar' => $path]);
        $this->avatar=null;
        $this->iteration++;
    }

}
