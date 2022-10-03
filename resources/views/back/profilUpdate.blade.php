@extends('back.layout.index')

@section('content')


    <form class="card" action="/profilUpdate/{{$id_show->id}}/update" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <img class="img" src="{{ asset('storage/img/'.$id_show->img) }}" alt="">
        <input type="file" name="img" id="">
        <input value={{$id_show->nom}} name="nom" type="text">
        <input value={{$id_show->prenom}} name="prenom" type="text">
        <input value={{$id_show->age}} name="age" type="number">
        <button type="submit">editer</button>
    </form>

@endsection
