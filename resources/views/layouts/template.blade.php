<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets\css\index.css" >
    <link rel="stylesheet" href="assets\css\rendezvous.css">
    <link rel="stylesheet" href="assets\css\medecins.css">
    <link href="assets\css\bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets\fonts\fontawesome-free\css\all.min.css">
    <link rel="icon" type="image/svg" sizes="16x16" href="assets\icons\medical-sign.svg">
    @yield('scripts')
</head>
<body>
<header>
<div class="container_header">
    <div class="logo">
        <img src="assets\icons\medical-sign.svg" alt="logo" class="logo_img">
        
    </div>
    <div class="navbar order-last order-lg-0">
         @yield('navbar')
    </div>
    <nav class="menu_burger">
                <div class="menu_contener">
                    <ul>
                        <li>
                            <a href="/" class="link">
                                Accueil
                            </a>
                        </li>
                        <li>
                            <a href="###" class="link">
                                A propos
                            </a>
                        </li>
                        <li>
                            <a href="###" class="link">
                                Nos médecins
                            </a>
                        </li>
                        <li>
                            <a href="###" class="link">
                                Forum
                            </a>
                        </li>
                        <li>
                            <a href="###" class="link">
                                News
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div>
                <a href="##" class"burger"><i class="fa-solid fa-bars"></i></a>
            </div>
    </div>
    
</header>
    @yield('content')
<footer>
    <div class="footer_content">
        <div class="logo">
            <img src="assets\icons\medical-sign.svg" alt="logo" class="logo_img">    
        </div>
        <div class="ressources">
            <div class="ressource_title">
                RESSOURCES
            </div>
            <div class="footer_text">
                <a href="" class="link">A Propos</a>
            </div>
            <div class="footer_text">
                <a href="" class="link">Astuces</a>
            </div>
            <div class="footer_text">
                <a href="" class="link">Sponsores</a>
            </div>
        </div>
        <a href="" class="link"></a>
        <div class="legal">
            <div class="tite_legal">
                LEGAL
            </div>
            <div class="footer_text">
                <a href="" class="link">Conditions d'utilisation</a>
            </div>
            <div class="footer_text">
                <a href="" class="link">Confidentalité</a>
            </div>
            <div class="footer_text">
                <a href="" class="link">Code de Coduite</a>
            </div>
            <div class="footer_text">
                <a href="" class="link">FAQ</a>
            </div>
        </div>
        <div class="contacts_abonne">
            <div class="call_to_abonne">
                ABONNEZ-VOUS
            </div>
            <div class="abonne_description">
                <div>
                    <p>
                        Recevez nos dernières actualités et nos offres exclusives
                    </p>
            </div>
            <form action="{{ route('newsletter') }}" method="post" class="inputs newsletter">
                @csrf
                <input type="email" placeholder="email:" name="email" class="email_abonné" required>
                <input type="submit" value="Abonner" class="btn_submit">
            </form>
            <div class="follow_us_on_socialmedia">
                <div class="follow">
                    Suivez Nous
                </div>
                <div class="social-links mt-3">
                    <a href="#" name="facebook"><img src="assets\images\facebook.png" alt="facebook" class="media"></a>
                    <a href="#" name="whatsapp"><img src="assets\images\whatsapp.png" alt="whatsapp" class="media"></a>
                    <a href="#" name="instagram"><img src="assets\images\instagram.png" alt="instagram" class="media"></a>
                    <a href="#" name="linkedin"><img src="assets\images\linkedin (1).png" alt="linkedin" class="media"></a>
                    <a href="#" name="twitter"><img src="assets\images\twitter.png" alt="tweeter" class="media"></a>
                </div>
            </div>
        </div>
        <span class="copyright">&copy; Copyright <strong >WassCodeur</strong>. All Rights Reserved </span>
    </div>
</footer>
</body>
</html>