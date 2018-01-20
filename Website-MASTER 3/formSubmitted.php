<?php
session_start();

$firstName = htmlspecialchars($_SESSION['firstname']);
$lastName = htmlspecialchars($_SESSION['lastname']);
$email = htmlspecialchars($_SESSION['email']);
$gender = $_SESSION['gender'];
$month = $_SESSION['DOBMonth'];
$day = $_SESSION['DOBDay'];
$year = $_SESSION['DOBYear'];

unset($_SESSION['email']);
 ?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>TCYOLI</title>
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all">
  <meta name="viewport" content = "width = device-width, initial-scale = 1"/>
  <!--Load JQuery-->
  <script src="scripts/jquery-3.2.1.min.js" type="text/javascript"></script>
  <!--Load Button Toggles-->
  <script src="scripts/toggleButtons.js" type="text/javascript"></script>
  <script src="scripts/mobileBar.js" type="text/javascript"></script>
</head>

<body>

  <!-- Side navigation bar -->
  <?php include "includes/sideNavEng.php" ?>

  <!-- pageContent contains all content to the right of the side navigation bar.-->
  <div class="pageContent" id="pageContent">
    <button id="sideButton">☰</button>
    <?php include "includes/headerImage.php" ?>
    <h1 class="defaultHeader">Thank You!</h1>
    <p class=defaultParagraph>
      Thank you for signing up to Audition for TCYOLI, you will receive an email shortly
      with more information.
    </p>
    <br/>
    <p class=defaultParagraph>This is the information we've received from you, <?php echo($firstName);?> <?php echo($lastName);?>.</p>
    <p class=defaultParagraph>Email: <?php echo($email);?></p>
    <p class=defaultParagraph>Gender: <?php echo($gender);?></p>
    <p class=defaultParagraph>Date of Birth: <?php echo($month);?> <?php echo($day);?>, <?php echo($year);?></p>
  </div>
  </body>
  </html>
