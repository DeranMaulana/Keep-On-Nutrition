<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                'nama'=>'Deran',
                'username'=>'derannmr',
                'alamat'=>'Lembang',
                'no_hp'=>'085156372236',
                'password'=>Hash::make('123456')
            ],
            
            [
                'nama'=>'Bambank',
                'username'=>'bambank',
                'alamat'=>'Lembang',
                'no_hp'=>'085156372236',
                'password'=>Hash::make('123456')
            ],
            [
                'nama'=>'Budi',
                'username'=>'Bud',
                'alamat'=>'Lembang',
                'no_hp'=>'085156372236',
                'password'=>Hash::make('123456')
            ],

        ];
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
