<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;

class BlogController extends Controller
{
    public function index(Posts $posts)
    {
        $data = $posts->orderBy('created_at', 'desc')->get();

        return view('beranda', compact('data'));
    }

    public function single_post($slug)
    {
        $data = Posts::where('slug', $slug)->get();

        return view('blog_post.isi_post', compact('data'));
    }
}
