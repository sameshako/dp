<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="wp-rem-property-content main-search fancy">
        <div class="tab-content">
            <!-- <form id="my_form" method="post" action="{{URL::to('/properties')}}"> -->
            <form id="my_form" method="post" action="{{route('get_data')}}">
                @csrf
                <div role="tabpanel" class="tab-pane" id="home">
                    <div class="search-default-fields row">
                        <div id="property_type_cate_fields_4090" class="property-category-fields has-icon col-sm-3 ">
                            <label>
                                <i class="fa fa-sort-down"></i>
                                <select class="chosen-select-no-single" name="location">
                                    <option value="" selected="selected">Alege locatia</option>
                                    @foreach($locations as $location)
                                    <option value="{{ $location->localitate}}">{{ $location->localitate}}</option>
                                    @endforeach
                                </select>
                            </label>
                        </div>
                        <div id="property_type_cate_fields_4090" class="property-category-fields has-icon col-sm-3">
                            <label>
                                <i class="fa fa-sort-down"></i>
                                <select class="chosen-select-no-single" name="tip_tranzactie">
                                    <option value="" selected="selected">Tip tranzactie</option>
                                    <option value="1">De vanzare</option>
                                    <option value="2">De inchiriat</option>
                                </select>
                            </label>
                        </div>
                        <div id="property_type_cate_fields_4090" class="property-category-fields has-icon col-sm-3">
                            <label>
                                <i class="fa fa-sort-down"></i>
                                <select class="chosen-select-no-single" name="estate">
                                    <option value="" selected="selected">Tip imobil</option>
                                    @foreach($estates as $estate)
                                    <option value="{{ $estate->key_int }}">{{ $estate->name }}</option>
                                    @endforeach
                                </select>
                            </label>
                        </div>
                        <div class="search-btn col-sm-3">
                            <div class="input-button-loader">
                                <a class="bgcolor" href="javascript:{}" onclick="document.getElementById('my_form').submit();">Cauta</a>
                            </div>

                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@foreach ($errors->all() as $error)

<div class="outer-error">{{ $error }}</div>

@endforeach