<?php

use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $data = array(
            [  
                'name' => 'Hermes',
                'rol' => 'admin',
                'email' => 'hermesprieto@gmail.com',
                'password' => \Hash::make('123456'),
                'created_at' => new DateTime,
                'updated_at' => new DateTime
               ],
        );

        User::insert($data);
    }
}
