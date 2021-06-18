@extends('layouts.admin')
@section('content')
    @if(Session::has('succes'))
        <div class="alert alert-warning alert-dismissible fade show">
            <strong>Succes!</strong> {{ Session::get('succes') }}.
            <button type="button" class="close" data-dismiss="alert">&times;</button>
        </div>

    @endif
    <div class="container">
    @foreach($users as $user)

            <div class="card my-3">
                <div class="row p-3 ">
                    <div class="col-4">
                        Name: {{$user->name . ' ' .$user->lastname}}
                    </div>
                    <div class="col-3">
                        User email: {{$user->email}}
                    </div>
                    <div class="col-3">
                        User id: {{$user->id}}
                    </div>
                    <div class="col-2">
                        <div class="d-flex flex-row ">
                            <a href="{{route('edit', $user->id)}}" type="submit" class="btn btn-warning "
                               id="form-toggle-submit">
                                Edit
                            </a>
                            <form action="{{route('delete', $user->id)}}" method="post">
                                @csrf
                                <button type="submit" class="ml-2 btn btn-danger" id="form-toggle-submit">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    @endforeach
    </div>
@endsection
