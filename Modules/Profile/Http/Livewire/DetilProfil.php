<?php

namespace Modules\Profile\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class DetilProfil extends Component
{
    public $nik, $jenis_kelamin, $alamat, $tempat_lahir, $tanggal_lahir, $provinsi, $distrik, $kecamatan, $kelurahan, $kodepos, $lokasi;

    public function mount($id)
    {
        $user = User::findOrFail($id);
        $profil = $user->profilUser;
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
    }

    public function render()
    {
        return view('profile::livewire.detil-profil');
    }
}
