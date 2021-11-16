<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class books_data extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books = [
        	[
        		'name' 			=> 'Book A',
        		'price' 		=> '10',
        		'category_id' 	=> 1,
        		'created_at' 	=> date('Y-m-d H:i:s'),
        		'updated_at' 	=> date('Y-m-d H:i:s'),
        	],
        	[
        		'name' 			=> 'Book B',
        		'price' 		=> '15',
        		'category_id' 	=> 2,
        		'created_at' 	=> date('Y-m-d H:i:s'),
        		'updated_at' 	=> date('Y-m-d H:i:s'),
        	],
        	[
        		'name' 			=> 'Book C',
        		'price' 		=> '20',
        		'category_id' 	=> 3,
        		'created_at' 	=> date('Y-m-d H:i:s'),
        		'updated_at' 	=> date('Y-m-d H:i:s'),
        	]
        ];

        foreach ($books as $book) {
        	DB::table('books')->insert($book);
        }
    }
}
