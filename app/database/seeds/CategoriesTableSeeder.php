<?php

class CategoriesTableSeeder extends Seeder {

	public function run()
	{
        $cat1 = new Category();
        $cat1->name = 'Family Time';
        $cat1->save();
        
        $cat2 = new Category();
        $cat2->name = 'Date Night';
        $cat2->save();
        
        $cat3 = new Category();
        $cat3->name = 'Live Music';
        $cat3->save();
        
	}

}