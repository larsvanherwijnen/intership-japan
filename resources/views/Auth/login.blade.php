@extends('layouts.app')
@section('content')
    <div class="background_image">
        <div class="container">
            <div class="row">
                <div class="col-md-12 min-vh-100 d-flex flex-column justify-content-center">
                    <div class="row">
                        <div class="col-lg-6 col-md-8 mx-auto">
                            <div class="card rounded shadow shadow-sm">
                                <div class="card-header">
                                    <h3 class="mb-0">Login</h3>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('login') }}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <input class="form-control form-control-lg rounded-0" placeholder="E-mail" name="email" type="text">
                                            @error('email')
                                            <div class="text-danger pb-5">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control form-control-lg rounded-0" placeholder="Password" name="password"
                                                   type="password" value="">
                                            @error('password')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input name="remember" type="checkbox" value="Remember Me"> Remember Me
                                            </label>
                                        </div>
                                        <input class="btn btn-lg btn-primary btn-block" type="submit" value="Login">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

