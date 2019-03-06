<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin_role = new Role([
            "name" => "Admin",
            "permissions" => "Full Control"
        ]);
        $admin_role->save();
        Role::create([
            "name" => "Unit Lead",
            "permissions" => "Control Team OKR's"
        ]);
        Role::create([
            "name" => "HR",
            "permissions" => "Approve Personal Goals"
        ]);
        Role::create([
           "name" => "employee",
            "permissions" => "Create IPM and tasks"
        ]);
        $user = new User([
            "surname"=>"Admin",
            "firstname"=>"Chief",
            "password"=>"asdfghjk",
            "gender"=>"default",
            "job_title"=>"Master",
            "email"=>"chief@dreamlabs.com.ng",
            "phone"=>"+2348080808080",
        ]);
        $user->save();
        $user->role()->associate($admin_role);
    }
}
