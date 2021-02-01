@extends('layouts.backend.app')
@section('content')
<div class="col-lg-12">
    <h1 class="my-4">Blog</h1>
    <a href="{{ route('blogs.create')}}" class="btn btn-info">Create Post</a>
    <a href="{{ route('blogCategoryCreate')}}" class="btn btn-info">Create Post Category</a>

    <table class="table">
        <thead>
            <tr>
                <td>Titlu</td>
                <td>Categorie</td>
                <td>Status</td>
                <td>Actiune</td>
            </tr>

        </thead>
        <tbody>
            @foreach($blogs as $blog)
            <tr>
                <td>{{ $blog->title }}</td>
                <td>{{ $blog->blogType['title']}}</td>
                <td>{{ $blog->status }}</td>
                <td>
                    <a class="btn btn-warning" href="{{ route('blogs.show', $blog->id)}}">Show</a>
                    <a class="btn btn-primary" href="{{ route('blogs.edit', $blog->id)}}">Edit</a>
                    <form action="{{ route('blogs.destroy', $blog->id)}}" method="POST">
                    @method('DELETE')
                    @csrf

                    <input type="submit" class="btn btn-danger" value="Delete" onclick="return confirm('Are you sure?')">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {!! $blogs->links() !!}
</div>
@endsection