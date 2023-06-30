<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;

class NoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $json = File::get("database/sample/seeder.json");
        $data = json_decode($json);
        $collection = collect($data);
        $randomized_data = $collection->shuffle();
        
        foreach($randomized_data as $obj){
        \App\Models\Note::create([
            "title" => $obj->title,
            "content" => $obj->content
        ]);
        }
        \App\Models\Note::factory(10)->create();


        //success message
        Log::info("Successfully seed notes to the database ");
    }
}
