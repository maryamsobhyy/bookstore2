<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;

class maincontroller extends Controller
{
    //
    public function index()
    {
        $users_count = User::count();
        $categories_count = Category::count();
        return view('admin.pages.home.index', compact('users_count', 'categories_count'));
    }
}
