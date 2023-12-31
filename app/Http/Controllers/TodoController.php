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
        $todos = Todo::latest()->paginate(5);
        return view('todos.index', compact('todos'));
    }


    /**
     * show single todo
     *
     * @param Request $request
     * @param Todo $id
     * @return void
     */
    public function show(Request $request, Todo $id)
    {
        $todo = $id;
        return view('todos.show', compact('todo'));
    }


    /**
     * create new todo
     *
     * @param Request $request
     * @return void
     */
    public function create(Request $request)
    {
        return view('todos.create');
    }


    /**
     * store new todo
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        $request->validate([
            'todoTitle' => 'required',
            'todoDecription' => 'required'
        ]);

        Todo::create([
            'title' => $request->todoTitle,
            'description' => $request->todoDecription,
        ]);

        return redirect()->route('todos.index');
    }
}
