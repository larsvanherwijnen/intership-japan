@extends('layouts.app')
@section('content')
    {{ Auth::check() ? 'yes' : 'no' }}
    <a href="{{ route('login') }}"  class="btn btn-primary">Login</a>
    <a href="{{ route('register') }}"  class="btn btn-success">sign up</a>
    <a href="{{ route('logout') }}"  class="btn btn-danger">logout</a>
@endsection
