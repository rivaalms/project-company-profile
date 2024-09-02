<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(Request $request) {
        $categories = Category::with(['posts' => function ($query) {
            $query->where('enabled', true)->where('published_at', '<=', now());
        }])->get();
        return view('clients.index', compact('categories'));
    }

    public function articles(Request $request) {
        $post = Post::where('slug', $request->slug)->firstOrFail();
        return view('clients.article', ['post' => $post]);
    }
}
