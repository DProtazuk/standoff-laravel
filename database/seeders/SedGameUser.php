<?php

namespace Database\Seeders;

use App\Models\GameUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SedGameUser extends Seeder
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
                'idUsers' => '54535951',
                'img' => 'https://avatars-19e92.kxcdn.com/_default_1_6',
                'login' => 'ВеляТопd'
            ],
            [
                'idUsers' => '79881726',
                'img' => 'https://avatars-19e92.kxcdn.com/e5cef21b-28a0-48f6-b07e-2f7fcfbc68c8',
                'login' => 'Mencl'
            ],
            [
                'idUsers' => '71234854',
                'img' => 'https://avatars-19e92.kxcdn.com/95cee437-23fb-4259-832b-3c8fc3a93e3f',
                'login' => 'Zista'
            ]
        ];

        GameUser::insert($data);
    }
}
