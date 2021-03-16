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
        //Seed all roles
        $proCarer     = new Role(['name'=>'professional_carer']);
        $carer        = new Role(['name'=>'carer']);
        $organisation = new Role(['name'=>'organisation']);

        $proCarer->save();
        $carer->save();
        $organisation->save();

        //Create default user
        $defaultUser = new User([
            'name'=>'Begeleider 1',
            'email'=>'app@robinassistant.loudmouth.nl',
            'password'=>Hash::make('test12345')
        ]);

        //Assign the carer role to default user
        $defaultUser->role()->associate($carer);
        $defaultUser->save();
    }
}
