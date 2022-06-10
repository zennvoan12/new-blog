<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthorController extends Controller
{
    public function show(User $author)
    {
        return view('blog', [
            'title' => 'Posted By : ' . $author->name,
            'active' => 'categories',
            'posts' => $author->posts->load('category','author')
        ]);
    }
}
