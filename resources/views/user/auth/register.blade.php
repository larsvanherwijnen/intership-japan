@extends('layouts.app')
@section('content')
    <div class="PageBG PageBG--login">
        <div class="container">
            <div class="row">
                <div class="col-md-12 min-vh-100 d-flex flex-column justify-content-center">
                    <div class="col-lg-6 col-md-8 mx-auto">
                        <div class="card rounded shadow shadow-sm">
                            <div class="card-header">
                                <h3 class="mb-0">Register account</h3>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('register') }}" method="post">
                                    @csrf
                                    @include('user.auth.registerStep.userFunc')
                                    @include('user.auth.registerStep.userInfo')
                                    @include('user.auth.registerStep.userRoleInfo')
                                    @include('user.auth.registerStep.conformation')
                                    <div class="text-right">
                                        <button type="button" class="btn btn-primary" id="form-toggle-backwards"
                                                style="display: none;">Previous
                                        </button>
                                        <button type="button" class="btn btn-primary" id="form-toggle-forwards">Next
                                        </button>
                                        <button type="submit" class="btn btn-primary" id="form-toggle-submit"
                                                style="display: none;">
                                            Register
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

