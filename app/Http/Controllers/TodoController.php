<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aufgaben;

class TodoController extends Controller {

    public function index()
    {
        $todos = Aufgaben::paginate(10); // Du kannst die Paginierungsanzahl anpassen
        return response()->json($todos);
    }

    public function store(Request $request)
    {
        $todo = Aufgaben::create($request->all());
        return response()->json($todo, 201);
    }

    public function show($id)
    {
        $todo = Aufgaben::findOrFail($id);
        return response()->json($todo);
    }

    public function update(Request $request, $id)
    {
        $todo = Aufgaben::findOrFail($id);
        $todo->update($request->all());
        return response()->json($todo);
    }

    public function destroy($id)
    {
        $todo = Aufgaben::findOrFail($id);
        $todo->delete();
        return response()->json(null, 204);
    }
     public function indexView() {
        $todos = Aufgaben::all();
        return view('index', ['todos' => $todos]);
    }

    public function getall() {
        $data = Aufgaben::all();
        return view('test', compact('data'));
    }
}
