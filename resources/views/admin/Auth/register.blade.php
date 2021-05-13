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
                                    <h3 class="mb-0">Register</h3>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('registerAdmin') }}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label for="name" class="sr-only">Name</label>
                                            <input type="text" name="name" id="name" placeholder="Your name"
                                                   class="form-control form-control-lg rounded-0 @error('name') border-danger @enderror"
                                                   value="{{ old('name') }}">

                                            @error('name')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="lastname" class="sr-only">Lastname</label>
                                            <input type="text" name="lastname" id="lastname" placeholder="Lastname"
                                                   class="form-control form-control-lg rounded-0 @error('lastname') border-danger @enderror"
                                                   value="{{ old('lastname') }}">

                                            @error('lastname')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="email" class="sr-only">Email</label>
                                            <input type="text" name="email" id="email" placeholder="Your email"
                                                   class="form-control form-control-lg rounded-0 @error('email') border-danger @enderror"
                                                   value="{{ old('email') }}">

                                            @error('email')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <div class="mb-4">
                                                <label for="password" class="sr-only">Password</label>
                                                <input type="password" name="password" id="password"
                                                       placeholder="Choose a password"
                                                       class="form-control form-control-lg rounded-0 @error('password') border-danger @enderror"
                                                       value="">

                                                @error('password')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="password_confirmation" class="sr-only">Password again</label>
                                            <input type="password" name="password_confirmation"
                                                   id="password_confirmation" placeholder="Repeat your password"
                                                   class="form-control form-control-lg rounded-0 @error('password_confirmation') border-danger @enderror"
                                                   value="">

                                            @error('password_confirmation')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <input class="btn btn-lg btn-primary btn-block" type="submit" value="Register">
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

