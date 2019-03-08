<?php

use Illuminate\Database\Seeder;
use App\Unit;
use App\Constants;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Unit::create([
            "id" => Constants::administration_unit_id,
            "name"=>"Administration"
        ]);
        Unit::create([
            "id" => Constants::engineering_unit_id,
            "name"=>"Engineering"
        ]);
        Unit::create([
            "id" => Constants::business_unit_id,
            "name"=>"Business"
        ]);
    }
}
