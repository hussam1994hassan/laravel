<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('home', [
            'title' => 'Home',
            'name' => 'Dashboard',
            'description' => NULL,
            'users' => [
                ['uname' => 'admin', 'email' => 'admin@site.com', 'points' => 9000],
                ['uname' => 'demo', 'email' => 'demo@site.com', 'points' => 5500],
                ['uname' => 'user', 'email' => 'user@site.com', 'points' => 3210],
            ]
        ]);
    }

    public function about() {
        return view('about', [
            'title' => 'About'
        ]);
    }
}
