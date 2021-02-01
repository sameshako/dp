<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogValidationReqeust;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\PropertieType;
use App\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::with('blogType')->orderBy('id', 'DESC')->with('blogUser')->paginate(8);

        return view('admin.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $property_types = BlogCategory::all();

        return view('admin.blogs.create', compact('property_types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogValidationReqeust $request)
    {
        // dd($request);
        $path = $request->file('image')->store('photos', 'public');
        $slug = $request->get('slug', str_slug($request->title));
        // dd($user);
        Blog::create([
            'title' => $request->title,
            'slug' => $slug,
            'image' => $path,
            'body' => $request->body,
            'status' => $request->status,
            'propertie_types' => $request->propertie_types,
            'user_id' => $request->user,
        ]);

        return redirect()->route('blogs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        $last_properties = Property::orderBy('id', 'desc')->take(3)->get();
        $blog = Blog::with('blogType')->with('blogUser')->where('slug', $blog->slug)->firstOrFail();

        return view('admin.blogs.show', compact('blog', 'last_properties'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        $property_types = BlogCategory::all();

        return view('admin.blogs.edit', compact('blog', 'property_types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(BlogValidationReqeust $request, Blog $blog)
    {
        // dd($request);
        if ($request->has('image')) {
            $path = $request->file('image')->store('photos', 'public');
        } else {
            $path = $blog->image;
        }

        $slug = $request->get('slug', str_slug($request->title));
        // dd($user);
        $blog->update([
            'title' => $request->title,
            'slug' => $slug,
            'image' => $path,
            'body' => $request->body,
            'status' => $request->status,
            'propertie_types' => $request->propertie_types,
            'user_id' => $request->user,
        ]);

        return redirect()->route('blogs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();

        return redirect()->route('blogs.index');
    }
}
