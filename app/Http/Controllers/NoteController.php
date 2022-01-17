<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function showAllNotes()
    {
        return response()->json(Note::all());
    }

    public function showOneNote($id)
    {
        return response()->json(Note::find($id));
    }

    public function createNote(Request $request)
    {
        $note = Note::create($request->all());

        return response()->json($note, 201);
    }

    public function updateNote($id, Request $request)
    {
        $note = Note::findOrFail($id);
        $note->update($request->all());

        return response()->json($note, 200);
    }

    public function deleteNote($id)
    {
        Note::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
