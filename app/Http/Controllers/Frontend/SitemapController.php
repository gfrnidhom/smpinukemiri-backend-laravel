<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Event;

class SitemapController extends Controller
{
    public function index()
    {
        $blogs = Post::latest()->get();
        $events = Event::latest()->get();

        return response()->view('frontend.sitemap', [
            'blogs' => $blogs,
            'events' => $events,
        ])->header('Content-Type', 'text/xml');
    }
}
