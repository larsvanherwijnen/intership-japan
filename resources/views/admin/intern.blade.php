@extends('layouts.admin')
@section('content')
    {{--    @dd($users->intern)--}}
    @foreach($users as $user)
        <div class="container">
            <div class="card my-3">
                <div class="row p-3 ">
                    <div class="col-4">
                        Name: {{$user->name . ' ' .$user->lastname}}
                    </div>
                    <div class="col-3">
                        User email: {{$user->email}}
                    </div>
                    <div class="col-3">
                        User phone: {{$user->phone}}
                    </div>
                    <div class="col-2">
                        <div class="d-flex flex-row ">
                            <form action="" method="post">
                                @csrf
                                <button type="submit" class="btn btn-warning" id="form-toggle-submit">
                                    Edit
                                </button>
                            </form>
                            <form action="" method="post">
                                @csrf
                                <button type="submit" class="btn btn-danger ml-2" id="form-toggle-submit">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
