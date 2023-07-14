<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;

class NoteController extends Controller{
    /**
     * Get a list of notes
     */
    public function index (Request $request): JsonResponse {
        $notes = Note::all(); //TODO: Add sort by date created or updated where update come first in priorty
        return response()->json($notes);
    } 
    /**
     * Post a note
     */
    public function store(Request $request): JsonResponse {

        //get only notes title and description
        $data = $request->only('title', 'content');

        // run validation
        $validator = Validator::make($data, [
        'title' =>'required|string|unique:notes|max:255',
        'content' =>'required|string|max:2000',
        ]);

         //Send failed response if request is not valid
        if ($validator->fails()) {
            return response()->json(['error' => $validator->messages()], JsonResponse::HTTP_BAD_REQUEST);
        }

        // create a note and store it
        $note = Note::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        // return success response
        return response()->json(["success"=>true,"message"=>"succesfully created ".$note->title]);
    }
    /**
     * Delete a note
     */
    public function destroy($id): JsonResponse {
        $note = Note::find($id);
        // if(!$note){
        //     return response()->json(['error'=>'not found'],JsonResponse::HTTP_BAD_REQUEST);
        // }
        //delete the note
        $note->delete();
    
        // return success response
        return response()->json(["success" => true,"message" => "Successfully deleted ".$note->title]);
    }

}
