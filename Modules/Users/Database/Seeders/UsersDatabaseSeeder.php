<?php

namespace Modules\Users\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Profile\Entities\ProfilUser;
use Modules\Users\Entities\Users;

class UsersDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Model::unguard();
        Users::factory(5)->create();
        // $this->call("OthersTableSeeder");
    }
}
