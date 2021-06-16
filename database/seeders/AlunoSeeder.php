<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlunoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alunos')->insert(
            [
                'nome' => 'Christian Marcelino Baptista',
                'email' => 'christianmbaptista@hotmail.com',
            ]
        );
    }
}
