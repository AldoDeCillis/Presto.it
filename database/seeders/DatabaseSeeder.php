<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        $categories = [['Elettronica','Tech','Electrónica'], ['Per la casa','Home','Para la casa'], ['Musica','Music','Música'], ['Sport','Sport','Sport'], ['Hobby','Hobby','Pasatiempo'], ['Animali','Pet','Mascotas'], ['Mobili','Furnitures','Muebles'], ['Giardinaggio','Gardening','Jardinerì'], ['Videogiochi','Videogames','Videojuegos'], ['Palestra','Fitness','Palestra']];

        foreach($categories as $key=>$category){
            DB::table('categories')->insert([
                'it' => $categories[$key][0],
                'en'=>$categories[$key][1],
                'es'=>$categories[$key][2],
                
            ]);
        }

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
