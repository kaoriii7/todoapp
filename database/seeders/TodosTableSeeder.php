<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'content' => 'second'
        ];
        DB::table('todos')->insert($param);
        $param = [
            'content' => 'third'
        ];
        DB::table('todos')->insert($param);
        $param = [
            'content' => 'fourth'
        ];
        DB::table('todos')->insert($param);
    }
}
