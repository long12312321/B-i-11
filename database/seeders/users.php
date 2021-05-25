<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use str;



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
            ['id' => 1,'account' =>'user1','password' => bcrypt('123')],
            ['id' => 2,'account' => 'user2','password' => bcrypt('123')],
            ['id' => 3,'account' => 'user3','password' => bcrypt('123')],
            ['id' => 4,'account' => 'user4','password' => bcrypt('123')],
        ]);
    }
}
