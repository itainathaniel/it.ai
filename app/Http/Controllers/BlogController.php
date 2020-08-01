<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Wink\WinkPage;
use Wink\WinkPost;

class BlogController extends Controller
{
    public function index()
    {
        $posts = WinkPost::with('tags')
            ->live()
            ->orderBy('publish_date', 'DESC')
            ->simplePaginate(10);

        return view('blog.index', [
            'posts' => $posts
        ]);
    }

    public function page($slug)
    {
        $page = WinkPage::whereSlug($slug)->firstOrFail();

        return view('blog.page', [
            'page' => $page
        ]);
    }

    // public function tag($slug)
    // {
    //     dd('tag', $slug);
    // }

    // public function author($slug)
    // {
    //     dd('author', $slug);
    // }

    public function post($year, $month, $slug)
    {
        $post = WinkPost::with(['tags', 'author'])
            ->live()
            ->whereSlug($slug)
            ->firstOrFail();
        // dd($post, $post->meta);

        return view('blog.post', [
            'post' => $post
        ]);
    }
}
