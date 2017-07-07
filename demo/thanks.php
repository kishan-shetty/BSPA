<?php
$to = "kishanshetty17@gmail.com";
$subject = "BSPA website contact submmission";
$name = $_POST["name"];
$email = $_POST["email"];
$msg = $_POST["message"];
$txt = "\nName: $name \nEmail: $email \nMessage: $msg";
$headers = "From: noreply@uncliched.in";
mail($to,$subject,$txt,$headers);
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>BSPA</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
      <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
      <script src="https://use.fontawesome.com/9174fcc90e.js"></script>
      <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
      <link rel="stylesheet" href="css/style.css">
      <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="../dist/aos.css" />
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
      <nav class="navbar navbar-default">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#"><img id="logo" src="img/BSPA-logo.svg"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              
              
          <ul id="yo" class="nav navbar-nav navbar-right">
                <li><a href="index.html">Home</a></li>
                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Courses <span class="caret"></span></a>
                      <ul class="dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                        <li><a href="kids.html">Kids</a></li>
                        <li><a href="adults.html">Adults</a></li>
                      </ul>
                    </li>
                <li><a href="services.html">Services</a></li>
                <li><a href="http://bspa.in/en/wp/events">Events</a></li>
                <li><a href="media.html">Media</a></li>
                <li><a href="contact.html">Contact</a></li>             
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
      </nav>

    
    
    
    
    
    
    <br><br>
<div class="container">
    
    <div class="row">
      <div class="col-md-6">
        <h2>Drop us a message</h2>
        
        <br>
        <div class="form-group">
			Thank you for sending the message!
	</div>
        
        <form class="form-horizontal" role="form" method="post" action="thanks.php">
	<div class="form-group">
		<label for="name">Name</label>
			<input type="text" class="form-control" id="name" name="name" placeholder="Your Name" value="">
	</div>
	<div class="form-group">
		<label for="email">Email</label>
			<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="">
	</div>
	<div class="form-group">
		<label for="message">Message</label>
			<textarea class="form-control" rows="4" name="message"></textarea>
	</div>
	
	<div class="form-group">
			<input id="submit" name="submit" type="submit" value="Send Message" class="button">
	</div>
	
</form>
        
      </div>
      <div class="col-md-6">
        <h2>Our location</h2>
        <br>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15554.781876429304!2d77.6690899!3d12.927284!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4a406b6f3ddf0b55!2sBangalore+School+for+Performing+Arts!5e0!3m2!1sen!2sin!4v1498848221718" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
  </div>
  
    </div>
    
  <br><br>
    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <br>
            <h3>Get in touch</h3><br>
            <p><b>Location:</b> <br>164, 3rd Cross, Vineesh Towers, Green Glen Layout, Bellandur, Bengaluru, Karnataka 560103</p><br>
            
          </div>
          
          <div class="col-md-3 lol">
            <br><h3>..</h3><br>
            <b>Contact:</b><br>
            hello@bspa.in<br>
            +91 9876543210
          </div>
          
          <div class="col-md-3">
                        <br><br><br><br>
<a href="https://www.facebook.com/BangaloreSchoolforPerformingArts/" target="_blank"><i id="fafa" class="fa fa-facebook-square" aria-hidden="true"></i></a>
            <a href="https://www.instagram.com/bloreschoolforperformingarts/" target="_blank"><i id="fafa" class="fa fa-instagram" aria-hidden="true"></i></a>
            <i id="fafa" class="fa fa-twitter" aria-hidden="true"></i>
          </div>
          
          <div class="col-md-3 arr">
            <br><br><br><br>
            
            <h4>&copy; bspa &nbsp;|&nbsp; All rights reserved</h4>
          </div>
        </div>
      </div>
    </footer>
    
    
    
    
  
    
    
    
    
  
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
      <script type="text/javascript" src="slick/slick.min.js"></script>
      
      <script type="text/javascript">
    $(document).ready(function(){
      $('.bspa-slider').slick({
          dots: true,
          autoplay: true,
          autoplaySpeed: 3000,
          arrows: false
      });
    });
          
          
          var dropdownSelectors = $('.dropdown, .dropup');

// Custom function to read dropdown data
// =========================
function dropdownEffectData(target) {
  // @todo - page level global?
  var effectInDefault = null,
      effectOutDefault = null;
  var dropdown = $(target),
      dropdownMenu = $('.dropdown-menu', target);
  var parentUl = dropdown.parents('ul.nav'); 

  // If parent is ul.nav allow global effect settings
  if (parentUl.size() > 0) {
    effectInDefault = parentUl.data('dropdown-in') || null;
    effectOutDefault = parentUl.data('dropdown-out') || null;
  }
  
  return {
    target:       target,
    dropdown:     dropdown,
    dropdownMenu: dropdownMenu,
    effectIn:     dropdownMenu.data('dropdown-in') || effectInDefault,
    effectOut:    dropdownMenu.data('dropdown-out') || effectOutDefault,  
  };
}

// Custom function to start effect (in or out)
// =========================
function dropdownEffectStart(data, effectToStart) {
  if (effectToStart) {
    data.dropdown.addClass('dropdown-animating');
    data.dropdownMenu.addClass('animated');
    data.dropdownMenu.addClass(effectToStart);    
  }
}

// Custom function to read when animation is over
// =========================
function dropdownEffectEnd(data, callbackFunc) {
  var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
  data.dropdown.one(animationEnd, function() {
    data.dropdown.removeClass('dropdown-animating');
    data.dropdownMenu.removeClass('animated');
    data.dropdownMenu.removeClass(data.effectIn);
    data.dropdownMenu.removeClass(data.effectOut);
    
    // Custom callback option, used to remove open class in out effect
    if(typeof callbackFunc == 'function'){
      callbackFunc();
    }
  });
}

// Bootstrap API hooks
// =========================
dropdownSelectors.on({
  "show.bs.dropdown": function () {
    // On show, start in effect
    var dropdown = dropdownEffectData(this);
    dropdownEffectStart(dropdown, dropdown.effectIn);
  },
  "shown.bs.dropdown": function () {
    // On shown, remove in effect once complete
    var dropdown = dropdownEffectData(this);
    if (dropdown.effectIn && dropdown.effectOut) {
      dropdownEffectEnd(dropdown, function() {}); 
    }
  },  
  "hide.bs.dropdown":  function(e) {
    // On hide, start out effect
    var dropdown = dropdownEffectData(this);
    if (dropdown.effectOut) {
      e.preventDefault();   
      dropdownEffectStart(dropdown, dropdown.effectOut);   
      dropdownEffectEnd(dropdown, function() {
        dropdown.dropdown.removeClass('open');
      }); 
    }    
  }, 
});
  </script>
    
       <script src="../dist/aos.js"></script>
    <script>
			AOS.init({
				easing: 'ease-out-back',
				duration: 1000
			});
		</script>
  </body>
</html>