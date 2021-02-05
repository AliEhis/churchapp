<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;
use App\Note;


class NoteController extends Controller
{


    public function postNote(Request $request)
    {
        $this->validate($request, [
            'note' => 'required|string'
        ]);

        $note = Note::create([
            'theme' => $request->theme,
            'text' => $request->text,
            'preachers_name' => $request->preachers_name,
            'note' => $request->note,
            'reminder' => $request->reminder,
        ]);

        return response()->json([
            "message" => "Note Created succesfully",
            'notes' => $note,
            'status' => 'success',
        ], 201);
    }

    public function getNotes(){
       $allNotes = Note::all(); 
       if($allNotes){
       return response()->json([
        "message" => "Notes retrieved succesfully",
        'notes' => $allNotes,
        'status' => 'success',
    ], 201);
    }else{
    return response()->json([
        "message" => "No record found",
        'status' => 'false',
    ]); 
}
    }
	
	 public function NoteDetails($id){
        $noteDetails = Note::find($id);
        return response()->json([
          'noteDetails' => $noteDetails,
          'status' => 'success',
      ], 201);

    }
	
	  public function Update( Request $request, $id){
    $update = Note::find($id);
    if(!$update)
    {
        return response()->json([
            "message" => "No record found",
            'status' => 'false',
        ]);   
    }
    $data = array(
        'theme' => $request->theme,
        'text' => $request->text,
        'preachers_name' => $request->preachers_name,
        'note' => $request->note,
        'reminder' => $request->reminder,
    );
    if(count((array)$update) > 0)
    {
        // we are updating
        $update->update($data);
        return response()->json([
            "message" => "Note updated succesfully",
            'note' => $update,
            'status' => 'success',
        ], 201);
    }
    }

    public function Delete($id){
        $delete =  Note::find($id);
        if(!$delete)
        {
            return response()->json([
                "message" => "No record found",
                'status' => 'false',
            ]);   
        }
        $delete->delete();
        return response()->json([
            "message" => "Note deleted succesfully",
            'status' => 'success',
        ], 201);
    }
	


}
