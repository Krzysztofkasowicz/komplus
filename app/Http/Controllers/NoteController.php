<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function store(Request $request){

        $note = new Note;
        $note->message = $request->input('message');
        $note->type = $request->input('type');
        $note->company_id = $request->input('company_id');
        $note->save();
        return redirect('/companies');
    }
}
