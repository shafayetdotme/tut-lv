@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            
            


            <h1 class="display-4">{{ $post->title }}</h1>
            <div class="col-md-6">
                <small class="text-muted">{{ $post->author->name }}</small>
            </div>
            <div class="col-md-6">
                <small class="text-muted">{{ $post->created_at->format(' H:ia D d M, Y') }}</small>
            </div>

            <div>
                {{ $post->description }}
            </div>
            
        </div>

        

    </div>
@endsection
