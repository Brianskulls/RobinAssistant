<?php

namespace Database\Seeders;

use App\Models\Organisation;
use App\Models\Package;
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
        $proCarer = new Role(['name' => 'professional_carer']);
        $carer = new Role(['name' => 'carer']);
        $organisation = new Role(['name' => 'organisation']);

        $proCarer->save();
        $carer->save();
        $organisation->save();

        //Seed all packages
        $familyPlan = new Package([
            'name' => 'Family plan',
            'slug' => 'family_plan',
            'patient_amount' => 5,
            'price' => 0.00
        ]);
        $familyPlan->save();

        $indivProfBasicPlan = new Package([
            'name' => 'Individual professional plan BASIC',
            'slug' => 'individual_professional_plan_basic',
            'patient_amount' => 50,
            'price' => 50.00
        ]);
        $indivProfBasicPlan->save();

        $indivProfBasicPlusPlan = new Package([
            'name' => 'Individual professional plan BASIC+',
            'slug' => 'individual_professional_plan_basic_plus',
            'patient_amount' => -1,
            'price' => 80.00
        ]);
        $indivProfBasicPlusPlan->save();

        $orgBasicPlan = new Package([
            'name' => 'Organisation plan BASIC',
            'slug' => 'organisation_plan_basic',
            'patient_amount' => -1,
            'user_amount' => 35,
            'price' => 200.00
        ]);
        $orgBasicPlan->save();

        $orgBasicPlusPlan = new Package([
            'name' => 'Organisation plan BASIC+',
            'slug' => 'organisation_plan_basic_plus',
            'patient_amount' => -1,
            'user_amount' => 75,
            'price' => 350.00
        ]);
        $orgBasicPlusPlan->save();

        //Create default user
        $defaultUser = new User([
            'name' => 'Begeleider 1',
            'email' => 'app@robinassistant.loudmouth.nl',
            'password' => Hash::make('test12345')
        ]);

        //Assign the carer role and family plan to default user
        $defaultUser->role()->associate($carer);
        $defaultUser->package()->associate($familyPlan);
        $defaultUser->save();

        $defaultOrganisation = new User([
            'email' => 'org@robinassistant.loudmouth.nl',
            'password' => Hash::make('test12345')
        ]);

        //Assign the organisation role and basic plan to default organisation
        $defaultOrganisation->role()->associate($organisation);
        $defaultOrganisation->package()->associate($orgBasicPlan);
        $defaultOrganisation->save();
    }
}
