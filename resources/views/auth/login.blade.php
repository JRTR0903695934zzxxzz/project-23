@extends('layouts.master_authen')
@section('content')
<div class="limiter">
    <div class="container-login100" style="background-image: url('authen/images/bg-01.jpg');">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
            <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                @csrf
                <span class="login100-form-title p-b-49">
                    Login
                </span>

                <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
                    <span class="label-input100">Username</span>
                    <input class="input100" type="text" name="username" placeholder="Type your Username">
                    <span class="focus-input100" data-symbol="&#xf206;"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <span class="label-input100">Password</span>
                    <input class="input100" type="password" name="password" placeholder="Type your password">
                    <span class="focus-input100" data-symbol="&#xf190;"></span>
                </div>
                
                <div class="text-right p-t-8 p-b-31">
                    <a href="{{ route('password.request') }}">
                        Forgot password?
                    </a>
                </div>
                <div class="text-right p-t-8 p-b-31">
                    <a href="{{ route('register') }}">
                        Sign up
                    </a>
                </div>
                
                
                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn">
                            Login
                        </button>
                    </div>
                </div>

@endsection