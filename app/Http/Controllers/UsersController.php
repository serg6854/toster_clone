<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::with(['answers', 'questions'])->paginate(30);

        return view('users.index', [
            'users' => $users
        ]);
    }
}
