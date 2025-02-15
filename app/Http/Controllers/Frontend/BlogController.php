<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $title = 'Berita | SMPN 2 Purwosari';
        $categories = Category::all();


        $blogs = Post::where('status', 'published')->get();
        return view('frontend.blogs.blog-view', compact([
            'title',
            'blogs',
            'categories'
        ]));
    }


    public function sendComment(Request $request, $slug)
    {
        //

        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'description' => 'required',

        ]);

        $blogs = Post::where('slug', $slug)->first();

        $form = [
            'post_id' => $blogs->id,
            'name' => $request->name,
            'email' => $request->email,
            'description' => $request->description,
            'status' => 'approved'

        ];

        Comment::create($form);
        Alert::success('Sukses', 'Komentar Berhasil dikirim.!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        //


        $blog = Post::where('slug', $slug)->first();

        $blogs = [
            'slug' => $blog->slug,
            'title' => $blog->title,
            'description' => $blog->description,
            'image' => asset('storage' . '/' . $blog->image),
            'created_at' => $blog->created_at,
            'url' => url()->current(),
        ];

        $author = $blog->author ? $blog->author->toArray() : [];
        $title = $blog['title'];
        $categories = Category::all();

        $categoriesPost = $blog->category_id;

        $comments = Comment::where('post_id', $blog->id)->where('status', 'approved')->get();

        $relatedPosts = Post::where('category_id', $blog->category_id)
            ->where('id', '!=', $blog->id)
            ->get();


        return view('frontend.blogs.blog-detail', compact([
            'title',
            'blogs',
            'author',
            'categories',
            'relatedPosts',
            'comments'
        ]));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
