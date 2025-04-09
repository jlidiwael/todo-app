<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;  // Modèle pour interagir avec la base de données

class TodoController extends Controller
{
    // Afficher la liste des tâches
    public function index()
    {
        $todos = Todo::all();  // Récupérer toutes les tâches
        return view('todos.index', compact('todos'));
    }

    // Afficher le formulaire de création d'une tâche
    public function create()
    {
        return view('todos.create');
    }

    // Enregistrer une nouvelle tâche
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
        ]);

        Todo::create([
            'title' => $request->title,
        ]);

        return redirect()->route('todos.index');
    }

    // Afficher le formulaire d'édition d'une tâche
    public function edit($id)
    {
        $todo = Todo::findOrFail($id);
        return view('todos.edit', compact('todo'));
    }

    // Mettre à jour une tâche
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
        ]);

        $todo = Todo::findOrFail($id);
        $todo->update([
            'title' => $request->title,
        ]);

        return redirect()->route('todos.index');
    }

    // Supprimer une tâche
    public function destroy($id)
    {
        $todo = Todo::findOrFail($id);
        $todo->delete();

        return redirect()->route('todos.index');
    }
}
