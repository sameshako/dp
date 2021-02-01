@extends('layouts.backend.app')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Property</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{route('show-table')}}" title="Go back"> <i class="fas fa-backward "></i> </a>
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
<form action="{{ route('store_property') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>title:</strong>
                <input type="text" name="title" class="form-control" placeholder="title">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>description:</strong>
                <input type="text" name="description" class="form-control" placeholder="description">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>lat:</strong>
                <input type="text" name="lat" class="form-control" placeholder="lat">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>long:</strong>
                <input type="text" name="long" class="form-control" placeholder="long">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>pret:</strong>
                <input type="text" name="pret" class="form-control" placeholder="pret">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>strada:</strong>
                <input type="text" name="strada" class="form-control" placeholder="strada">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>apartament:</strong>
                <input type="text" name="apartament" class="form-control" placeholder="apartament">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>nr-strada:</strong>
                <input type="text" name="nr_strada" class="form-control" placeholder="nr-strada">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>judet:</strong>
                <input type="text" name="judet" class="form-control" placeholder="judet">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>localitate:</strong>
                <input type="text" name="localitate" class="form-control" placeholder="localitate">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>type:</strong>
                <select class="chosen-select-no-single form-control" name="type">
                    @foreach($estates as $estate)
                    <option value="{{ $estate->key_int }}">{{ $estate->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>transaction_type:</strong>
                <select class="chosen-select-no-single form-control" name="transaction_type" >
                    <option value="1">De vanzare</option>
                    <option value="2">De inchiriat</option>
                </select>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Imagini</strong>
              <input type="file" name="images[]" value="" multiple />
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
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group" id="attribute">
                <strong>Attributes</strong> 
               
                
            </div>
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
</script>
@endpush
@endsection