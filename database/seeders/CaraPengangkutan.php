<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CaraPengangkutan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cara_pengangkutan')->delete();

		$pengangkutan = array(
			array('cara' => 'LAUT'),
			array('cara' => 'KERETA API'),
            array('cara' => 'DARAT'),
			array('cara' => 'UDARA'),
			array('cara' => 'POS'),
			array('cara' => 'UDARA'),
			array('cara' => 'MULTIMODA'),
            
		);

		DB::table('cara_pengangkutan')->insert($pengangkutan);
    }
}
