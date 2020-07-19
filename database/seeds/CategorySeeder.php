<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([
        	[
        		'name' => 'Kertas',
                'created_at' => date('Y-m-d H:i:s')
        	],
        	[
        		'name' => 'Logam',
                'created_at' => date('Y-m-d H:i:s')
        	],
        	[
        		'name' => 'Plastik',
                'created_at' => date('Y-m-d H:i:s')
        	]
        ]);
    }
}
