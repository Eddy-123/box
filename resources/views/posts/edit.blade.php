@extends('layout')

@section('title', 'Modifier le post: ' . $post->title)

@section('content')
    <h1>Modifier le post</h1>
    <form action="{{ route('posts.update', [$post]) }}" method="post">
        @csrf
        @method('put')
        <label>Titre</label>
        <input value="{{ old('title', $post->title) }}" class="@error('title') error-border @enderror" type="text" name="title">
        @error('title')
            <div class="error">
                {{ $message }}
            </div>
        @enderror

        <label>Description</label>
        <textarea class="@error('description') error-border @enderror" name="description">{{ old('description', $post->description) }}</textarea>
        @error('description')
            <div class="error">
                {{ $message }}
            </div>
        @enderror

        <button type="submit">Modifier</button>
    </form>
@endsection