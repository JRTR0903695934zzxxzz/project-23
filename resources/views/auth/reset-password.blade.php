@extends('layouts.master_authen')
@section('content')
<div class="limiter">
    <div class="container-login100" style="background-image: url('{{asset('authen/images/bg-01.jpg') }}');">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
            <form class="login100-form validate-form" method="POST" action="{{ route('password.store') }}">
                @csrf
                <!-- Password Reset Token -->
                <input type="hidden" name="token" value="{{ $request->route('token') }}">
                <span class="login100-form-title p-b-49">
                    Reset Password
                </span>

               

                  
                
                
                <div class="wrap-input100 validate-input m-b-23" data-validate = "email is reauired">
                    <span class="label-input100">email</span>
                    <input class="input100" type="text" name="email" placeholder="Type your email" value="{{ $request->email }}">
                    <span class="focus-input100" data-symbol="&#xf206;"></span>
                </div>
                
                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <span class="label-input100">Password</span>
                    <input class="input100" type="password" name="password" placeholder="Type your password">
                    <span class="focus-input100" data-symbol="&#xf190;"></span>
                </div>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                
                <div class="wrap-input100 validate-input" data-validate="Confirm Password is required">
                    <span class="label-input100">Confirm Password</span>
                    <input class="input100" type="password" name="password_confirmation" placeholder="Type your Confirm Password">
                    <span class="focus-input100" data-symbol="&#xf190;"></span>
                </div>
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                
            
              
                
                
                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn">
                            Reset Password
                        </button>
                    </div>
                </div>

@endsection