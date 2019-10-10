<?php

use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrData = [];
        for ($i=0;$i <4;$i++){
            array_push($arrData,[
               'title'=>'Hoa huong duong',
               'content'=>'tac pham hoa huong duong cua Maxim gorki',
            ]);
        }
        \Illuminate\Support\Facades\DB::table('blogs')->insert($arrData);
    }
}
