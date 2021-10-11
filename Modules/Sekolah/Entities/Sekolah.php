<?php

namespace Modules\Sekolah\Entities;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sekolah extends Model
{
	use Uuids;
    use HasFactory;

    protected $guarded = [];
    
    protected static function newFactory()
    {
        return \Modules\Sekolah\Database\factories\SekolahFactory::new();
    }

}
