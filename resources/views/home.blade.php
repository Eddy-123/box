@extends('layout')

@section('title', 'Acceuil')

@section('content')
    @forelse ($posts as $post)
        <div class="post-item">
            <div class="post-content">
                <h2><a href="{{ route('posts.show', [$post]) }}">{{ $post->title }}</a></h2>
                <p>{{ $post->description }}</p>
                <small>Posté par <b>{{ $post->user->name }}</b></small>
            </div>
        </div>
    @empty
        <p>Il n'y a aucun post disponible.</p>
    @endforelse
@endsection