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
                <div class="login-right-wrap">
                    <h1>Forgot Password?</h1>
                    <p class="account-subtitle">Enter your Phone Number to get a password reset link</p>
                    <form action="login.html">
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Phone Number"> </div>
                        <div class="form-group mb-0">
                            <button class="btn btn-primary btn-block" type="submit">Reset Password</button>
                        </div>
                    </form>
                    <div class="text-center dont-have">Remember your password? <a href="{{ route('login') }}">Login</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
