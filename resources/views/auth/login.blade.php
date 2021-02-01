@extends('layouts.front.app')

@section('content')
<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">

                <h2 class="ipt-title">Logheaza-te / Inregistreaza</h2>
            </div>
        </div>
    </div>
</div>
<section class="gray-simple">

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <form method="POST" action="{{route('login')}}">
                    @csrf
                    @if(Session::has('message'))
                                                
                        <p class="alert alert-danger">{{ Session::get('message') }}</p>

                    @endif
                    @if ($errors->any())

                    <div class="notifications">
    
                        @foreach ($errors->all() as $error)
    
                        <h5 class="danger">{{$error}}</h5>
    
                        @endforeach
    
                    </div>
    
                    @endif
                    <div class="form-group">
                        <label>Adresa email</label>
                        <div class="input-with-icon">
                            <input type="email" name="email" class="input-text" placeholder="Email Address">
                            <i class="ti-email"></i>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Parola</label>
                        <div class="input-with-icon">
                            <input type="password" name="password" class="input-text" placeholder="Password">
                            <i class="ti-unlock"></i>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-md full-width pop-login">Intra in cont</button>
                    </div>

                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <form method="POST" action="{{route('register')}}">
                    @csrf
                    @if(Session::has('message'))
                                                
                        <p class="alert alert-danger">{{ Session::get('message') }}</p>

                    @endif

                    @if ($errors->any())

                    <div class="notifications">
    
                        @foreach ($errors->all() as $error)
    
                        <h5 class="danger">{{$error}}</h5>
    
                        @endforeach
    
                    </div>
    
                    @endif
                    <div class="form-group">
                        <label>Nume </label>
                        <div class="input-with-icon">
                            <input type="text" name="nume" class="input-text" placeholder="Nume">
                            <i class="ti-email"></i>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Prenume</label>
                        <div class="input-with-icon">
                            <input type="text" name="prenume" class="input-text" placeholder="Prenume">
                            <i class="ti-email"></i>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Adresa email</label>
                        <div class="input-with-icon">
                            <input type="email" name="email" class="input-text" placeholder="Email Address">
                            <i class="ti-email"></i>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Parola</label>
                        <div class="input-with-icon">
                            <input type="password" name="password" class="input-text" placeholder="Password">
                            <i class="ti-unlock"></i>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Parola</label>
                        <div class="input-with-icon">
                            <input type="password" name="password_confirmation" class="input-text" placeholder="Password">
                            <i class="ti-unlock"></i>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-md full-width pop-login">Creaza Cont</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>



@endsection