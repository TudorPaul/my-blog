@extends('layouts.app')
@section('content')
<main class="container">
    <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
        <div class="col px-0">
            <h1 class="display-4 fst-italic">{{ ucfirst($post->title) }}</h1>
            <p class="lead my-3">{!! $post->body !!}</p>
        </div>
        <div class="d-grid gap-4 d-sm-flex justify-content-sm-center">
            <a href="/blog/{{ $post->id }}/edit" class="btn btn-outline-primary mr-2">Edit Post</a>
            <form id="delete-frm" class="ml-2" action="" method="POST">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger">Delete Post</button>
            </form>
        </div>
    </div>
</main>
@endsection