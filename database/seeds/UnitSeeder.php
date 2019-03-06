<?php

use Illuminate\Database\Seeder;
use App\Unit;

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
            "name"=>"Administration"
        ]);
        Unit::create([
            "name"=>"Engineering"
        ]);
        Unit::create([
            "name"=>"Business"
        ]);
    }
}
