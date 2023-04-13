@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card" style="margin-top: 50px">
                    <div class="card-header">
                        <h4>Edit Profile</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('user.profile.update',$user->id) }}" method="POST" >
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{$user->name}}" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input name="email" id="email" class="form-control" value="{{$user->email}}" requried/>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label for="confirm-password">Confirm Password</label>
                                <input type="password" name="password_confirmation" id="confirm-password" class="form-control">
                            </div>
                            <div class="form-group">
                                @if (isset($passwordChanged) && $passwordChanged)
                                    <div class="alert alert-success" role="alert">
                                        Password changed successfully.
                                    </div>
                                @endif
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Save Profile</button>
                                <a href="{{ route('user.profile',$user->id) }}" class="btn btn-secondary">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection