@extends('layouts.backend.app')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Blog Category</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{route('blogs.index')}}" title="Go back"> <i class="fas fa-backward "></i> </a>
        </div>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Error!</strong>
    <ul>
        @foreach ($errors->all() as $error)
        <li></li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('blogCategoryStore') }}" method="POST" enctype="multipart/form-data" name="forma">
    @csrf
    <div class="row">
        <input type="hidden" name="user" value="{{AUTH::id()}}">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>title:</strong>
                <input type="text" name="title" class="form-control" placeholder="title">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
<script>tinymce.init({selector:'textarea'});</script>
@endsection
