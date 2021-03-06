<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(PositionsTableSeeder::class);
        $this->call(DepartmentTableSeeder::class);
        $this->call(PersonaleTableSeeder::class);
        $this->call(DownTimeTableSeeder::class);
        $this->call(JobSystemTableSeeder::class);
        $this->call(JobCardTypeTableSeeder::class);
        $this->call(JobTypeTableSeeder::class);
        // $this->call(JobIdentTableSeeder::class);
        $this->call(WorkshopTableSeeder::class);
        $this->call(CustomerTableSeeder::class);
        $this->call(VehecleTypeTableSeeder::class);
        $this->call(TruckTableSeeder::class);
        $this->call(AdminTableSeeder::class);
    }
}
