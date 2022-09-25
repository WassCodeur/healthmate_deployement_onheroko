@extends('layouts.template')

@section('scripts')   
<title>Inscription</title>   
@endsection

@section('navbar')
<span class="link_container">
            <a href="/" class="link  scrollto">Accueil</a>
            <a href="#about" class=" link  scrollto">A propos</a>
            <a href="#doctors" class="link rollto">Nos médecins</a>
            <a href="{{ route('connexion') }}" class="link scrollto">Forum</a>
            <a href="{{ route('news') }}" class="link scrollto">News</a>
            <a href="https://www.lome-city.com/pharmacie-de-garde-lome/" class="link scrollto">Pharmacies de gardes</a>
        </span>
        <span class="longin_signup">
            <a href="{{ route('connexion') }}" class="longin">Se connecter</a>
            <a href="{{ route('inscription') }}" class="signup">S'inscrire</a>
        </span>
@endsection



@section('content')
<section class="inscription_container">
    <div class=" account">
            <div class="welcome_field">
                <div class="signup_title">
                    Bienvenue à nouveau
                </div>
                <div class="donthaveaccout">
                    Vous avez déjà un compte ? génial
                    <a href="{{ route('connexion') }}" class="link">Connectez-vous</a>
                </div>
            </div>
            <div class="login_field">
                <div class="connexiontitle">
                    Inscription
                </div>
                <div class="apifac">
                    <span class="with">
                        Avec :
                    </span>
                    <span class="googleapi">
                        <a href="#">
                            <img src="assets\icons\logo-google-glass.png" alt="google" width="15px">
                        </a>
                    </span>
                    <span class="facebookapi">
                        <a href="#">
                            <img src="assets\icons\facebook (1).png" alt="facebook" width="15px">
                        </a>
                    </span>
                    <span class="instagramapi">
                        <a href="#">
                            <img src="assets\icons\instagram (1).png" alt="instagram" width="15px">
                        </a>
                    </span>
                </div>
                <div>
                    Ou utilisez vos informations personnelles
                </div>
            <form action="{{ route('create')}}" method="post">
            
            @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
            @endif
            @if(Session::has('fail'))
            <div class="alert alert-danger">
                {{Session::get('fail')}}
            </div>
            @endif
            @csrf
                    <input type="text" placeholder="Nom" name="lastename" value="{{old('lastename')}}" required class="input_account">
                    <span class="text-danger">@error('lastname') {{$message}} @enderror</span>
                    <input type="text" placeholder="Prénom" name="firstname" value="{{old('firstname')}}" required class="input_account">
                    <span class="text-danger">@error('firstname') {{$message}} @enderror</span>
                    <input type="email" placeholder="email" name="email"  value="{{old('email')}}" required class="input_account">
                    <span class="text-danger">@error('email') {{$message}} @enderror</span>
                    <input type="password" placeholder="Password" name="password" required class="input_account">
                    <span class="text-danger">@error('password') {{$message}} @enderror</span>
                    <input type="password" placeholder="Confirm" name="passwordcomfirm" required class="input_account">
                    <span class="text-danger">@error('passwordcomfirm') {{$message}} @enderror</span>
                    <input type="submit" value="INSCRIPTION" class="btn_submit" id="submit_accounnt">
                </form>
            </div>

        </div>
    </section>
@endsection