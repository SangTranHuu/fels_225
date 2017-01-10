<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        factory(User::class, 5)->create();
        User::find(1)->update([
            'name' => 'Tom Jerry',
            'password' => '123456',
            'email' => 'laravel-a8419c@inbox.mailtrap.io',
        ]);
        User::find(2)->update([
            'name' => 'Admin',
            'password' => '123456',
            'email' => 'admin@fels.com',
            'role' => 'admin',
        ]);
    }
}
