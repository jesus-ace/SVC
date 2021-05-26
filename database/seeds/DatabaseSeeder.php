<?php

use Illuminate\Database\Seeder;

<<<<<<< HEAD
=======


>>>>>>> version-developer-1.23
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        // $this->call(UsersTableSeeder::class);
=======
        $this->call(RolSeeder::class);
        $this->call(Type_of_UsersSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(CarnetsSeeder::class);
        $this->call(DepartmentsSeeder::class);
        $this->call(ReasonsSeeder::class);
>>>>>>> version-developer-1.23
    }
}
