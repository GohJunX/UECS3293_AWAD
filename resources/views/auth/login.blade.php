@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div style="text-align:center; background-color:#e7eaea">
                <img style="max-width:50%;margin-top:50px" src='images/png-transparent-samsung-galaxy-a8-a8-user-login-telephone-avatar-pawn-blue-angle-sphere.png'>
            </div>
            <div class="card">
                
                <h3 class="card-header">{{ __('Login') }}</h3>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" style="font-size:18px" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" style="font-size:18px" type="email" class="form-control @error('email') is-invalid @enderror" name="email" @if(Cookie::has('user' )) value="{{Cookie::get('user')}}" @endif required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" style="font-size:14px" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" style="font-size:18px"class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" style="font-size:18px" type="password" class="form-control @error('password') is-invalid @enderror" name="password" @if(Cookie::has('userpwd' )) value="{{Cookie::get('userpwd')}}" @endif required autocomplete="current-password">

                                

                                @error('password')
                                    <span class="invalid-feedback" style="font-size:14px" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" style="font-size:18px" type="checkbox" value="remember" @if(Cookie::has('user' )) checked @endif name="remember" id="remember" {{ old('remember' ) ? 'checked' : '' }}>

                                    <label class="form-check-label" style="font-size:18px"for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" style="font-size:18px" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                             
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
