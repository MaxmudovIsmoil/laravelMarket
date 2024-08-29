<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = ['Alijon', 'Olimjon'];

        return  view('users.index', compact('users'));
    }


    public function group()
    {
        $groups = 'Guruhlar';

        return view('groups.index', compact('groups'));
    }
}
