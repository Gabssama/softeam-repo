<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Softeam-test</title>
    <meta name="description" content="Landing Page Softeam-test">
    <link rel="icon" href="img/eukles.jpg" sizes="32x32" type="image/png">
    <!-- custom.css -->
    <link rel="stylesheet" href="css/custom.css">
    <!-- bootstrap.min.css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- font-awesome -->
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    
    <!-- AOS -->
    <link rel="stylesheet" href="css/aos.css">
</head>

<body>
    <!-- banner -->
    <div class="jumbotron jumbotron-fluid" id="banner" style="background-image: url(img/backgroung-blue.jpg);">
        <div class="container text-center text-md-left">
            <header>
                <div class="row justify-content-between">
                    <div class="col-2">
                        <img src="img/eukles.jpg" alt="logo">
                    </div>
                    <div class="col-6 align-self-center text-right">
                        <a href="https://www.eukles.com/" target="_blank" class="text-white lead">Visiter Euklès</a>
                    </div>
                </div>
            </header>
            <h1 data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="display-3 text-white font-weight-bold my-5">
            	Un projet<br>
            	Une expérience
            </h1>
            <p data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="lead text-white my-4">
            Le projet devra obligatoirement respecter ces 3 critères :
            <ul class="lead text-white">
              <li>utilisation d’un framework PHP (libre choix)</li>
              <li>utilisation d’un ORM (libre choix)</li>
              <li>se lancer en une ligne de commande via Docker</li>
            </ul>

            </p>
            <a href="{{route('getforms')}}" data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="btn my-4 font-weight-bold atlas-cta cta-green">Commencer</a>
        </div>
    </div>
    
	<!-- copyright -->
	<div class="jumbotron jumbotron-fluid" id="copyright">
        <div class="container">
            <div class="row justify-content-between">
            	<div class="col-md-6 text-dark align-self-center text-center text-md-left my-2">
                    Copyright © 2022 Chenaouy Gabriel.
                </div>
                <div class="col-md-6 align-self-center text-center text-md-right my-2" id="social-media">
                    
                    <a href="https://twitter.com/gabssama" target="_blank" class="d-inline-block text-center ml-2">
                    	<i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                    <a href="https://github.com/Gabssama/softeam-repo" class="d-inline-block text-center ml-2" target="_blanck">
                    	<i class="fa fa-github" aria-hidden="true"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/gabriel-chenaouy-dev-web/" target="_blank" class="d-inline-block text-center ml-2">
                    	<i class="fa fa-linkedin" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- AOS -->
    <script src="js/aos.js"></script>
    <script>
      AOS.init({
      });
    </script>
</body>

</html>