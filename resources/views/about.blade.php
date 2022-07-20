@extends('layouts.app')
@section('title', 'About us')

@section('content')
    <div>
        <img src="{{ asset('images/profil.JPG') }}" alt="" class="img-profil">
    </div>
    <a href="{{ route('home') }}">Revenir sur la page d'acceuil</a>
@endsection