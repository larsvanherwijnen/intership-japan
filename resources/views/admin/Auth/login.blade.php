@extends('layouts.app')
@section('content')
    <div class="background_image">
        <div class="container">
            <div class="row  justify-content-center ">
                <div class="col-md-4 col-md-offset-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Please sign in</h3>
                        </div>
                        <div class="panel-body">
                            <form action="{{ route('loginAdmin') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="text">
                                </div>
                                @error('email')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password"
                                           type="password" value="">
                                </div>
                                @error('password')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me"> Remember Me
                                    </label>
                                </div>
                                <input class="btn btn-lg btn-primary btn-block" type="submit" value="Login">
                                @error('is_admin')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
