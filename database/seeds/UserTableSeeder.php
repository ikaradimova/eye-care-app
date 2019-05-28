<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_regular_user = Role::where('name', 'User')->first();
        $role_medical_user = Role::where('name', 'Medical user')->first();
        $role_admin = Role::where('name', 'Admin')->first();

        $user = new User();
        $user->name = 'RegUser';
        $user->email = 'regUser@example.com';
        $user->password = bcrypt('RegUser');
        $user->save();
        $user->roles()->attach($role_regular_user);

        $admin = new User();
        $admin->name = 'Admin';
        $admin->email = 'admin@example.com';
        $admin->password = bcrypt('admin');
        $admin->save();
        $admin->roles()->attach($role_admin);

        $medicalUser = new User();
        $medicalUser->name = 'MedicalUser';
        $medicalUser->email = 'medicalUser@example.com';
        $medicalUser->password = bcrypt('medicalUser');
        $medicalUser->save();
        $medicalUser->roles()->attach($role_medical_user);
    }
}
