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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link href="mobile.css" rel="stylesheet" type="text/css">
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
<body class="contact">
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
  <h3>Contact</h3>
</section>

<main>



<section class="page-hero">
  <div class="inner">
    <h2>Interested in taking a course or scheduling a scenario?</h2>
    <h1>Shoot us a line.</h1>
    <form>
      <input type="text" name="username" placeholder="Name">
      <input type="text" name="email" placeholder="E-Mail">
      <textarea name="inquiry"></textarea>
      <input type="submit" value="Submit">
    </form>
  </div>
</section>

</main>
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
