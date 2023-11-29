<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Unidade;
use Illuminate\Support\Facades\DB;

class UnidadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        DB::table('unidades')->delete();

        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        Unidade::factory(100)->create();
    }
}
