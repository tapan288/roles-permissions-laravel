<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();

        return view('todos.index', compact('todos'));
    }

    public function create(Request $request)
    {
        // store the todo
    }
}
