<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Gate;

class TodoController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('todo_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $todos = Todo::all();

        return view('todos.index', compact('todos'));
    }

    public function create(Request $request)
    {
        // store the todo
    }
}
