@foreach($user as $GetPost)
@extends('layouts.app')

@section('home')

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Creative - Start Bootstrap Theme</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- Third party plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        
        <!-- Masthead-->
        <header class="masthead">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end">
                        <h1 class="display-1 text-uppercase text-white font-weight-bold ">ECE Ebay</h1>
                        <hr class="divider my-4" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 font-weight-light mb-5">Bienvenue a ECE ebay, le meilleur site de vente de tout ECE Paris</p>
                        <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Découvrir plus</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="page-section bg-primary" id="about">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">Tout vos antiquité que vous cherchez en un click!</h2>
                        <hr class="divider light my-4" />
                        <p class="text-white-50 mb-4">Vendez, achetez et negocier vos antiquité tout a un endroit! Qu'est ce que vous<br> attendez commencer a acheter et vendre de maintenant</p>
                        <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Commencez maintenant!</a>
                    </div>
                </div>
            </div>
        </section>
                <!-- Portfolio-->
        <section id="portfolio">
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="/profile"
                            ><img class="img-fluid rounded" src="{{$GetPost->avatar}}" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">modifier votre profile</div>
                                <div class="project-name">Bienvenue {{$GetPost->name}}</div>
                            </div></a>
                              </div>

                       <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="/profile"
                            ><img style="height:150px;width:150px" class="ml-5 pl-4 mt-4 mb-5" src="{{URL::to('/')}}/images/11111.png" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Acceder a</div>
                                <div class="project-name">votre panier</div>
                            </div></a>
                         </div>
                </div>
            </div>
        </section>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <h2 class="text-center mt-0">A votre service</h2>
                <hr class="divider my-4" />
                <div class="row">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-gem text-primary mb-4"></i>
                            <h3 class="h4 mb-2">Produit 100% garentie</h3>
                            <p class="text-muted mb-0">Tout les produits sont verifier et approuvé par nos experts</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-laptop-code text-primary mb-4"></i>
                            <h3 class="h4 mb-2">Service cleint 24/7</h3>
                            <p class="text-muted mb-0">Un service client present et toujours a votre ecoute.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-globe text-primary mb-4"></i>
                            <h3 class="h4 mb-2">On livre encore</h3>
                            <p class="text-muted mb-0">Malgré le COVID nous continuons assurez la livraison de votre colis</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-heart text-primary mb-4"></i>
                            <h3 class="h4 mb-2">Made with Love</h3>
                            <p class="text-muted mb-0"></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call to action-->
        <section class="page-section bg-dark text-white">
            <div class="container text-center">
                 <h2 class="mb-4">Si vous etes pas inscrit,<br> inscrivez vous des maintenant</h2>
                 <a class="btn btn-light btn-xl" href="/register">Register Now</a>
            </div>
        </section>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="mt-0">Restons en contact!</h2>
                        <hr class="divider my-4" />
                        <p class="text-muted mb-5">Vous voulez venir en contact avec nous! N'hesiter pas on vous repondrai le plus tot possible</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
                        <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
                        <div>+33 782019887</div>
                    </div>
                    <div class="col-lg-4 mr-auto text-center">
                        <i class="fas fa-envelope fa-3x mb-3 text-muted"></i
                        ><!-- Make sure to change the email address in BOTH the anchor text and the link target below!--><a class="d-block" href="mailto:ECEbay@ece.com">ECEbay@ece.com</a>
                    </div>
               
                </div>
            </div>
        </section>
        <!-- Footer-->
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>















@stop


@section('footer')
copy rights by ECE ebay
@stop
  @endforeach