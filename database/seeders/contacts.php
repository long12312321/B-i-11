<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Str;

class contacts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            ['id' => 1,'name' => 'Long','address'=>'Ha Noi','email' => Str::random(10).'@gmail.com','content' => 'A','users_id'=>4],
            ['id' => 2,'name' => 'Lan','address'=>'Ha Noi','email' => Str::random(10).'@gmail.com','content' => 'B','users_id'=>1],
            ['id' => 3,'name' => 'Tuan','address'=>'HCM','email' => Str::random(10).'@gmail.com','content' => 'C','users_id'=>3],
            ['id' => 4,'name' => 'Tuyen','address'=>'Da Nang','email' => Str::random(10).'@gmail.com','content' => 'D','users_id'=>2],

        ]);
    }
}
