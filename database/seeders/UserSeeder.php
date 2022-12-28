<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $users = [
            [
                'name'              => 'Super Admin',
                'email'             => 'admin1@gmail.com',
                'type'              => 1,
                'password'          => bcrypt('admin1'),
                'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ];

        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
