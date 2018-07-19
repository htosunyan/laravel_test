@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12 align-items-center justify-content-center d-flex" style="height: 100vh">
            <div>
                <div class="card">
                    <form action="{{ route('login') }}" method="post">
                        <div class="card-header">
                            <h2>Login Form</h2>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Email:">
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Password:">
                            </div>
                        </div>
                        {{ csrf_field() }}
                        <div class="card-footer text-center">
                            <button class="btn btn-secondary" type="reset">Reset</button>
                            <button class="btn btn-success" type="submit">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
