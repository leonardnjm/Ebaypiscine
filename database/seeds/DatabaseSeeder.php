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
        // $this->call(UserSeeder::class);
         
         App\User::create(
        [
             'id' => '1',
            'name' => 'ADMIN',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
            'role_id' => '1',
        ]);
        
        App\Role::create(
        [
             'id' => '1',
            'role' => 'ADMIN',
        ]);
         
    }
}
