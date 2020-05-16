<?php

use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder {

    public function run() {
        DB::table('faqs')->delete();
        DB::table('faqs')->insert([
            [
                'question' => 'First Question in General?',
                'answer' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et',
                'faq_category_id' => 1
            ],
            [
                'question' => 'Second Question in General?',
                'answer' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et',
                'faq_category_id' => 1
            ],
            [
                'question' => 'Blablabla?',
                'answer' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et',
                'faq_category_id' => 2
            ],
            [
                'question' => 'Different Text?',
                'answer' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et',
                'faq_category_id' => 2
            ],
            [
                'question' => 'Is it true?',
                'answer' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et',
                'faq_category_id' => 3
            ],
            [
                'question' => 'Arrr you a pirate?',
                'answer' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et',
                'faq_category_id' => 3
            ],
        ]);
    }
}
