<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\USer;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $role_admin = Role::where('name' , 'admin')->first();
        $role_user = Role::where('name' , 'user')->first();

        $user = new User();
        $user->name = "Admin";
        $user->email = "angogi@angogi.com";
        $user->phone = "691847043";
        $user->password = bcrypt('nave1234');
        $user->save();
        $user->roles()->attach($role_admin);

        $user = new User();
        $user->name = "User";
        $user->email = "user@example.com";
        $user->phone = "691000000";
        $user->password = bcrypt('qwerty');
        $user->save();
        $user->roles()->attach($role_user);
    }
}
