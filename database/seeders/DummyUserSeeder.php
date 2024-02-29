<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $userData =[
        [
        'name'=>'User',
        'email'=>'operator@gmail.com',
        'role'=>'superAdmin',
        'password'=>bcrypt('123456')]
    ];

    foreach ($userData as $key => $val) {
         User::create($val);
    }

    }
}
