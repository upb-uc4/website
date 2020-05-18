<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

    public function run() {
        $this->call(FaqCategorySeeder::class);
        $this->call(FaqSeeder::class);
        $this->call(MemberSeeder::class);
    }
}
