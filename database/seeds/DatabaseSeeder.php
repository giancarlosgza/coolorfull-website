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
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'name' => 'Giancarlos',
            'username' => 'gian',
            'email' => 'test@mail.com',
            'password' => bcrypt('test123'),
        ]);
    }
}
