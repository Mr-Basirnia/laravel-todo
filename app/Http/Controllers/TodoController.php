<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Show list of the todos.
     *
     * @param Request $request
     * @return void
     */
    public function index(Request $request)
    {
        $todos = Todo::paginate(5);
        return view('todos.index', compact('todos'));
    }
}
