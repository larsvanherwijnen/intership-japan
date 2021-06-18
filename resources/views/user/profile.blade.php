@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card mt-5">
            <div class="row">
                <div class="col-md-4">
                    <img class="rounded-circle z-depth-2 w-50 m-3" alt="100x100"
                         src="{{asset('storage/intern_images/' . $user->id . '/' . $user->intern->image)}}"
                         data-holder-rendered="true">

                </div>
                <div class="col-md-4">
                    <p>Name:</p>
                    <p>Name:</p>
                    <p>Name:</p>
                    <p>Name:</p>
                    <p>Name:</p>
                    <p>Name:</p>
                    <p>Name:</p>
                    <p>Name:</p>
                </div>
                <div class="col-md-4">
                    <p>Name:</p>
                    <p>Name:</p>
                    <p>Name:</p>
                    <p>Name:</p>
                    <p>Name:</p>
                    <p>Name:</p>
                    <p>Name:</p>
                    <p>Name:</p>
                </div>
            </div>
        </div>
    </div>

@endsection
