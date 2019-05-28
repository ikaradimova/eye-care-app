<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_regular_user = new Role();
        $role_regular_user->name = 'User';
        $role_regular_user->save();

        $role_medical_user = new Role();
        $role_medical_user->name = 'Medical user';
        $role_medical_user->save();

        $role_admin = new Role();
        $role_admin->name = 'Admin';
        $role_admin->save();

    }
}
