@extends('layouts.backend.app')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Post</h2>
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

<form action="{{ route('blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data" name="forma">
    @method('PUT')
    @csrf
    <div class="row">
        <input type="hidden" name="user" value="{{AUTH::id()}}">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>title:</strong>
                <input type="text" name="title" class="form-control" placeholder="title" value="{{ old('title') ?? $blog->title ?? '' }}">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                <textarea name="body" id="body" cols="30" rows="10" class="form-control">{{ old('body') ?? $blog->body ?? '' }}</textarea>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Categorie:</strong>
                <select name="propertie_types" id="propertie_types" class="form-control">
                    @foreach ($property_types as $property_type)
                    @if ($property_type->id == $blog->propertie_types)
                    <option selected="selected" value="{{ $property_type->id }}">{{ $property_type->title }}</option>
                    @else
                    <option value="{{ $property_type->id }}">{{ $property_type->title }}</option>
                    @endif
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong>
                <input type="file" name="image" id="image" class="form-control">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <select name="status" id="status" class="form-control">
                    @if ($blog->status == 1)
                    <option value="{{ $blog->status }}" selected>Activ</option>
                    <option value="0">Inactiv</option>
                    @else
                    <option value="{{ $blog->status  }}" selected>Inactiv</option>
                    <option value="1">Activ</option>
                    @endif
                </select>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
<script>
    tinymce.init({
        selector: 'textarea'
    });
</script>
@endsection