<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
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

    DB::table('kategori_surat')->insert([
        ['nama_kategori_surat' => 'Observasi'],
        ['nama_kategori_surat' => 'Kunjungan'],
    ]);
    }
}
