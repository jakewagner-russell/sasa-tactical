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
<body class="training">
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
  <h3>Training</h3>
</section>

<section class="page-hero">
  <div class="inner">
    <h1>Sasa Tactical</h1>
    <h2>Offering some of the most intense, realistic combat scenario training in the airsoft community.</h2>
  </div>
</section>

<section class="overview">
  <div class="overview-pic pic-1"></div>
  <div class="overview-text">
    <div class="inner">
      <h3>Authentic Environment.</h3>
      <p>From utilizing gun turrets with airsoft machine guns on vehicles to dummies that bleed out for casualty care scenarios, we make the experience as realistic as possible.</p>
    </div>
  </div>
</section>

<section class="overview yellow">
  <div class="overview-text">
    <div class="inner">
      <h3>Qualified Instruction.</h3>
      <p>Our instructors have a combined ten years of active military duty overseas, armed with the knowledge to keep you and your family safe in a time of crisis. </p>
    </div>
  </div>
  <div class="overview-pic pic-2"></div>
</section>

<section class="page-title">
  <h3>Courses</h3>
</section>

<section class="scenario yellow">
  <div class="inner">
    <div class="scenario-text">
      <h3>Home Defense</h3>
      <p>Develop skills to thwart a home invasion in your own house. SASA will teach you necessary tactics to overcome almost any threat in your own home.</p>
    </div>
    <div class="circle-pic one">
      <object width="100" height="100" data="images/home.svg"></object>
    </div>
  </div>
</section>

<section class="scenario">
  <div class="inner">
    <div class="circle-pic two">
      <object width="100" height="100" data="images/strategy.svg"></object>
    </div>
    <div class="scenario-text">
      <h3>Tactical Mindset</h3>
      <p>Develop warrior’s mindset so that you are mentally prepared to deal with any life threatening situation. Discuss the meaning of speed, surprise and violence of action</p>
    </div>
  </div>
</section>

<section class="scenario yellow">
  <div class="inner">
    <div class="scenario-text">
      <h3>Marksmanship Basics</h3>
      <p>Understand the fundamentals of employing your rifle and sidearm. Weapon manipulation, malfunctions clearing and weapon retention exercises</p>
    </div>
    <div class="circle-pic three">
      <object width="100" height="100" data="images/crosshair.svg"></object>
    </div>
  </div>
</section>

<section class="scenario">
  <div class="inner">
    <div class="circle-pic four">
      <object width="100" height="100" data="images/compass.svg"></object>
    </div>
      <div class="scenario-text">
        <h3>Land Navigation</h3>
        <p>Basic map reading skills necessary to navigate with compass and grid map.</p>
      </div>
    </div>
</section>

<section class="pricing yellow">

	<div class="container-three-up">

		<div class="container">
				<h3>Tier I</h3>
				<ul>
          <li>One Course</li>
          <li>400 Rounds of BB's</li>
          <li>Thermal Mask</li>
          <li>Regular Airsoft Rifle</li>
        </ul>
        <h4>$199</h4>
		</div>

    <div class="container">
				<h3>Tier II</h3>
				<ul>
          <li>Two Courses</li>
          <li>800 Rounds of BB's</li>
          <li>Thermal Mask</li>
          <li>Premium Airsoft Rifle</li>
        </ul>
        <h4>$299</h4>
		</div>

    <div class="container">
				<h3>Tier III</h3>
				<ul>
          <li>All Courses</li>
          <li>1500 Rounds of BB's</li>
          <li>Thermal Mask</li>
          <li>Premium Airsoft Rifle</li>
        </ul>
        <h4>$349</h4>
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
