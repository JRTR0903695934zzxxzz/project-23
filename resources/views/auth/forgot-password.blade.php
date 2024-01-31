@extends('layouts.master_authen')
@section('content')
<div class="limiter">
    <div class="container-login100" style="background-image: url('authen/images/bg-01.jpg');">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
            <x-auth-session-status class="mb-4 text-success" :status="session('status')" />
            <form class="login100-form validate-form" method="POST" action="{{ route('password.email') }}">
                @csrf
                <span class="login100-form-title p-b-49">
                    Forgot your password? 
                </span>
                <h6>No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</h6>
          
                <div class="wrap-input100 validate-input m-b-23" data-validate = "email is reauired">
                    <span class="label-input100">email</span>
                    <input class="input100" type="text" name="email" placeholder="Type your email">
                    <span class="focus-input100" data-symbol="&#xf206;"></span>
                </div>
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger"/>          
                          
                <div class="text-right p-t-8 p-b-31">
                    <a href="{{ route('login') }}">
                        Login
                    </a>
                </div>
                
                
                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn">
                            Email Password Reset Link
                        </button>
                    </div>
                </div>

@endsection