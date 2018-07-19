@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12 align-items-center justify-content-center d-flex" style="height: 100vh">
            <div style="width: 50%">
                @foreach($posts as $post)

                    <div class="card mt-5">
                       <div class="card-body">{{ $post->content }}</div>
                    </div>
                    <div class="card-footer" style="overflow: hidden">
                        @php $date = date('d, F Y H:i', strtotime($post->created_at)) @endphp
                        <p class="card-text mb-0"><small class="text-muted"><span class="fas fa-clock-o mr-2"></span> {{ $date }}</small></p>
                        <p class="card-text mb-0"><small class="text-muted"><span class="fas fa-user mr-2"></span> {{ $post->user->name }}</small></p>
                        @if($access)
                            <div class="btn-group float-right">
                                <a class="btn-sm btn btn-warning" href="/post/edit/{{$post->id}}"><span class="fas fa-edit mr-3"></span> Edit</a>
                                <a class="btn-sm btn btn-danger" href="/post/remove/{{$post->id}}"><span class="fas fa-remove mr-3"></span> Delete</a>
                            </div>
                        @endif
                    </div>
                @endforeach
                <div class="mt-4 d-flex justify-content-center align-items-center">
                    {{ $posts->links('includes.pager') }}
                </div>
            </div>
        </div>
    </div>
@endsection
