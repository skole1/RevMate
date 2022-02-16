@extends('layouts.login')

@section('title')
Login | Page
@endsection

@section('content')
<div class="login-wrapper">
    <div class="container">
        <div class="loginbox">
            <div class="login-left"> <img class="img-fluid" src="img/logo.jpg" alt="Logo"> </div>
            <div class="login-right">
                <div class="login-right-wrap mt-5">
                    <h1>Login</h1>
                    <p class="account-subtitle">Access to our dashboard</p>
                    @if (session()->has('error'))
                        <div class="alert alert-danger">
                            {{ session()->get('error') }}
                        </div>
                    @endif
                    <form action="{{ route('post.login') }}" method="POSt">
                        @csrf
                        <div class="form-group">
                            <input class="form-control" type="text" name="phone" placeholder="Phone Number">
                            @error('phone')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" name="password" placeholder="Password">
                            @error('password')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-block" type="submit">Login</button>
                        </div>
                    </form>
                    <div class="text-center forgotpass"><a href="{{ route('forgotPassword') }}">Forgot Password?</a> </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
