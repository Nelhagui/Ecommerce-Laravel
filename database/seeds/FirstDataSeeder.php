<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Service;
use App\User;



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

       $deportes = new Category([
        'id' => '12',
        'name' =>  'Deportes',
        'description' => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime, eveniet?",
       ]);
       $deportes->save();
       

       $gastronomia = new Category([
           'id' => '13',
           'name' =>  'Gastronomia',
           'description' => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime, eveniet?",
       ]);
       $gastronomia->save();
      

       $educacion = new Category([
        'id' => '14',
        'name' =>  'Educacion',
        'description' => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime, eveniet?",
       ]);
       $educacion->save();
    }
}
