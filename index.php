<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Full stack web developer from Sweden mainly focust on the CMS system Drupal.">
    <meta name="author" content="Andreas Kleve">
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16">
    <title>Andreas Kleve</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Andreas Kleve</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#skills">Acquired Skills</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Portfolio</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#carrer">Carrer</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#team">Family</a>
                    </li>
                    <!-- <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li> -->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <?php
    $classArray = array('bg-1', 'bg-2');
    $headerClass = $classArray[rand(0, 1)];
    ?>

    <!-- Header -->
    <header class="<?php print $headerClass; ?>">
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Full Stack Web Developer</div>
                <div class="intro-heading">Andreas Kleve</div>
                <a href="#skills" class="page-scroll btn btn-xl">Acquired Skills</a>
            </div>
        </div>
    </header>

    <!-- Skills Section -->
    <section id="skills">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Acquired Skills</h2>
                    <h3 class="section-subheading text-muted">I work as a full stack web developer mainly focused on the CMS system Drupal. I have tryed others but find Drupal very flexible and fun to work with. Below I have listed some of my skills, but obviously I have other skills to, but this is some major web developer skills I possess.</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-drupal fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Drupal</h4>
                    <p class="text-muted">Extensive knowledge about backend and frontend best praxis using drupal. Understanding about the templating system. Sitebuilding and configuration. Knowlege and experience from several contributed modules that I have used during my time as a Drupal developer.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Techniques & Languages</h4>
                    <p class="text-muted">As a full stack Developer I know my way around both the backend and the frontend. Some scripting languages and techniques I us at the moment is PHP, JavaScript, JQuery, CSS, LESS, SASS, Compass, Grunt, JSON, XML, MySQL and probably many more.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-smile-o fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Social</h4>
                    <p class="text-muted">By social I do not mean I posess som awsome Facebooking skills. No, the skills I have is basiclly to be able to meet and seem really trustworthy. I enjoy making my customers happy with the way I present things and to be able to understand what it is they want. It can be harder than you think!</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Portfolio</h2>
                    <h3 class="section-subheading text-muted">Listed below are some sites I built or was part of building during my work at Happiness.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/arvsfonden.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Arvsfonden</h4>
                        <p class="text-muted">Backend, Site building</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/freys.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Freys hotel</h4>
                        <p class="text-muted">Backend, Site building</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/ki.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Karolinska institutet</h4>
                        <p class="text-muted">Backend, Site building</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/nordiska.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Nordiska museet</h4>
                        <p class="text-muted">Account manager, Backend, Frontend, Project leader, Site buildning</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/skandiamaklarna.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Skandiamäklarna</h4>
                        <p class="text-muted">Account manager, Backend, Design, Frontend, Project leader, Site building</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/nyrens.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Nyrens Arkitektkontor</h4>
                        <p class="text-muted">Backend, Frontend, Site building</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Carrer Section -->
    <section id="carrer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Career Overview</h2>
                    <h3 class="section-subheading text-muted">I started my working career with car rental for a couple of years. It gave me lots of experience with customer relations of all kind.
                        <br>The benefit of be able to borrow a new car every day was of course also great as a poor teenager...</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/carrer/ambulans-akuten.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>August 1999 - February 2011</h4>
                                    <h4 class="subheading">IT-administrator</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">I worked several years at the Department for Ambulance care and Disaster medical preparedness. At first only with economy but after some time I advanced to working with radio communication and digital medical journals for the Ambulance in Stockholm County.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/carrer/math.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>August 2007 - June 2010</h4>
                                    <h4 class="subheading">Bachelor of Computer and Systems Science at DSV in Kista</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Back to school! In 2007 I decided to get a bachelor in Computer and Systems Science due to my interest in technology and computers. At first I was not sure what I would specialize in, but it turned out to be programming after all. And especially web development.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/carrer/dsv-kista.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>June 2010 - December 2011</h4>
                                    <h4 class="subheading">Web Developer at the Department of Computer and Systems Sciences, DSV</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">After a well done Bachelor Thesis about enhancing a Drupal module I was offered employment at the University as a web developer. Primarily the work was to build an online website that fetched and converted recorded lectures to several different formats to let students be able to watch them online. I also built a couple of other sites, for example a site to register national exams.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/carrer/happiness.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>January 2012 - Present</h4>
                                    <h4 class="subheading">Web Developer at Happiness</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">The happiness begins! In the begining of 2012 I got an employment at the web agency Happiness. This was perfect and exactly what I wantend, to learn from others specialized in Drupal. At Happiness I have had the fortune to be part of several fun and learning projects with great co-workers. As a web developer, my time at Happiness have increased my knowlege and skills about web development far more than I expected. Besides my role as a web developer I am also account manager and project leader for some of our projects and I am sure it will not stop there.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>Drifting
                                    <br>into the
                                    <br>future!
                                </h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Family Section -->
    <section id="team" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">My Amazing Family</h2>
                    <h3 class="section-subheading text-muted">It´s just me and my boys...</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/andreas-river.jpg" class="img-responsive img-circle" alt="">
                        <h4>Andreas Kleve</h4>
                        <p class="text-muted">Web Developer</p>
                        <!-- <ul class="list-inline social-buttons">
                            <li><a href="https://twitter.com/solnalag"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="https://www.facebook.com/andreas.nilsson.125323"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="https://se.linkedin.com/pub/andreas-kleve/19/171/34b"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul> -->
                        <p>I will not print out phone or mail here but if you really want to get ahold of me, use the social services listed below. Based on who you are, you know which one to pick. I might ignore you if you choose the wrong one...</p>
                        <p>Or Google my name, it is not that common after all.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/dream-woman.jpg" class="img-responsive img-circle" alt="">
                        <h4>Love of my life</h4>
                        <p class="text-muted">Position up for grabs</p>
                        <!-- <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul> -->
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/children.jpg" class="img-responsive img-circle" alt="">
                        <h4>Liam and Jack aka The Kids</h4>
                        <p class="text-muted">My everything</p>
                        <!-- <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul> -->
                    </div>
                </div>
            </div>
            <!-- <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
                </div>
            </div> -->
        </div>
    </section>

    <!-- Clients Aside -->
    <!-- <aside class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/envato.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/designmodo.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/themeforest.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/creative-market.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
            </div>
        </div>
    </aside> -->

    <!-- Contact Section -->
    <!-- <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section> -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Noop, Not on this site</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="https://www.drupal.org/user/786724"><i class="fa fa-drupal"></i></a>
                        <li><a href="https://instagram.com/andreaskleve/"><i class="fa fa-instagram"></i></a>
                        </li>
                        <li><a href="https://twitter.com/solnalag"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="https://www.facebook.com/andreas.nilsson.125323"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="https://se.linkedin.com/pub/andreas-kleve/19/171/34b"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <!-- <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div> -->
            </div>
        </div>
    </footer>

    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Arvsfonden</h2>
                            <p class="item-intro text-muted"><a href="http://www.arvsfonden.se">www.arvsfonden.se</a></p>
                            <img class="img-responsive img-centered" src="img/portfolio/arvsfonden.jpg" alt="">
                            <ul class="list-inline">
                                <li>Backend, Site building</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Freys Hotel</h2>
                            <p class="item-intro text-muted"><a href="http://www.freyshotels.com">www.freyshotels.com</a></p>
                            <img class="img-responsive img-centered" src="img/portfolio/freys.jpg" alt="">

                            <ul class="list-inline">
                                <li>Backend, Site building</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Karolinska Institutet</h2>
                            <p class="item-intro text-muted"><a href="http://www.ki.se">www.ki.se</a></p>
                            <img class="img-responsive img-centered" src="img/portfolio/ki.jpg" alt="">

                            <ul class="list-inline">
                                <li>Backend, Site building</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Nordiska Museet</h2>
                            <p class="item-intro text-muted"><a href="http://www.nordiskamuseet.se">www.nordiskamuseet.se</a></p>
                            <img class="img-responsive img-centered" src="img/portfolio/nordiska.jpg" alt="">

                            <ul class="list-inline">
                                <li>Account manager, Backend, Frontend, Project leader, Site building</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>SkandiaMäklarna</h2>
                            <p class="item-intro text-muted"><a href="http://www.skandiamaklarna.se">www.skandiamaklarna.se</a></p>
                            <img class="img-responsive img-centered" src="img/portfolio/skandiamaklarna.jpg" alt="">

                            <ul class="list-inline">
                                <li>Account manager, Backend, Design, Frontend, Project leader, Site building</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Nyrens Arkitektkontor</h2>
                            <p class="item-intro text-muted"><a href="http://www.nyrens.se">www.nyrens.se</a></p>
                            <img class="img-responsive img-centered" src="img/portfolio/nyrens.jpg" alt="">

                            <ul class="list-inline">
                                <li>Backend, Frontend, Site building</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>

    <!-- Analytics tracking script -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-67511103-1', 'auto');
      ga('send', 'pageview');

    </script>

</body>

</html>
