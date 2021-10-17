<?php

namespace Modules\Profile\Entities;

use App\Models\User;
use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProfilUser extends Model
{
    use Uuids;
    use HasFactory;
    
    public $table = "profil-user";
    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'nik',
        'jenis_kelamin',
        'alamat',
        'tempat_lahir',
        'tanggal_lahir',
        'provinsi',
        'distrik',
        'kecamatan',
        'kelurahan',
        'kodepos',
        'lokasi'
    ];
    
    protected static function newFactory()
    {
        return \Modules\Profile\Database\factories\ProfilUserFactory::new();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}