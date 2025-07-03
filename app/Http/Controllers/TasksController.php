<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddTask;
use App\Models\Tasks;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;

class TasksController extends Controller
{
    function index(): View|Application|Factory
    {
        return view('tasks', ['tasks' => Tasks::all()]);
    }

    function add(AddTask $request): RedirectResponse
    {
        $task = new Tasks;
        $task->name = $request->input('new-task');
        $task->save();
        return redirect('/');
    }

    function complete(Tasks $task): RedirectResponse
    {
        $task->completed = true;
        $task->save();
        return redirect('/');
    }

    function delete(Tasks $task): RedirectResponse
    {
        $task->delete();
        return redirect('/');
    }
}
