<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $title = "Users";
        // return view('user', compact('title'));
        // return view('user')->with('title', $title);
        return view('user', [
            'title' => $title
        ]);
    }

    public function show($id) {
        return $id;
    }
}
