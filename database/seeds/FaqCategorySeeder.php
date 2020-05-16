<?php

use Illuminate\Database\Seeder;

class FaqCategorySeeder extends Seeder {

    public function run() {
        DB::table('faq_categories')->delete();
        DB::table('faq_categories')->insert([
            [
                'name' => 'General',
                'slug' => 'general'
            ],
            [
                'name' => 'Technologies',
                'slug' => 'technologies'
            ],
            [
                'name' => 'Security',
                'slug' => 'security'
            ],
        ]);
    }
}
