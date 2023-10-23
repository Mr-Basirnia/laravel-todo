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

        alert()->success('تسک با موفقیت ایجاد شد', 'با تشکر');
        return redirect()->route('todos.index');
    }


    /**
     * edit todo
     *
     * @param Request $request
     * @param Todo $id
     */
    public function edit(Request $request, Todo $id)
    {
        $todo = $id;
        return view('todos.edit', compact('todo'));
    }

    /**
     * update todo
     *
     * @param Request $request
     * @param Todo $id
     * @return void
     */
    public function update(Request $request, Todo $id)
    {
        $todo = $id;

        $request->validate([
            'todoTitle' => 'required',
            'todoDecription' => 'required'
        ]);

        $todo->update([
            'title' => $request->todoTitle,
            'description' => $request->todoDecription,
        ]);

        alert()->success('تسک با موفقیت ویرایش شد', 'با تشکر');
        return redirect()->route('todos.show', ['id' => $todo->id]);
    }


    /**
     * delete todo
     *
     * @param Request $request
     * @param Todo $id
     * @return void
     */
    public function delete(Request $request, Todo $id)
    {
        $todo = $id;
        $todo->delete();

        alert()->error('تسک با موفقیت حذف شد', 'دقت کنید');
        return redirect()->route('todos.index');
    }
}
