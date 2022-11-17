@extends('layout')

@section('title', 'Créer un nouveau post')

@section('content')
    <h1>Nouveau post</h1>
    <form action="{{ route('posts.store') }}" method="post">
        @csrf
        <label>Titre</label>
        <input value="{{ old('title') }}" class="@error('title') error-border @enderror" type="text" name="title">
        @error('title')
            <div class="error">
                {{ $message }}
            </div>
        @enderror

        <label>Description</label>
        <textarea class="@error('description') error-border @enderror" name="description">{{ old('description') }}</textarea>
        @error('description')
            <div class="error">
                {{ $message }}
            </div>
        @enderror

        <button type="submit">Créer</button>
    </form>
@endsection