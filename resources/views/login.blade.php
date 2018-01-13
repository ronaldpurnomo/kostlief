@extends('layouts.app')

@section('title')
    <title>Kostlief - Login</title>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="card col-lg-6 bg-dark">
                <h1 style="color: #e07c02;" class="card-title display-3 text-center">Login</h1>
                <hr>
                <form style="color: #e07c02;" class="card-body" action="{{ url('/login') }}" method="post" >
                    {{csrf_field()}}
                    @if(session('status'))
                        <p class="alert alert-danger">{{session('status')}}</p>
                    @endif
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" class="form-control {{$errors->has('email')? 'is-invalid' : ''}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        @if($errors->has('email'))
                            <div class="invalid-feedback">
                               {{$errors->first('email')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control {{$errors->has('password')? 'is-invalid' : ''}}" id="exampleInputPassword1" placeholder="Password">
                        @if($errors->has('password'))
                            <div class="invalid-feedback">
                                {{$errors->first('password')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Remember me</label>
                    </div>
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-sign-in" aria-hidden="true">
                            Login
                        </i>
                    </button>
                </form>
                <a href="/kos">test </a>
            </div>
        </div>
    </div>
@endsection