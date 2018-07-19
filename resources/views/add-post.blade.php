@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12 align-items-center justify-content-center d-flex" style="height: 100vh">
            <div style="width: 50%">
                <div class="card">
                    <form action="{{ $post ? '/post/edit/'.$post->id : '/add-post' }}" method="post">
                        <div class="card-header text-center">
                            <h2>Add new post</h2>
                        </div>
                        <div class="card-body">
                            <textarea class="form-control" name="post" rows="7" style="resize: none">{{ $post ? $post->content : '' }}</textarea>
                        </div>
                        {{ csrf_field() }}
                        <div class="card-footer text-center">
                            <button class="btn btn-secondary" type="reset">Reset</button>
                            <button class="btn btn-success" type="submit">{{ $post ? 'Edit' : 'Add' }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
