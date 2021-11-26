<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class MypageController extends Controller
{
    public function my_page(User $user)
    {

        return view('tasks.mypage', [
            'user' => $user
        ]);
    }

    public function Users()
    {
        return view('tasks.users');
    }
}
