<?php

use Illuminate\Database\Seeder;

class FirstDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 15)->create();
        factory(App\Category::class, 11)->create();
        factory(App\Service::class, 15)->create();
    }
}
