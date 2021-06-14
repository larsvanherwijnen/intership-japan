@extends('layouts.admin')
@section('content')
    @foreach($companies as $company)
        <div class="container">
            <div class="card">
                <div class="row p-3">
                    <div class="col-2">
                        Company name: {{$company->comp_name}}
                    </div>
                    <div class="col-3">
                        Company address: {{$company->comp_name}}
                    </div>
                    <div class="col-3">
                        Company email: {{$company->comp_email}}
                    </div>
                    <div class="col-2">
                        Company name:<a href="https://www.youtube.com/">{{$company->comp_name}}</a>
                    </div>
                    <div class="col-2">
                        <form action="{{route('approve', $company->id)}}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-success" id="form-toggle-submit">
                                Approve
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
