@extends('layouts.app')

@section('content')
    <div class="container">
        @if (Request::get('tags'))
            <h1 class="font-weight-lighter">POST : {{ Request::get('tags') }}</h1>
        @else
            <h1 class="font-weight-lighter">POSTS</h1>
        @endif
        
        <div class="row">
            @forelse($posts as $post)
                
                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="card-body">
                            <a href="{{ route('posts.show', ['post' => $post->id]) }}">
                                <h5 class="card-title">{{ $post->title }}</h5>
                            </a>
                            <p class="card-text">
                                {{ $post->description }}
                            </p>
                            <p class="card-text">
                                <div class="row">
                                    <div class="col-md-6">
                                        <small class="text-muted">{{ $post->created_at->format(' H:ia D d M, Y') }}</small>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <small class="text-muted">Author: {{ $post->author->name }}</small>
                                    </div>
                                </div>
                            </p>
                        </div>
                    </div>
                </div>
            @empty

                <p>No Post found</p>
            
            @endforelse
        </div>
        <div class="row">
            {{ $posts->Links() }}
        </div>
        

    </div>
@endsection
