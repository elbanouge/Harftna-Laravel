@extends('layouts.app')

@section('content')

    <body class="js">

        <!-- Breadcrumbs -->
        <div class="breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="bread-inner">
                            <ul class="bread-list">
                                <li><a href="index1.html">Accueil<i class="ti-arrow-right"></i></a></li>
                                <li class="active"><a href="blog-single.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumbs -->

        <!-- Start Contact -->
        <section id="contact-us" class="contact-us section">
            <div class="container">
                <div class="contact-head">
                    <div class="row">
                        <div class="col-lg-8 col-12">
                            <div class="form-main">
                                <div class="title">
                                    <h4>Contactez-nous</h4>
                                    <h3>Écrivez-nous un message</h3>
                                </div>
                                <form class="form" method="post" action="mail/mail.php">
                                    <div class="row">
                                        <div class="col-lg-6 col-12">
                                            <div class="form-group">
                                                <label>Nom<span>*</span></label>
                                                <input name="name" type="text" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <div class="form-group">
                                                <label>Objet<span>*</span></label>
                                                <input name="subject" type="text" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <div class="form-group">
                                                <label>Votre Email<span>*</span></label>
                                                <input name="email" type="email" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <div class="form-group">
                                                <label>Votre Téléphone<span>*</span></label>
                                                <input name="company_name" type="text" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group message">
                                                <label>Votre message<span>*</span></label>
                                                <textarea name="message" placeholder=""></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group button">
                                                <button type="submit" class="btn ">Envoyer</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="single-head">
                                <div class="single-info">
                                    <i class="fa fa-phone"></i>
                                    <h4 class="title">Appelez-nous :</h4>
                                    <ul>
                                        <li>+123 456-789-012</li>
                                    </ul>
                                </div>
                                <div class="single-info">
                                    <i class="fa fa-envelope-open"></i>
                                    <h4 class="title">E-mail:</h4>
                                    <ul>
                                        <li><a href="mailto:info@yourwebsite.com">PFF@PFF.PFF</a></li>
                                    </ul>
                                </div>
                                <div class="single-info">
                                    <i class="fa fa-location-arrow"></i>
                                    <h4 class="title">Notre Addresse:</h4>
                                    <ul>
                                        <li>ISTA MIRLEFT - Maroc</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ End Contact -->

        <!-- Map Section -->
        <div class="map-section">
            <div id="myMap">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55450.37527304795!2d-9.765546269670088!3d29.700970244047017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdb479f80a0432e5%3A0x4de7b30202dab839!2sTiznit%2085000!5e0!3m2!1sfr!2sma!4v1625010220745!5m2!1sfr!2sma"
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
        <!--/ End Map Section -->

    </body>
@endsection
