<?php require_once('header.php'); ?>


<body id="top">
    
    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader" class="dots-jump">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- header
    ================================================== -->
    <header class="s-header">

        
        <div class="">
            <a href="index.php">
                <img class="home-logo" src="images/logo.png" alt="Homepage">
            </a>
            <div class="login">
                <a href="se_connecter.php">
                    Se connecter
                </a>
            </div>
    
        </div> <!-- end header-logo -->

        <nav class="header-nav">

            <a href="#0" class="header-nav__close" title="close"><span>Close</span></a>

            <h3>Navigate to</h3>

            <div class="header-nav__content">
                
                <ul class="header-nav__list">
                    <li><a class="smoothscroll"  href="index.php" title="home">Accueil</a></li>
                    <li><a class="smoothscroll"  href="animation.php" title="animation">Animation</a></li>
                    <li><a class="smoothscroll"  href="carte.php" title="menu">Menu</a></li>
                    <li><a class="smoothscroll"  href="#works" title="partenaire">Partenaire</a></li>
                    <li><a class="smoothscroll"  href="#contact" title="contact">Contact</a></li>
                </ul>
    
    
                <ul class="header-nav__social">
                    <li>
                        <a href="#0"><i class="fab fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fab fa-behance"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fab fa-dribbble"></i></a>
                    </li>
                </ul>

            </div> <!-- end header-nav__content -->

        </nav> <!-- end header-nav -->


        <a class="header-menu-toggle" href="#0">
            <span class="header-menu-icon"></span>
        </a>

    </header> <!-- end s-header -->


    <!-- home
    ================================================== -->
    <section id="home" class="s-home page-hero target-section" data-parallax="scroll" data-image-src="images/hero-bg.jpg" data-natural-width=3000 data-natural-height=2000 data-position-y=center>

        <div class="home-content">

            <div class="row home-content__main">

                <h2>
                La Guinguette d'Orleans
                </h2>

                <h3>
                    Guinguette, bar, restaurant, bal, Concerts, jeux de plein air...  
                    près d'Orleans en Loiret (45)
                </h3>

                <div class="reservation">
                    <button><a href="reservation.php"></a>RÉSERVATION</button>
                </div>
            
            </div> <!-- end home-content__main -->

            <div class="home-content__scroll">
                <a href="#about" class="scroll-link smoothscroll">
                    Scroll
                </a>
            </div>

        </div> <!-- end home-content -->

        <ul class="home-social">
            <li>
                <a href="#0"><i class="fab fa-facebook-f" aria-hidden="true"></i><span>Facebook</span></a>
            </li>
            <li>
                <a href="#0"><i class="fab fa-twitter" aria-hidden="true"></i><span>Twiiter</span></a>
            </li>
            <li>
                <a href="#0"><i class="fab fa-instagram" aria-hidden="true"></i><span>Instagram</span></a>
            </li>
            <li>
                <a href="#0"><i class="fab fa-behance" aria-hidden="true"></i><span>Behance</span></a>
            </li>
            <li>
                <a href="#0"><i class="fab fa-dribbble" aria-hidden="true"></i><span>Dribbble</span></a>
            </li>
        </ul> <!-- end home-social -->



    </section> <!-- end s-home -->


    <!-- about
    ================================================== -->
    <section id="about">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-4">
                    <div class="col-block item-process" data-aos="fade-up">
                        <div class="item-process__text">
                            <a href="Animation.html" class="LienImageAbout"><img class="Logo" src="images/Animation.png" alt="Logo Animation"></a>
                            <p class="LienAbout"><a href="Animation.html" class="LienAbout Lien">Animation</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="col-block item-process" data-aos="fade-up">
                        <div class="item-process__text">
                            <a href="carte.php" class="LienImageAbout"><img class="Logo" src="images/Menu.png" alt="Logo Menu"></a>
                            <p class="LienAbout"><a href="carte.php" class="LienAbout Lien">Menu</a></p>
                        </div>
                    </div>
                </div>
              </div>
        </div>


    </section> <!-- end s-about -->


    <!-- Actualités
    ================================================== -->
    <section id='services' class="s-services target-section darker">

        <div class="row section-header bit-narrow" data-aos="fade-up">
            <div class="col-full">
                <h1 class="display-1 ActuTitre">Actualités</h1>
                <div id="Carrousel">
                    <a class="LienFleche" onclick="gauche()"><img class="Fleche" id="FlecheGauche" src="images/gauche.png" alt="Flèche gauche"></a>
                    <div id="News">
                        <div class="Actu" id="Actu1">
                            <blockquote class="twitter-tweet" data-lang="fr" data-theme="dark" ><p lang="fr" dir="ltr">[JPO 2021]<br><br>Pour celles/ceux qui n’ont pas encore trouvé leur voie, les Portes Ouvertes se tiendront le<br> <br> 📌Samedi 4 septembre 📌<br><br>📍RDV dans les locaux de l’Aftec à partir de 14h <br><br>À très vite, en présentiel 👋😷 <a href="https://t.co/9FvPiDQ2G2">pic.twitter.com/9FvPiDQ2G2</a></p>&mdash; FORMATION AFTEC (@formationaftec) <a href="https://twitter.com/formationaftec/status/1430071871383425032?ref_src=twsrc%5Etfw">24 août 2021</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        </div>
                        <div class="Actu" id="Actu2">
                            <blockquote class="twitter-tweet" data-lang="fr" data-theme="dark" ><p lang="fr" dir="ltr">[RAPPEL TEMPS D’INFORMATION]<br><br>Nouveau temps d’information en VISIO sur TEAMS, pour les formations en alternance.<br><br>📍 Campus d’Orléans et de Tours<br>📌 RDV le mercredi 25 août à 14h<br>🔗 <a href="https://t.co/KtNWWt53CZ">https://t.co/KtNWWt53CZ</a> <a href="https://t.co/J59SlAtZPS">pic.twitter.com/J59SlAtZPS</a></p>&mdash; FORMATION AFTEC (@formationaftec) <a href="https://twitter.com/formationaftec/status/1428620419523829762?ref_src=twsrc%5Etfw">20 août 2021</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        </div>
                        <div class="Actu" id="Actu3">
                            <blockquote class="twitter-tweet" data-lang="fr" data-dnt="true" data-theme="dark" id="Actu3"><p lang="fr" dir="ltr">✨ C’est avec beaucoup de fierté que nous vous annonçons notre double certification Qualiopi &amp; ISO 9001 ! ✨ <a href="https://t.co/t0bQ99Sk14">pic.twitter.com/t0bQ99Sk14</a></p>&mdash; FORMATION AFTEC (@formationaftec) <a href="https://twitter.com/formationaftec/status/1427540148741419021?ref_src=twsrc%5Etfw">17 août 2021</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        </div>
                    </div>
                    <a class="LienFleche" onclick="droite()"><img class="Fleche" id="FlecheDroite" src="images/droite.png" alt="Flèche droite"></a>
                </div>
            </div>
        </div> <!-- end section-header -->

    </section> <!-- end s-services -->


    <!-- works
    ================================================== -->
    <section id="works" class="s-works target-section">

        <div class="Partenaire" data-aos="fade-up">
           <div class="col-3">
               <img class="guide-routard" src="images/Guide-du-routard.jpg">
           </div>
           <div class="col-3">
               <img class="loire-a-velo" src="images/la_loire_a_velo.png">
           </div>
        </div>
        <div class="Partenaire">
            <div class="col-3">
                <p>Recommandé par le Guide Routard</p>
            </div>
            <div class="col-3">
                <p>Membre du réseau Loire à vélo</p>
            </div>
        </div> <!-- end section-header -->

    </section> <!-- end s-works -->


    <!-- clients
    ================================================== -->
    <section id="clients" class="s-clients target-section darker">

        
            <div id="mapid"></div>
        <div class="horraire">
            <p>Lundi - Vendredi: 11h-15h 18h-23h</p>
            <p>Samedi: 11h-15h 18h-23h</p>
            <p>Dimanche: 11h-15h 18h-23h</p>
           
        </div>
        <div class="handicape">
            <img src="images/hand.jpg" alt="handicapé" class="img_hand">
            <ul>
                <li>Une rampe d'accès</li>
                <li>4 places de parking handicapé</li>
            </ul>
        </div>
       
        <<!--div class="row section-header text-center narrow" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">Our Clients</h3>
                <h1 class="display-1">Who we have work with</h1>
            </div>
        </div> <!-- end section-header -->

        <!--<div class="row clients-wrap" data-aos="fade-up">
            <div class="col-twelve">
                <ul class="clients">
                    <li><a href="#0">Uber</a></li>
                    <li><a href="#0">Spotify</a></li>
                    <li><a href="#0">Grab</a></li>
                    <li><a href="#0">Dropbox</a></li>
                    <li><a href="#0">IBM</a></li>
                    <li><a href="#0">Microsoft</a></li>
                    <li><a href="#0">Xiaomi</a></li>
                    <li><a href="#0">Adidas</a></li>
                    <li><a href="#0">Mozilla</a></li>
                    <li><a href="#0">Apple</a></li>
                    <li><a href="#0">Google</a></li>
                    <li><a href="#0">Asus</a></li>
                </ul>
            </div>
        </div>--> 

    </section> <!-- end s-clients -->


    <!-- testimonies
    ================================================== -->
    <!-- <section class="s-testimonials">

        <div class="testimonials__icon" data-aos="fade-up"></div>

        <div class="row testimonials narrow">

            <div class="col-full testimonials__slider" data-aos="fade-up">

              <div class="testimonials__slide">
                    <p>Qui ipsam temporibus quisquam vel. Maiores eos cumque distinctio nam accusantium ipsum. 
                    Laudantium quia consequatur molestias delectus culpa facere hic dolores aperiam. Accusantium quos qui praesentium corpori.</p>
                    <div class="testimonials__author">
                        Tim Cook
                        <span>CEO, Apple</span>
                    </div>
                </div>  end testimonials__slide 

                <div class="testimonials__slide">
                    <p>Excepturi nam cupiditate culpa doloremque deleniti repellat. Veniam quos repellat voluptas animi adipisci.
                    Nisi eaque consequatur. Quasi voluptas eius distinctio. Atque eos maxime. Qui ipsam temporibus quisquam vel.</p>
                    <div class="testimonials__author">
                        Sundar Pichai
                        <span>CEO, Google</span>
                    </div>
                </div> end testimonials__slide 

                <div class="testimonials__slide">
                    <p>Repellat dignissimos libero. Qui sed at corrupti expedita voluptas odit. Nihil ea quia nesciunt. Ducimus aut sed ipsam.  
                    Autem eaque officia cum exercitationem sunt voluptatum accusamus. Quasi voluptas eius distinctio.</p>
                    <div class="testimonials__author">
                        Satya Nadella
                        <span>CEO, Microsoft</span>
                    </div>
                </div> end testimonials__slide 
                
            </div>  end testimonials__slider 

        </div>  end testimonials 

    </section>  end s-testimonials 

-->
    <!-- contact
    ================================================== -->
    <section id="contact" class="s-contact target-section">

            <div class="grid-overlay">
                <div></div>
            </div>

        <div class="row section-header narrow" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">Keep In Touch</h3>
                <h1 class="display-1">Pour commander <br> n'hésitez pas à nous contacter</h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row contact-main" data-aos="fade-up">
            <div class="col-full">
                <p class="contact-email">
                    <a href="mailto:#0">guinguette@restaurant.com</a>
                </p>
                <p class="contact-address">
                45 Place du Martroi <br>
                45000 Orléans
                </p>
                <p class="contact-numbers">
                    02 38 63 89 56 
                </p>

                <ul class="contact-social">
                    <li>
                        <a href="#0"><i class="fab fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fab fa-behance"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fab fa-dribbble"></i></a>
                    </li>
                </ul>
            </div>
        </div>

    </section> <!-- end s-contact -->


    <!-- footer
    ================================================== -->
    <footer>
        <div class="row">
            <div class="col-full ss-copyright">
                <span>© Copyright Sublime 2018</span> 
                <span>Design by <a href="https://www.styleshout.com/">Styleshout</a></span>
                <span>Re-Distributed by <a href="https://www.themewagon.com/">ThemeWagon</a></span>
            </div>
        </div>

        <div class="ss-go-top">
            <a class="smoothscroll" title="Back to Top" href="#top">Back to Top</a>
        </div>
    </footer>


    <!-- photoswipe background
    ================================================== -->
    <div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">

        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">

            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Close (Esc)"></button> <button class="pswp__button pswp__button--share" title=
                    "Share"></button> <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button> <button class="pswp__button pswp__button--zoom" title=
                    "Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button> <button class="pswp__button pswp__button--arrow--right" title=
                "Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>

        </div>

    </div> <!-- end photoSwipe background -->


    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <script src="js/notrejs.js"></script>

</body>