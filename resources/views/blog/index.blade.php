@extends('layouts.app')
@section('content')
    
    <main class="container">
    <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
            <h1 class="display-4 fst-italic">Our Blog!</h1>
            <p class="lead my-3">Enjoy reading our posts. Click on a post to read!</p>
        </div>
    </div>
    <div class="row g-5"> 
        <div class="col g-5">          
            @forelse($posts as $post)
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <h3 class="mb-0">{{ ucfirst($post->title) }}</h3>
                    <p class="card-text mb-auto">{{ Illuminate\Support\Str::limit($post->body, 20) }} ...</p>
                    <a href="./blog/{{ $post->id }}" class="stretched-link">Continue reading</a>
                </div>
            </div>
            @empty
                <p class="text-warning">No blog Posts available</p>
            @endforelse
        </div>
        <div class="col-md-4">
                    <div class="position-sticky" style="top: 2rem;">
                        <div class="p-4 mb-3 bg-light rounded">
                            <h4 class="fst-italic">About</h4>
                            <p class="mb-0">Customize this section to tell your visitors a little bit about your publication, writers, content, or something else entirely. Totally up to you.</p>
                        </div>
                        <div class="p-4 mb-3 bg-light rounded">
                            <p class="mb-0">Create new Post</p>
                            <a href="/blog/create/post" class="btn btn-primary btn-sm">Add Post</a>
                        </div>
                    </div>
                </div>    
    </div>
    </div>
    </main>
@endsection