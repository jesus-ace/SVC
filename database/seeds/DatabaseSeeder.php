<?php

use Illuminate\Database\Seeder;



class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolSeeder::class);
        $this->call(Type_of_UsersSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(CarnetsSeeder::class);
        $this->call(DepartmentsSeeder::class);
        $this->call(ReasonsSeeder::class);
    }
}
