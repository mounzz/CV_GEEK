@extends('front.layout.index')


@section('content')

<form action="/create" method="POST" enctype="multipart/form-data">
    @csrf
    <h1>ajouter votre cv</h1>
    <input type="text" name="nom" id="" placeholder="nom">
    <input type="text" name="prenom" id="" placeholder="prenom">
    <input type="number" name="age" id="" placeholder="age">
    <input type="file" name="img" id="img">
    <button type="submit">envoyer</button>

</form>
@endsection
