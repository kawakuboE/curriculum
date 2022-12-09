<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $params =
        [
            [
                'name' => 'そうしのまくら',
                'email' => 'test2@test.com',
                'password' => Hash::make('bbbbb222')
            ],
            [
                'name' => 'たきじい',
                'email' => 'test3@test.com',
                'password' => Hash::make('ccccc333')
            ],
            [
                'name' => 'あくたの龍ちゃん',
                'email' => 'test4@test.com',
                'password' => Hash::make('ddddd444')
            ]
        ];

        $now = now();
        foreach ($params as $param) {
            $param['created_at'] = $now;
            $param['updated_at'] = $now;
            DB::table('users')->insert($param);
        }
        // $this->call(UsersTableSeeder::class);
    }
}
