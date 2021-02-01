@extends('layouts.backend.app')
@section('content')
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col">
                <div class="page-header-left">
                    <input type="hidden" id="all" value="all" />
                    <a href="{{ route('create_property') }}"><button class="btn btn-square btn-primary" type="button" 
                    data-toggle="modal" data-target=".bd-example-modal-lg" id="add_anunt">Adauga Anunt</button></a>
                </div>
            </div>
            <!-- Bookmark Start-->
            <div class="col">
                <div class="bookmark pull-right">

                </div>
            </div>
            <!-- Bookmark Ends-->
        </div>
    </div>
</div>
<div class="card">

    <div class="table-responsive">
        <table class="table table-lg">
            <thead>
                <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Titlu Anunt </th>
                    <th scope="col">Tip Anunt</th>
                    <th scope="col">Adresa</th>
                    <th scope="col">Actiuni</th>

                </tr>
            </thead>
            <tbody id="results">

            </tbody>
        </table>
    </div>
</div>

@push('js')
<script>
    function get_properties(elem) {
        var value = $(elem).val();
        $.ajax({

            url: "/get_properties",
            method: "POST",
            data: {
                value: value
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },

        }).done(function(response) {

            $("#results").html(response);

        });
    }



    $(document).ready(function() {
        get_properties("#all");

    });
</script>
@endpush
@endsection