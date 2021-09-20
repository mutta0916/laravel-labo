<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $data = [
            'msg' => 'todo画面です。',
        ];
        return view('todo.index', $data);
    }
}
