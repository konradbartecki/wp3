<!DOCTYPE html>
<html lang="en">

<head>
    <?php require('meta.php'); ?>

    <title>Wirtualne Powiaty WP3</title>

    <!-- Add custom CSS here -->
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/stylish-portfolio.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
</head>

<body>
    
    <?php require('navbar.php'); ?>
    <!-- Full Page Image Header Area -->
    <div id="top" class="header">
        <div class="vert-text animated fadeInDown">
            <h1><img src="img/wp3logow.png" alt="Wirtualne Powiaty"></h1>
            <h3>Europejski projekt informatyzacji powiatu Łęczyńskiego</h3>
            <a href="#home" class="btn btn-default btn-lg">Przewiń niżej</a>
        </div>
    </div>
    <!-- /Full Page Image Header Area -->

    <!-- Intro -->
    <div id="home" class="intro">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <h2>Wychodzimy naprzeciw potrzebom mieszkanców regionu</h2>
                    <p class="lead">Chcemy aby każdy mieszkaniec powiatu łęczyńskiego, włodawskiego i świdnickiego oraz wszyscy odwiedzający nasz region mieli możliwość wyszukania potrzebnych informacji czy tez sprawdzenia skrzynki e-mail. </p>
                    <a class="btn btn-primary btn-lg" href="http://www.flickr.com/photos/wirtualnepowiaty/">Zobacz galerie</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /Intro -->

    <!-- Services -->
    <div id="about" class="services">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center">
                    <h2>Co robimy</h2>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 col-md-offset-2 text-center">
                    <div class="service-item">
                        <i class="service-icon fa fa-phone"></i>
                        <h4>Telefonia IP</h4>
                        <p>Projekt WP3 wdraża techonologie telefonii IP w trzynastu partnerskich gminach.</p>
                    </div>
                </div>
                <div class="col-md-2 text-center">
                    <div class="service-item">
                        <i class="service-icon fa fa-cloud"></i>
                        <h4>Sieć</h4>
                        <p>Rozwijamy i przyspieszamy sieć na terenie powiatu Łęczyńskiego łącząc wiele strategicznych punktów kablem światłowodowym.</p>
                    </div>
                </div>
                <div class="col-md-2 text-center">
                    <div class="service-item">
                        <i class="service-icon fa fa-book"></i>
                        <h4>System biblioteczny</h4>
                        <p>Umożliwi tworzenie elektronicznego katalogu bibliotecznego oraz bazy użytkowników placówek.</p>
                    </div>
                </div>
                <div class="col-md-2 text-center">
                    <div class="service-item">
                        <i class="service-icon fa fa-rss"></i>
                        <h4>Hot-spot</h4>
                        <p>Planujemy otworzyć ponad 260 publicznych bezprzewodowych punktów dostępu do internetu.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center">
                    <hr>
                    <a class="btn btn-primary btn-lg" href="/oprojekcie.php">Dowiedz się więcej</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /Services -->

    <!-- Map -->
    <div id="contact" class="map">
        <iframe id="gmap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2494.627375662693!2d22.88621294999999!3d51.29958100000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4723b2a69a418fdb%3A0xbc31ce6c97a3e7d0!2sStarostwo+Powiatowe+w+%C5%81%C4%99cznej!5e0!3m2!1spl!2spl!4v1393334352400" width="600" height="650" frameborder="0" style="border:0"></iframe>
        <div class="container">
            <div class="row">         
                <div class="col-md-4 col-md-offset-4 text-center">
                    <h2>Kontakt</h2>
                    <hr>
                    <?php
                    if(!empty($_POST)){
                        
                     if(empty($_POST['name'])   ||    
                        empty($_POST['email'])  ||
                        empty($_POST['message'])||   
                        !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))    
                        {
                           echo '<div class="alert alert-warning">
                                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                  <strong>Nie można wysłać wiadomości.</strong> Upewnij się, że wszystkie pola zostały wypiełnione poprawnie.
                                  </div>';  
                        } else{
                            $name = $_POST['name'];
                            $email = $_POST['email'];
                            $message = $_POST['message'];
                            $from = 'From: Wirtualnepowiaty.pl'; 
                            $to = 'wp3@powiatleczynski.pl'; 
                            $subject = 'Formularz kontaktowy';
                      
                            $body = "Od: $name\n E-Mail: $email\n Wiadomosc:\n $message";
                              if (mail ($to, $subject, $body, $from)) { 
                                  echo '<div class="alert alert-success">
                                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                  Wiadomość została wysłana
                                  </div>';
                              }
                              else { 
                                echo '<div class="alert alert-danger">
                                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                  Coś poszło nie tak. Wiadomość nie została wysłana. Skontaktuj się z administratorem.
                                  </div>'; 
                            }
                        }
                    }
                    
                      
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-md-offset-1">
                    <h3 class="text-center">Wydział Funduszy Europejskich, Informatyzacji, Rozwoju i Promocji</h3>
                    <p>Al. Jana Pawła II 95 A <br>
                    21-010, Łęczna<br>
                    <i class="fa fa-phone"></i> Tel: +48 81 752 64 23<br>
                    <i class="fa fa-print"></i> Fax: +48 81 752 64 64<br>
                    <i class="fa fa-envelope"></i> Email: wp3@powiatleczynski.pl </p>
                    <p><strong>Kontakt w godzinach</strong><br>
                    Poniedziałek, środa, czwartek, piątek: 8:00 - 15:00<br>
                    Wtorek: 8:00-16:00</p>
                    <p><strong>Małgorzata Kolary-Woźniak</strong> - Naczelnik FIRP<br>
                    <i class="fa fa-phone"></i> Tel: +48 81 752 64 20<br>
                    <strong>Rafał Kloc</strong> - Zastępca naczelnika FIRP<br>
                    <i class="fa fa-phone"></i> Tel: +48 81 752 64 22<br>
                    <strong>Dominika Sacawa</strong> - Koordynator projektu<br>
                    <i class="fa fa-phone"></i> Tel: +48 81 752 64 23<br>
                    <strong>Natalia Golonka</strong> - Asystent koordynatora projektu<br>
                    <i class="fa fa-phone"></i> Tel: +48 81 752 64 23<br></p>      
                </div>
                <div class="col-md-3 col-md-offset-4">
                    <h3 class="text-center">Formularz kontaktowy</h3>
                    <form class="well" action="index.php#contact" method="POST" name="contactForm">
                        <div class="control-group">
                            <div class="controls">
                                <input class="form-control" name="name" id="name" type="text" placeholder="Imie i nazwisko"/>
                            </div>
                        </div>
                    <!-- Email -->
                        <div class="control-group">
                            <div class="controls">
                                <input class="form-control" name="email" id="email" type="email" placeholder="Email"/>
                            </div>
                        </div>
                    <!--Message -->
                        <div class="control-group">
                            <div class="controls">
                                <textarea class="form-control" rows="3" name="message" id="message" placeholder="Wiadomość..."></textarea>
                            </div>
                        </div>
                        <div id="success"></div>
                         <!-- For success/fail messages -->
                         <button type="submit" id="submit" class="btn btn-primary" >Wyślij</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- -->
    </div>
    <!-- /Map -->
    
    <?php require('footer.php'); ?>

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

    <!-- Custom JavaScript for the Side Menu and Smooth Scrolling -->
    <script>
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    </script>
    <script>
    $(document).ready(function(){
        $("body").scrollspy({target: "#navbar", offset:50});
    });
    </script>
    <script>
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    </script>

</body>

</html>
