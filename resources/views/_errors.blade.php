<div class="flash-error">
    <b>Quelques erreurs dans le formulaire:</b>
    @foreach ($errors->all() as $error)
        <p>{{ $error }}</p>
    @endforeach
</div>