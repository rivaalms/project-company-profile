<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function articles(Request $request) {
        $post = Post::where('slug', $request->slug)->firstOrFail();
        return view('clients.article', ['post' => $post]);
    }
}
