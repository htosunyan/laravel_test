@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12 align-items-center justify-content-center d-flex" style="height: 100vh">
            <div>
                <div class="card">
                    <form action="{{ route('register') }}" method="POST">
                        <div class="card-header">
                            <h2>Registration Form</h2>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="email">Name:</label>
                                <input type="name" name="name" id="name" class="form-control" placeholder="Name:">
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Email:">
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Password:">
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation">Password Confirmation:</label>
                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Password Confirmation:">
                            </div>
                        </div>
                        {{ csrf_field() }}
                        <div class="card-footer text-center">
                            <button class="btn btn-secondary" type="reset">Reset</button>
                            <button class="btn btn-success" type="submit">Registration</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
