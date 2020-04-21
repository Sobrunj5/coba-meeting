<?php

use Illuminate\Database\Seeder;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\SuperAdmin::create([
            'nama' => 'Sobrun',
            'no_hp' => '08929329739',
            'email' => 'sobrunj5@gmail.com',
            'password' => \Illuminate\Support\Facades\Hash::make('1234567')
        ]);

    }
}
