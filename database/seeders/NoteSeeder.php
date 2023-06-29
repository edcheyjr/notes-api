<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class NoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // \App\Models\Note::factory(10)->create();
        $json = File::get("database/sample/seeder.json");
        $data = json_decode($json);
        foreach($data as $obj){
        \App\Models\Note::create([
            "title" => $obj->title,
            "content" => $obj->content
        ]);
        }
    }
}
