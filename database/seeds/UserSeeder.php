<?php

use App\Constants;
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
            "id" => 1,
            "name" => "Admin",
            "permissions" => "Full Control"
        ]);
        $admin_role->save();
        Role::create([
            "id" => 2,
            "name" => "Unit Lead",
            "permissions" => "Control Team OKR's"
        ]);
        Role::create([
            "id" => 3,
            "name" => "HR",
            "permissions" => "Approve Personal Goals"
        ]);
        Role::create([
            "id" => 4,
            "name" => "employee",
            "permissions" => "Create IPM and tasks"
        ]);
        $user = new User([
            "id" => Constants::default_admin_id,
            "surname"=>"Admin",
            "firstname"=>"Chief",
            "password"=> bcrypt("asdfghjk"),
            "gender"=>"default",
            "job_title"=>"Master",
            "unit_id"=>Constants::administration_unit_id,
            "email"=>"chief@dreamlabs.com.ng",
            "phone"=>"+2348080808080",
        ]);
        $user->role()->associate($admin_role);
        $user->save();
    }
}
