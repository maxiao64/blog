<?php

use Illuminate\Database\Seeder;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Model\Post::class, 50)->create();
        factory(App\Model\User::class, 10)->create();
    }
}
