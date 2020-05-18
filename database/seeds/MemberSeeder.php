<?php

use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder {

    public function run() {
        DB::table('members')->delete();
        DB::table('members')->insert([
            [
                'name' => 'Joe',
                'last_name' => 'Doe',
                'title' => 'Supervisor',
                'image' => 'default.jpg'
            ],
            [
                'name' => 'Jim',
                'last_name' => 'Panse',
                'title' => 'Technical Manager',
                'image' => 'default.jpg'
            ],
            [
                'name' => 'Volker',
                'last_name' => 'Putt',
                'title' => 'Hyperledger Engineer',
                'image' => 'default.jpg'
            ],
            [
                'name' => 'Lassmiranda',
                'last_name' => 'DeSivilla',
                'title' => 'Frontend Developer',
                'image' => 'default.jpg'
            ],
            [
                'name' => 'Joe',
                'last_name' => 'Doe',
                'title' => 'Supervisor',
                'image' => 'default.jpg'
            ],
            [
                'name' => 'Jim',
                'last_name' => 'Panse',
                'title' => 'Technical Manager',
                'image' => 'default.jpg'
            ],
            [
                'name' => 'Volker',
                'last_name' => 'Putt',
                'title' => 'Hyperledger Engineer',
                'image' => 'default.jpg'
            ],
            [
                'name' => 'Lassmiranda',
                'last_name' => 'DeSivilla',
                'title' => 'Frontend Developer',
                'image' => 'default.jpg'
            ],
            [
                'name' => 'Joe',
                'last_name' => 'Doe',
                'title' => 'Supervisor',
                'image' => 'default.jpg'
            ],
            [
                'name' => 'Jim',
                'last_name' => 'Panse',
                'title' => 'Technical Manager',
                'image' => 'default.jpg'
            ],
            [
                'name' => 'Volker',
                'last_name' => 'Putt',
                'title' => 'Hyperledger Engineer',
                'image' => 'default.jpg'
            ],
            [
                'name' => 'Lassmiranda',
                'last_name' => 'DeSivilla',
                'title' => 'Frontend Developer',
                'image' => 'default.jpg'
            ],
            [
                'name' => 'Joe',
                'last_name' => 'Doe',
                'title' => 'Supervisor',
                'image' => 'default.jpg'
            ],
            [
                'name' => 'Jim',
                'last_name' => 'Panse',
                'title' => 'Technical Manager',
                'image' => 'default.jpg'
            ],
            [
                'name' => 'Volker',
                'last_name' => 'Putt',
                'title' => 'Hyperledger Engineer',
                'image' => 'default.jpg'
            ],
            [
                'name' => 'Lassmiranda',
                'last_name' => 'DeSivilla',
                'title' => 'Frontend Developer',
                'image' => 'default.jpg'
            ],
            [
                'name' => 'Lassmiranda',
                'last_name' => 'DeSivilla',
                'title' => 'Frontend Developer',
                'image' => 'default.jpg'
            ],
            [
                'name' => 'Lassmiranda',
                'last_name' => 'DeSivilla',
                'title' => 'Frontend Developer',
                'image' => 'default.jpg'
            ],
            [
                'name' => 'Lassmiranda',
                'last_name' => 'DeSivilla',
                'title' => 'Frontend Developer',
                'image' => 'default.jpg'
            ],
        ]);
    }
}
