<?php
  require_once 'social-icons.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>SASA Tactical | Stay Alert, Stay Alive.</title>
    <meta charset="utf-8">
    <meta name="description" content="SASA Tactical empoweres the individual through innovated training techniques to overcome today's dangers in the world.">
    <meta name="keywords" content="SASA, Tactical, Training, Operations, Strategy, Airsoft, Simulation">
    <meta name="viewport"
      content="width=device-width, initial-scale=1.0">
	<link href="styles.css" rel="stylesheet" type="text/css">
  <link href="mobile.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
  $(document).ready(function() {

    $(".menu").click(function() {
      $(".slide-out-menu").animate({left: '0'});
    });

    $(".close").click(function() {
      $(".slide-out-menu").animate({left:"-2000vw"}, 3000);
    });


    // Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
      &&
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 800, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });

  });

  </script>

</head>
<body class="home">
<header>
	<div class="inner">
		<img src="images/menu.svg" class="menu" alt="Menu Button">
		<a href="index.php"><img src="images/just-logo.png" class="logo" alt="SASA Logo"></a>
    </div>

    <div class="slide-out-menu">

      <div class="inner">
        <img src="images/close_button.svg" class="close" alt="Close Button">
        <nav>
            <ul>
                <li>
                    <h4><a href="index.php">Home</a></h4>
                </li>
                <li>
                    <h4><a href="operations.php">Operations</a></h4>
                </li>
                <li>
                    <h4><a href="training.php">Training</a></h4>
                </li>
                <li>
                    <h4><a href="inventory.php">Inventory</a></h4>
                </li>
                <li>
                    <h4><a href="about.php">About Us</a></h4>
                </li>
                <li>
                    <h4><a href="contact.php">Contact</a></h4>
                </li>
            </ul>
        </nav>
    </div>

    <?php
    $socialicons = new SocialIcons();
    $socialicons->render();
     ?>

  </div>
</header>

<main>

	<div class="inner">

    <?php
    $socialicons = new SocialIcons();
    $socialicons->render();
     ?>

      <div class="hero-block">

    		<img src="images/sasa-logo.png" id="landing-logo" alt="SASA Logo">

    		<hr class="big-border">
    		<hr class="little-border">

    		<div class="hero-text">
    			<h1>Stay in the Fight.</h1>
    			<h2>Empowering the individual through innovated training techniques to overcome today’s dangers in the world.</h2>
    		</div>

    		<hr class="little-border">
    		<hr class="big-border">

    		<div class="learn-more">

    			<a href="#navigation">

    			<h3>Learn More</h3>

    			<svg width="93px" height="38px" viewBox="0 0 93 38" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    				<defs></defs>
    				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
    					<g transform="translate(-674.000000, -845.000000)" fill="#344233">
    						<g transform="translate(619.000000, 784.000000)">
    							<polygon id="Triangle" points="101.5 99 85.2710783 85.7376553 55 61 148 61"></polygon>
    						</g>
    					</g>
    				</g>
    			</svg>

    			</a>

    		</div>
      </div>
	</div>
</main>

<section id="navigation">

	<div class="container-three-up">


		<div class="container">
			<a href="operations.php">
				<div class="circle-pic one"></div>
        <div class="container-text">
  				<h3>Operations</h3>
  				<p>Real world simulation to test your skills.</p>
        </div>
			</a>
		</div>

    <div class="container">
		<a href="operations.php">
			<div class="circle-pic two"></div>
      <div class="container-text">
			<h3>Training</h3>
			<p>Gain real tactical combat knowledge from experienced teachers.</p>
    </div>
		</a>
    </div>

      <div class="container">
		<a href="inventory.php">
			<div class="circle-pic three"></div>
      <div class="container-text">
			<h3>Inventory</h3>
			<p>Combat swag that's rugged and tough like you.</p>
    </div>
		</a>
    </div>

	</div>

</section>

<footer>
	<div class="inner">

    <p><a href="https://goo.gl/maps/CGNKtnTAVh32">1100 NW 1st Ave, Amarillo, TX</a></p>

	<div class="phone">
		<img src="images/phone.svg" alt="Phone Icon">
		<p><a href="tel:1-325-660-3445">(325) 660-3445</a></p>
	</div>

  <?php
  $socialicons = new SocialIcons();
  $socialicons->render();
   ?>

</div>
</footer>

</body>
</html>
