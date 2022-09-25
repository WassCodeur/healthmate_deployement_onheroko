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

<h1>forum</h1>


<nav class="navbar navbar-expand-md navbar navbar-dark bg-primary">  
  <a class="navbar-brand" href="#">Navbar</a>  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">  
   <span class="navbar-toggler-icon"></span>  
  </button>  
  <div class="collapse navbar-collapse" id="collapsibleNavbar">  
   <ul class="navbar-nav">  
    <li class="nav-item">  
     <a class="nav-link" href="#">Link</a>  
    </li>  
    <li class="nav-item">  
     <a class="nav-link" href="#">Link</a>  
    </li>  
    <li class="nav-item">  
     <a class="nav-link" href="#">Link</a>  
    </li>    
   </ul>  
  </div>   
 </nav>  
@endsection