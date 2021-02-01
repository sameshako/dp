<?php

namespace App\Http\Controllers;

use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogCategoryController extends Controller
{
    public function create()
    {
        $blog_types = BlogCategory::all();

        return view('admin.blogs.create_blog_categories', compact('blog_types'));
    }

    public function store(Request $request)
    {
        BlogCategory::create([
            'title' => $request->title,
            'user_id' => $request->user,
        ]);

        return redirect()->route('blogs.index');
    }
}
