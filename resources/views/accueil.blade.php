@extends("layouts.template")

@section("scripts")
<link rel="stylesheet" href="assets\css\accueil.css" >
<title>Bienvenue</title>   
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
@section("scripts")
<link rel="stylesheet" href="assets\css\accueil.css" >
<title>Bienvenue</title>   
@endsection
@section("content")
<section id = "accueil">
    <div class="accueil">
        <div class="container-accueil">
            <div class="accueil-text section-title ">
                <div >Le meilleur de la santé à portée de main</div>
                <div>Prenez rendez-vous avec un médecin en ligne, consultez des articles de santé, posez vos questions sur le forum et plus encore.</div>
                <a href="#appointment" id="appoitment">Prendre rendez-vous</a>
            </div>
            <div class="accueil-img">
                <img src="assets\images\accueil.jpg" alt="accueil" width="100%">
            </div>
        </div>
        <div class="wrapper_accueil" >
            
        </div>
        <div class="wrapper" width="100%" id='about'>
            <div class="photo_calendar">
                <div class="icon">
                    <img src="assets\icons\medical-appointment.svg" alt="" width="50px">
                </div>
                <h2 class="title">
                    Prendre rendez-vous
                </h2>
                <div class="text">
                    Prenez rendez-vous avec un médecin en ligne
                </div>
            </div>
            <div class="photo_calendar">
                <div class="icon">
                    <img src="assets\icons\communication.svg" alt="" width="50px">
                </div>
                <h2 class="title">
                    Forum
                </h2>
                <div class="text">
                    Posez vos questions sur le forum
                </div>
            </div>
            <div class="photo_calendar">
                <div class="icon">
                    <img src="assets\icons\virus-news.svg" alt="" width="50px">
                </div>
                <h2 class="title">
                    News
                </h2>
                <div class="text">
                    Consultez les dernières news sur la santé
                </div>
            </div>
            <div class="photo_calendar">
                <div class="icon">
                    <img src="assets\icons\medical-shop.svg" alt="" width="50px">
                </div>
                <h2 class="title">
                    Pharmacies
                </h2>
                <div class="text">
                    Trouvez les pharmacies de garde à Lomé
                </div>
            </div>
        </div>
        
    </div>
</section>
<section class="decription">
    <div class="apropo" id='about'>
        <div class="img_doc1">
            <img src="assets\images\doctor1.png" alt="" width="100%">
        </div>
        <div class="apropos_text" id='aproposdenoud'>
            HealthMate est une plateforme de santé en ligne qui vous permet de prendre rendez-vous avec un médecin en ligne, de consulter des articles de santé, de poser vos questions sur le forum et plus encore.
        </div>
    </div>
<!-- enddoctor -->
<div class="container" data-aos="fade-up" >

<div class="section-title" id="doctors">
    <h2>Nos Médecins</h2>
    <p class="nos_medecins">
        Nos médecins sont des professionnels de la santé qui ont reçu une formation médicale et qui sont autorisés à pratiquer la médecine. Ils sont spécialisés dans différents domaines de la médecine.
        
    </p>
</div>

<div class="row">

    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
        <div class="member" data-aos="fade-up" data-aos-delay="100">
            <div class="member-img">
                <img src="assets\images\doctor.jpg" class="img-fluid" alt=""  width="250px">
                <div class="social">
                    <a href="#" name="facebook"><img src="assets\images\facebook.png" alt="facebook" class="doctor_media"></a>
                    <a href="#" name="whatsapp"><img src="assets\images\whatsapp.png" alt="whatsapp" class="doctor_media"></a>
                    <a href="#" name="instagram"><img src="assets\images\instagram.png" alt="instagram" class="doctor_media"></a>
                    <a href="#" name="linkedin"><img src="assets\images\linkedin (1).png" alt="linkedin" class="doctor_media"></a>
                    <a href="#" name="twitter"><img src="assets\images\twitter.png" alt="tweeter" class="doctor_media"></a>
                </div>
            </div>
            <div class="member-info">
                <h4>Wachiou Bouraima</h4>
                <span>Chief Medical Officer</span>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
        <div class="member" data-aos="fade-up" data-aos-delay="200">
            <div class="member-img">
                <img src="assets\images\doctor-3.jpg" class="img-fluid" alt=""  width="250px">
                <div class="social">
                    <a href="#" name="facebook"><img src="assets\images\facebook.png" alt="facebook" class="doctor_media"></a>
                    <a href="#" name="whatsapp"><img src="assets\images\whatsapp.png" alt="whatsapp" class="doctor_media"></a>
                    <a href="#" name="instagram"><img src="assets\images\instagram.png" alt="instagram" class="doctor_media"></a>
                    <a href="#" name="linkedin"><img src="assets\images\linkedin (1).png" alt="linkedin" class="doctor_media"></a>
                    <a href="#" name="twitter"><img src="assets\images\twitter.png" alt="tweeter" class="doctor_media"></a>
                </div>
            </div>
            <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Anesthesiologist</span>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
        <div class="member" data-aos="fade-up" data-aos-delay="300">
            <div class="member-img">
                <img src="assets\images\doctor2.jpg" class="img-fluid" alt="" width="250px" heigh="100%">
                <div class="social">
                    <a href="#" name="facebook"><img src="assets\images\facebook.png" alt="facebook" class="doctor_media"></a>
                    <a href="#" name="whatsapp"><img src="assets\images\whatsapp.png" alt="whatsapp" class="doctor_media"></a>
                    <a href="#" name="instagram"><img src="assets\images\instagram.png" alt="instagram" class="doctor_media"></a>
                    <a href="#" name="linkedin"><img src="assets\images\linkedin (1).png" alt="linkedin" class="doctor_media"></a>
                    <a href="#" name="twitter"><img src="assets\images\twitter.png" alt="tweeter" class="doctor_media"></a>
                </div>
            </div>
            <div class="member-info">
                <h4>William Anderson</h4>
                <span>Cardiology</span>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
        <div class="member" data-aos="fade-up" data-aos-delay="400">
            <div class="member-img">
                <img src="assets\images\docteur_fille1.jpg" class="img-fluid" alt=""   width="250px">
                <div class="social">
                    <a href="#" name="facebook"><img src="assets\images\facebook.png" alt="facebook" class="doctor_media"></a>
                    <a href="#" name="whatsapp"><img src="assets\images\whatsapp.png" alt="whatsapp" class="doctor_media"></a>
                    <a href="#" name="instagram"><img src="assets\images\instagram.png" alt="instagram" class="doctor_media"></a>
                    <a href="#" name="linkedin"><img src="assets\images\linkedin (1).png" alt="linkedin" class="doctor_media"></a>
                    <a href="#" name="twitter"><img src="assets\images\twitter.png" alt="tweeter" class="doctor_media"></a>
                </div>
            </div>
            <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Neurosurgeon</span>
            </div>
        </div>
    </div>

</div>

</div>

<!-- enddoctor -->






    <div class="news_wrapped">
        <div class="section-title">

            <h2 class="title">
                 News
            </h2>
        <div class="description">
            <span> ratione mollitia voluptatibus optio libero dolores totam.</span>
        </div>
        </div>

        <div class="news_content">
            <div class="news_image">
                <img src="assets\images\corona.jpg" alt="news" width="100%">
            </div>
            <div class="news_text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Facere recusandae, voluptates maiores corrupti nisi a atque vel minus doloremque cumque dignissimos consequatur corporis 
                ratione mollitia voluptatibus optio libero dolores 
            </div>
        </div>
        <div class="news_content">
            <div class="news_image">
                <img src="assets\images\medecins (1).jpg" alt="news" width="100%">
            </div>
            <div class="text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Facere recusandae, voluptates maiores corrupti nisi a atque vel minus doloremque cumque dignissimos consequatur corporis 
                ratione mollitia voluptatibus optio libero dolores 
            </div>
        </div>
    </div>
    <div class="forum_doctor_img">
        <div class="forum">
            <div class="section-title">
            <h2 class="title">
                Venez juste discuter
            </h2>
            <div class="description">
                Venez juste discuter avec un medecin ou un pharmacien
            </div>
            </div>
            <div class="discussions">
                <div class="discussion" id="discussion1">
                    <div class="person_message">
                        <div class="person_info">
                            <span class="profile">
                                <img src="assets\images\doctor.jpg" alt="person_profile" class="person_profile" width="50px">
                            </span>
                            <span class="postby">
                                posté par
                            </span>
                            <span class="poster">
                                @Username
                            </span>
                        </div>
                        <div class="message_content">
                            Bonjour à tout la communauté HealthMate
                        </div>
                    </div>
                </div>
                <div class="discussion" id="discusson2">
                    <div class="person_message">
                        <div class="person_info">
                            <span class="profile">
                                <img src="assets\images\doctor.jpg" alt="person_profile" class="person_profile" width="50px">
                            </span>
                            <span class="postby">
                                posté par
                            </span>
                            <span class="poster">
                                @Username
                            </span>
                        </div>
                        <div class="message_content">
                            Bonjour à tout la communauté HealthMate
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="doctor2">
            <img src="assets\images\docteur_fille12.png" alt="docteur_fille12" width="100%">
        </div> -->
    </div>
    
</section>

        <!-- ======= Appointment Section ======= -->
        <section id="appointment" class="appointment section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Prendre Rendez-vous</h2>
                <p>
                    Prenez rendez-vous avec un medecin ou un pharmacien
                </p>
            </div>

            <form action="forms/appointment.php" method="post" role="form" class="php-email-form" data-aos="fade-up"
                data-aos-delay="100">
                <div class="row">
                    <div class="col-md-4 form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                    </div>
                    <div class="col-md-4 form-group mt-3 mt-md-0">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                            required>
                    </div>
                    <div class="col-md-4 form-group mt-3 mt-md-0">
                        <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone"
                            required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 form-group mt-3">
                        <input type="datetime" name="date" class="form-control datepicker" id="date"
                            placeholder="Appointment Date" required>
                    </div>
                    <div class="col-md-4 form-group mt-3">
                        <select name="department" id="department" class="form-select">
                            <option value="">Select Department</option>
                            <option value="Department 1">Department 1</option>
                            <option value="Department 2">Department 2</option>
                            <option value="Department 3">Department 3</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group mt-3">
                        <select name="doctor" id="doctor" class="form-select">
                            <option value="">Select Doctor</option>
                            <option value="Doctor 1">Doctor 1</option>
                            <option value="Doctor 2">Doctor 2</option>
                            <option value="Doctor 3">Doctor 3</option>
                        </select>
                    </div>
                </div>

                <div class="form-group mt-3">
                    <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
                </div>
                <div class="my-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit" class="btn_submit">Make an Appointment</button></div>
            </form>

        </div>
    </section><!-- End Appointment Section -->
@endsection