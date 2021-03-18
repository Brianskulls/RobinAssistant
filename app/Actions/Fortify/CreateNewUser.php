<?php

namespace App\Actions\Fortify;

use App\Models\Package;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Fortify\Rules\Password;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', new Password],
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        $user = new User([
            'first_name' => $input['first_name'],
            'last_name' => $input['first_name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password'])
        ]);

        //TODO input validation of package
        $package = Package::where('slug',$input['package'])->first();

        //TODO role based on package
        $role = Role::where('name','carer')->first();

        $user->package()->associate($package);
        $user->role()->associate($role);
        $user->save();

        return $user;
    }
}
