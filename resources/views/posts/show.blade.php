@extends('layout')

@section('title', $post->title)

@section('content')
    <div class="post-item">
        <div class="post-content">
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->description }}</p>
            @can('update', $post)                
                <a href="{{ route('posts.edit', [$post]) }}">Modifier</a>
            @endcan
            @can('delete', $post)                
                <form action="{{ route('posts.destroy', [$post]) }}" method="post">
                    @csrf
                    @method('delete')
                    <button class="delete" type="submit">Supprimer</button>
                </form>
            @endcan
            <small>Posté par <b>{{ $post->user->name }}</b></small>
        </div>
    </div>
@endsection