<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        //Seed all roles and permissions
        $viewSecondaryCarers = new Permission(['name'=>'view_secondary_carers']);

        // \App\Models\User::factory(10)->create();
    }
}
