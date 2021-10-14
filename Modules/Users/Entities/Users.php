<?php

namespace Modules\Users\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Traits\Uuids;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Modules\Profile\Entities\ProfilUser;

class Users extends Model
{
    use Uuids;
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'users';

    protected static function newFactory()
    {
        return \Modules\Users\Database\factories\UsersFactory::new();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'username',
        'avatar',
        'phone',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function profilUser()
    {
        return $this->hasOne(ProfilUser::class);
    }
}
