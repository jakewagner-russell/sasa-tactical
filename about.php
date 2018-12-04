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

  });
  </script>
</head>
<body class="about">
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

<section class="page-title">
  <h3>About Us</h3>
</section>

<section class="page-hero">
  <img src="images/sasa-logo.png" id="landing-logo" alt="SASA Logo">
  <h2>The future of outdoor recreational activities.</h2>
</section>

<section class="description">
    <div class="inner">
      <p>We offer experiences that range from family friendly competition to realistic scenario reenactments. These operations will assist in mentally and physically challenging the individual and team tactical abilities.</p>

<p>Now this may seem like an impossible task being able to satisfy such a wide range of demands but we will ensure we deliver the most realistic combat training available to the civilian market. Due to our unique skill sets and personal experiences in combat , accompanied by our out of the box approach to training we have the necessary skills to accomplish real world training.</p>

<p>If you haven’t heard emersion is the future of entertainment and with our help it will be for tactical training to. By adding innovative technology to the sport of airsoft, combined with immersive environments we plan to change the sport forever. </p>

<p>We believe airsoft is not being utilized to its true potential and with our vision we aim to please not only the the gun enthusiast but the hardcore gamers in our realistic training scenarios that are not hindered by all the safety requirements of live fire.</p>
    </div>
</section>

<section class="bio zach yellow">

  <div class="bio_pic_1"></div>

  <div class="inner">
    <h1>Zachary Mayo</h1>
    <p>Director of Mobile Tactical Operations Center and Commanding Officer (CO) of SASA. Former Army Mechanized Infantrymen with the 4th Infantry Division with one combat tour to Iraq. Mayo currently serves in a role as an SRT/SWAT Commander.</p> <p> Mayo currently possesses federal instructor certifications in firearms, tactical entry, tactical leadership, and special weapons systems. </p>
      <p>Mayo also holds certifications in corporate management courses, high reliability organization management, human performance improvement, basic instructors training, live fire range safety and operations, awarded 5 star customer service badge with USPS, awarded a commendation from the Amarillo Chief of Police for a selfless act in the apprehension of an individual actively stabbing/assaulting innocent bystanders in the Amarillo Westgate Mall.</p>
  </div>

</section>

<section class="bio gabe">

  <div class="inner">
    <h1>Gabe Ordonez</h1>
    <p>Director of Tactical Airsoft Field Operations and Executive Officer (XO) of SASA. Ordonez currently serves in a SRT/SWAT team. Member of Department of Energy combat shooting team for 5 years. Former US Army Infantry 82′ Airborne Paratrooper with two combat tours to Iraq and Afghanistan. Formerly an Infantry Team Leader.</p>
  </div>

  <div class="bio_pic_2"></div>

</section>

<section class="page-hero action">
  <div class="inner">
    <h3>Ready to</h3>
    <h4>join the fight?</h4>
    <a href="contact.html">I'm In!</a>
  </div>
</section>

<footer>
	<div class="inner">

    <p><a href="https://goo.gl/maps/CGNKtnTAVh32">1100 NW 1st Ave, Amarillo, TX</a></p>

	<div class="phone">
		<a href="tel:1-325-660-3445">
		<img src="images/phone.svg" alt="Phone Icon">
		<p>(325) 660-3445</p>
    </a>
	</div>

  <?php
  $socialicons = new SocialIcons();
  $socialicons->render();
  ?>

		</div>
</footer>

</body>
</html>
