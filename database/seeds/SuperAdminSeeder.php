<?php

use App\SuperAdmin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new SuperAdmin();
        $admin->nama = 'Sobrun';
        $admin->no_hp = '08929329739';
        $admin->email = 'sobrunj5@gmail.com';
        $admin->password = Hash::make('1234567');
        $admin->save();
    }
}
