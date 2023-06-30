<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Symfony\Component\Console\Output\ConsoleOutput;

class NoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $file_path ="database/sample/seeder.json";
        $success_message = "Successfully seed notes to the database ";
        $output = new ConsoleOutput();

        $json = File::get($file_path);
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
        Log::info($success_message,["PATH:"=>$file_path]);
        $output->writeln("<info>".$success_message."</info>\n");

    }
}
