@extends('layouts.backend.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Property</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('show-table') }}" title="Go back"> <i
                        class="fas fa-backward "></i> </a>
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
    <form action="{{ route('update_property', $id = $property->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>title:</strong>
                    <input type="text" name="title" value="{{ old('title', $property->title) }}" class="form-control"
                        placeholder="title">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>description:</strong>
                    <input type="text" value="{{ old('description', $property->description) }}" name="description"
                        class="form-control" placeholder="description">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>lat:</strong>
                    <input type="text" value="{{ old('lat', $property->lat) }}" name="lat" class="form-control"
                        placeholder="lat">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>long:</strong>
                    <input type="text" value="{{ old('long', $property->long) }}" name="long" class="form-control"
                        placeholder="long">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>pret:</strong>
                    <input type="text" value="{{ old('pret', $property->pret) }}" name="pret" class="form-control"
                        placeholder="pret">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>strada:</strong>
                    <input type="text" value="{{ old('strada', $property->strada) }}" name="strada" class="form-control"
                        placeholder="strada">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>apartament:</strong>
                    <input type="text" value="{{ old('apartament', $property->apartament) }}" name="apartament"
                        class="form-control" placeholder="apartament">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>nr-strada:</strong>
                    <input type="text" value="{{ old('nr_strada', $property->nr_strada) }}" name="nr_strada"
                        class="form-control" placeholder="nr-strada">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>judet:</strong>
                    <input type="text" value="{{ old('judet', $property->judet) }}" name="judet" class="form-control"
                        placeholder="judet">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>localitate:</strong>
                    <input type="text" value="{{ old('localitate', $property->localitate) }}" name="localitate"
                        class="form-control" placeholder="localitate">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>type:</strong>
                    <select class="chosen-select-no-single" name="type">
                        @foreach ($estates as $estate)
                            @if ($estate->key_int == $property->type)
                                <option selected="selected" value="{{ $estate->key_int }}">{{ $estate->name }}</option>
                            @else
                                <option value="{{ $estate->key_int }}">{{ $estate->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>transaction_type:</strong>
                    <input type="text" value="{{ old('transaction_type', $property->transaction_type) }}"
                        name="transaction_type" class="form-control" placeholder="transaction_type">
                </div>
            </div>
            @php $images=json_decode($property->images) @endphp
            @foreach($images as $image)
            <div class="row">
                <input type="hidden" name="images[]" value="{{$image}}" />
                <img width="20%" height="20%" src="/storage/properties/{{$property->slug}}/{{$image}}"/>
                <button type="button" onclick="delete_image(this)" class="btn btn-danger">Sterge</button>
            </div>
            
            @endforeach
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Imagini</strong>
                  <input type="file" name="images_upload[]" value="" multiple />
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Select Atributes</strong>
                   
                  <select id="attributes" class="chosen-select-no-single form-control" >
                    @foreach($attribute as $elem)
                    
                    <option value="{{$elem->id}}">{{$elem->name}}</option>
                    @endforeach
                  </select>
                </div>
            </div>
            @php $array=json_decode($propertie_attributes->value,true) ;@endphp
            <div class="form-group" id="attribute">
                <strong>Attributes</strong> 
            @foreach($array as $key=>$value)

                <div class="row">
                    <div class="col-lg-4">
                        <strong>Denumire:@php $attr=get_attribute_object($key) @endphp {{$attr->name}}</strong>
                        <input type="hidden" name="keys[]" value="{{$key}}" class="form-control" />
                    </div>
                    <div class="col-lg-4">
                        <strong>Valoare</strong>
                        <input type="text" name="values[]" value="{{$value}}" class="form-control" />
                    </div>
                    <div class="col-lg-4">
                        <button type="button" onclick="delete_elem(this)" class="btn btn-danger">Sterge</button>
                    </div>
                </div>
            @endforeach
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

        </div>

    </form>
    @push("js")
<script>
    $('#attributes').change(function(){
    $("#attribute").append('<div class="row"><div class="col-lg-4"><strong>Denumire:'+$('#attributes option:selected').text()+'</strong> <input type="hidden" name="keys[]" value="'+$('#attributes').val()+'" class="form-control" /></div><div class="col-lg-4"><strong>Valoare</strong> <input type="text" name="values[]" value="" class="form-control" /></div><div class="col-lg-4"><button type="button" onclick="delete_elem(this)" class="btn btn-danger">Sterge</button></div></div>');
});
function delete_elem(elem)
{
    $(elem).parent().parent().remove();
}
function delete_image(elem)
{
    $(elem).parent().remove();
}
</script>
@endpush
@endsection
