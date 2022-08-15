<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $this->authorize('admin');
        return view('dashboard.users.index', [
            'users' => User::all()
        ]);
    }

    public function create()
    {
        return view('dashboard.users.create', [
            'users' => User::all()
        ]);
    }
}
