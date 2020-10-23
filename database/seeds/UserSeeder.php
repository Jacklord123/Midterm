<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'lname' => 'Jack',
                'fname' =>  'Jack Lord',
                'address' => 'Macaas, Tubigon, Bohol',
                'phone' => '0917.123.6789',
                'email' => 'jacklord@email.com',
                'password' => bcrypt('password123')
            ],
            [
                'lname' => 'Bryle',
                'fname' => 'Bryle Anthony',
                'address' => 'Pooc Oriental, Tubigon, Bohol',
                'phone' => '0912.568.2222',
                'email' => 'bryleanthony@email.com',
                'password' => bcrypt('password123')
            ],
            [
                'lname' => 'phagie',
                'fname' => 'abella',
                'address' => 'Tubigon, Bohol',
                'phone' => '0922.555.6666',
                'email' => 'phagieabella@email.com',
                'password' => bcrypt('password123')
            ],
        ];

        foreach($data as $usr) {
            \App\User::create($usr);
        }
    }
}
