<?php

namespace Database\Seeders;

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
         \App\Models\User::factory(5)->create();
         \App\Models\Student::factory(5)->create();

//         For laravel 7 and earlier version(call method is required for factory)
//        But for laravel 8 doesn't require call method and even Seeder file.
//        just use the factory method in this DatabaseSeeder.php file

//        $this->call(UserTableSeeder::class);
//        $this->call(StudentTableSeeder::class);

        //For
//        $this->call([
//           UserTableSeeder::class,
//           StudentTableSeeder::class
//        ]);
    }
}
