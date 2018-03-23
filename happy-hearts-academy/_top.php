<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
<title></title>
<!-- Styles -->
<link href="https://fonts.googleapis.com/css?family=Acme|Lato|Raleway|Parisienne|Open+Sans|Great+Vibes" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> 
<link rel="icon" href="img/logo/50-by-50-logo.png">
<link rel="stylesheet" type="text/css" href="css/animate.css">
<link rel="stylesheet" href="css/bootstrap.css" />
<link rel="stylesheet" href="css/font-awesome.css" />
<link rel="stylesheet" href="css/owl.carousel.min.css" />
<link rel="stylesheet" href="css/owl.theme.default.css" />
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="css/footer.css">
<link rel="stylesheet" type="text/css" href="css/carousel.css">
<link rel="stylesheet" type="text/css" href="css/jarallax.css">

<!-- Scripts -->
<script type="text/javascript" src="js/jquery-3-2-1.js"></script>
<script type="text/javascript" src="js/jquery.aniview.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script src="js/custom.js"></script>
<script type="text/javascript" src="js/jarallax.js"></script>
<script type="text/javascript" src="js/jarallax.init.js"></script>
<script src="js/smooth-scroll.js"></script>
</head>
<body>
   <nav class="navbar navbar-default navbar-fixed-top unscrolled-nav-md custom-nav">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <i></i>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><img src="img/logo/90-by-90-logo.png" alt="LOGO"></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li class="nav-item"><a class="nav-link" href="">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="">Gallery</a></li>
          <li class="nav-item"><a class="nav-link" href="">About</a></li>
          <li class="nav-item"><a class="nav-link" href="">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav> 
</body>
<script>
  $(document).ready(function(){
      $(".navbar-toggle").click(function(){
        $(this).toggleClass("tilted-navbar-toggle");
      });
      var options = {
        animateThreshold: 80,
        scrollPollInterval: 30
    }
    $('.aniview').AniView(options);
  });
</script>