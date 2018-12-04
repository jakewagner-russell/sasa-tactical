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
<body class="operations">
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
  <h3>Operations</h3>
</section>

<section class="page-hero">
  <div class="inner">
    <h1>Put your skills to the test.</h1>
    <h2>SASA offers some of the most intense, realistic combat scenario training in the airsoft community.</h2>
  </div>
</section>

<section class="overview">
  <div class="overview-pic pic-1"></div>
  <div class="overview-text">
    <div class="inner">
      <h3>Test your limits.</h3>
      <p>If you think your teams ready to Stay Alert, Stay Alive, reserve a private operation to apply your knowledge in a realistic setting. We accommodate parties up to twenty people. </p>
    </div>
  </div>
</section>

<section class="overview yellow">
  <div class="overview-text">
    <div class="inner">
      <h3>Choose your path.</h3>
      <p>Want to test yourself in an active shooter situation? Or a react to contact scenario? Our instructors can reenact and tailor the operation to you and your team's needs.</p>
    </div>
  </div>
  <div class="overview-pic pic-2"></div>
</section>

<section class="page-title">
  <h3>Game Modes</h3>
</section>

<section class="scenario yellow">
  <div class="inner">
    <div class="scenario-text">
      <h3>Manhunt</h3>
      <p>Two teams: a team of hunters and a team of prey. The hunters need to eliminate the prey before they can make it to a specified safe place. The hunters win if they can keep the prey from making it to their home base. The prey win by getting back to their home base.</p>
    </div>
    <div class="circle-pic one">
      <object width="100" height="100" data="images/target.svg"></object>
    </div>
  </div>
</section>

<section class="scenario">
  <div class="inner">
    <div class="circle-pic two">
      <object width="100" height="100" data="images/timebomb.svg"></object>
    </div>
    <div class="scenario-text">
      <h3>Bomb</h3>
      <p>Get a bomb to the opposing team base without being eliminated by the opponent. Once the bomb is placed the opposing team must dismantle the bomb before it goes off in their base, if they cannot dismantle the bomb before it goes off then they lose that round. If they can kill the opposing team before they place the bomb or they dismantle the bomb, then they win.</p>
    </div>
  </div>
</section>

<section class="scenario yellow">
  <div class="inner">
    <div class="scenario-text">
      <h3>Special Forces</h3>
      <p> A team of four are the Special Forces, and a group of eight people as their adversaries. The Special Forces need to subdue the opposing team, but since the adversaries begin with an advantage, the forces will need to apply their tactical knowledge to win.</p>
    </div>
    <div class="circle-pic three">
      <object width="100" height="100" data="images/dogtag.svg"></object>
    </div>
  </div>
</section>

<section class="scenario">
  <div class="inner">
    <div class="circle-pic four">
      <object width="80" height="80" data="images/sniper.svg"></object>
    </div>
      <div class="scenario-text">
        <h3>Ambush</h3>
        <p> Two teams: infantry and snipers. The infantry follows a specified path to a safe space. The snipers, exclusively using airsoft sniper rifles, must eliminate the infantry troops before they make it to the safe space at the end of the chosen path. The infantry team stays only on the chosen path, but snipers can move around as they wish. Snipers win if they keep infantry from reaching their safe space.</p>
      </div>
    </div>
</section>

<section class="pricing yellow">

	<div class="container-three-up">

		<div class="container">
				<h3>Tier I</h3>
				<ul>
          <li>3 Hours On Field</li>
          <li>300 Rounds of BB's</li>
          <li>Thermal Mask</li>
          <li>Regular Airsoft Rifle</li>
          <li>Airsoft Pistol (+$10)</li>
          <li>Highlight Video (+$20)</li>
        </ul>
        <h4>$35</h4>
		</div>

    <div class="container">
				<h3>Tier II</h3>
        <ul>
          <li>5 Hours On Field</li>
          <li>500 Rounds of BB's</li>
          <li>Thermal Mask</li>
          <li>Premium Airsoft Rifle</li>
          <li>Airsoft Pistol (+$10)</li>
          <li>Highlight Video (+$10)</li>
        </ul>
        <h4>$55</h4>
		</div>

    <div class="container">
				<h3>Tier III</h3>
        <ul>
          <li>8 Hours On Field</li>
          <li>1000 Rounds of BB's</li>
          <li>Thermal Mask</li>
          <li>Premium Airsoft Rifle</li>
          <li>Airsoft Pistol</li>
          <li>Highlight Video</li>
        </ul>
        <h4>$75</h4>
		</div>

    </div>

</section>

<section class="page-hero action">
  <div class="inner">
    <h3>Ready to</h3>
    <h4>join the fight?</h4>
    <a href="contact.php">I'm In!</a>
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
