<?php

namespace Modules\Profile\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Modules\Profile\Entities\ProfilUser;

class DetilProfil extends Component
{
    public $nik, $jenis_kelamin, $alamat, $tempat_lahir, $tanggal_lahir, $provinsi, $distrik, $kecamatan, $kelurahan, $kodepos, $lokasi, $profil, $id_;

    public function mount($id)
    {
        $user = User::findOrFail($id);
        $this->id_ = $id;
        if($user)
        {
            $profil = $user->profilUser;
            $this->profil = $profil;
            if($profil)
            {
                $this->nik = $profil->nik;
                $this->jenis_kelamin = $profil->jenis_kelamin;
                $this->alamat = $profil->alamat;
                $this->tempat_lahir = $profil->tempat_lahir;
                $this->tanggal_lahir = $profil->tanggal_lahir;
                $this->provinsi = $profil->provinsi;
                $this->distrik = $profil->distrik;
                $this->kecamatan = $profil->kecamatan;
                $this->kelurahan = $profil->kelurahan;
                $this->kodepos = $profil->kodepos;
                $this->lokasi = $profil->lokasi;
            }
        } else {
            $this->profil = null;
        }
    }

    protected $rules = [
        'nik' => 'numeric|digits:16',
    ];

    public function render()
    {
        return view('profile::livewire.detil-profil');
    }

    

    public function update()
    {
        $this->validate();

        $data = [
            'nik' => $this->nik,
            'jenis_kelamin' => $this->jenis_kelamin,
            'alamat' => $this->alamat,
            'tempat_lahir' => $this->tempat_lahir,
            'tanggal_lahir' => $this->tanggal_lahir,
            'provinsi' => $this->provinsi,
            'distrik' => $this->distrik,
            'kecamatan' => $this->kecamatan,
            'kelurahan' => $this->kelurahan,
            'kodepos' => $this->kodepos,
            'lokasi' => $this->lokasi,
        ];
        dd($data);
        $user = new User();

        $user->profilUser()->getRelated()->updateOrCreate(['user_id' => Auth::id()],$data);
    }
}
