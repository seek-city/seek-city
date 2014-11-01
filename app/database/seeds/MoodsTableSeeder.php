<?php

class MoodsTableSeeder extends Seeder {

        public function run()
        {
        $mood1 = new Mood();
        $mood1->name = 'Artsy';
        $mood1->save();
        
        $mood2 = new Mood();
        $mood2->name = 'Classy';
        $mood2->save();
        
        $mood3 = new Mood();
        $mood3->name = 'Rainy Day';
        $mood3->save();
        
        $mood4 = new Mood();
        $mood4->name = 'Sporty';
        $mood4->save();
        
        $mood5 = new Mood();
        $mood5->name = 'Festive';
        $mood5->save();
        }

}