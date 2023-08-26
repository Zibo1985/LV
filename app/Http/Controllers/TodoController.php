<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aufgaben;

class TodoController extends Controller {

    public function index() {
        $todos = Aufgaben::paginate(10); // Du kannst die Paginierungsanzahl anpassen
        return response()->json($todos);
    }

    public function store($name, $description, $done_until) {
        $todo = Aufgaben::erstelleAufgabe($name, $description, $done_until);
        return response()->json($todo, 201);
    }

    public function show($id) {
        $todo = Aufgaben::findOrFail($id);
        return response()->json($todo);
    }

    public function update($id, $name, $description, $done_until) {
        $todo = Aufgaben::findOrFail($id);
        $todo->update([$name, $description, $done_until]);
        return response()->json($todo);
    }

    public function destroy($id) {
        $todo = Aufgaben::findOrFail($id);
        $todo->delete();
        return response()->json($todo) ;
    }

    public function indexView() {
        $todos = Aufgaben::all();
        return view('index', ['todos' => $todos]);
    }

    public function getall() {
        $data = Aufgaben::all();
        return view('test', compact('data'));
    }

//    public function __invoke(Request $request, $name, $beschreibung, $date) {
//        $todoData = [
//            'name' => $name,
//            'beschreibung' => $beschreibung,
//            'done_until' => $date,
//        ];
//
//        // Speichere die Daten oder führe andere Logik aus
//        // ...
//
//        return response()->json(['message' => 'Todo erstellt'], 201);
//    }

    public function updateDB($id, $name, $description, $done_until) {
        $todo = Aufgaben::find($id);
        if ($todo) {
           $todo->aktualisiereAufgabe( $name, $description, $done_until);
        }
        return response()->json($todo);
    }

}
