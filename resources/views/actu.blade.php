@extends('layouts.template')

@section('scripts')   
@endsection

@section('navbar')
<span class="link_container">
            <a href="{{ route('home') }}" class="link  scrollto">Accueil</a>
            <a href="{{ route('forum') }}" class="link scrollto">Forum</a>
            <a href="{{ route('actu') }}" class="link scrollto">News</a>
            <a href="https://www.lome-city.com/pharmacie-de-garde-lome/" class="link scrollto">Pharmacies de gardes</a>
        </span>
        <span class="longin_signup">
            <a href="{{route('logout')}}">Logout</a>
        </span>
@endsection

@section('content')

<h1>News</h1>
@endsection