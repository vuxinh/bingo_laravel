<?php

use Illuminate\Database\Seeder;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name' => 'xinh', 'email' => 'xinh10@gmail.com', 'password' =>bcrypt('matkhau')],
            ['name' => 'thanh', 'email' => 'thanh@gmail.com', 'password' =>bcrypt('matkhau')]

        ]);
    }
}
