<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'acc_type' => 1,
            'name' => 'Naxpansion',
            'email' => 'naxpansion@naxpansion.com',
            'password' => bcrypt('naxpansion777')
        ]);

    }
}
