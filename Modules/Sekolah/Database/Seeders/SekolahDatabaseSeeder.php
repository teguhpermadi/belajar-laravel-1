<?php

namespace Modules\Sekolah\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Sekolah\Entities\Sekolah;

class SekolahDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Model::unguard();
        Sekolah::factory(1)->create();
        // $this->call("OthersTableSeeder");
    }
}
