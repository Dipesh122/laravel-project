<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index() {
        $todos = Todo::all();
        return view('welcome', [
            'todos' => $todos
        ]);
    }

    public function store() {
        $attributes = request()->validate([
            'title' => 'required',
            'Status' => 'required'
        ]);
        Todo::create($attributes);
        return redirect('/');
    }
}
