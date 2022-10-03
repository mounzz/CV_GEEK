@extends('back.layout.index')

@section('content')

<div class="containerCard">
@foreach ($profils as $profil )

<div class="card">
    <img class="img" src="{{ asset('storage/img/'.$profil->img) }}" alt="">
    <p>nom: {{$profil->nom}}</p>
    <p>prénom: {{$profil->prenom}}</p>
    <p>âge: {{$profil->age}}</p>
    <div class="containerButton">
        <div >
            <form action="/profils/{{$profil->id}}/delete" method="POST">
                @csrf
                @method('DELETE')
                <button class="supprimer" type="submit">supprimer</button>
            </form>
        </div>
        <div>
            <a href="/profilUpdate/{{$profil->id}}">
                <button class="show" type="submit">
                    éditer
                </button>
            </a>
        </div>
        <div>
            <a href="/download/{{$profil->id}}">
                <button class="downloads" type="submit">
                    télécharger
                </button>

            </a>
        </div>

    </div>


</div>
@endforeach
</div>

@endsection
