@extends('layouts.app')

@section('title', 'Accueil')


@section('content')
    <div>
        <img src="{{ asset('images/flag.png') }}" alt="" width="200">
    </div>
    <h1>Hello From Casablanca !</h1>
    <p>It's currently {{ date('H:i') }}</p>
@endsection