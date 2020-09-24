<?php

use App\HRM\Personale;
use Illuminate\Database\Seeder;

class PersonaleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Personale::create([
            'driverid' => '123 ',
            'firstname' => 'Zelalem',
            'fathername' => 'Sibhat',
            'gfathername' => 'ayatu',
            'sex' => 1,
            'birthdate' => '1980-8-8',
            'driver' => 1,
            'department_id' => 1,
            'position_id' => 1,
            'status' => 1,


        ]);
    }
}
