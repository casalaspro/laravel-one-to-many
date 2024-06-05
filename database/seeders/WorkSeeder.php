<?php

namespace Database\Seeders;

use App\Models\Type;
use App\Models\Work;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

class WorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $types = Type::all(); //collection di oggetti type

        $id = $types->pluck('id')->all(); // array di id [1,2,3,4,5]




        for($i=0; $i<10; $i++){
            $new_work = new Work();
            $title = $faker->sentence(4);
            $new_work->title = $title;
            $slug = Str::slug($title, '-');
            $new_work->slug = $slug;
            $new_work->description = $faker->optional()->text(200);
            $new_work->github_link = $faker->url();

            $new_work->type_id = $faker->optional()->randomElement($id);

            $new_work->save();
        }
    }
}
