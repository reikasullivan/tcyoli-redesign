<?php
$currentPage = basename($_SERVER['PHP_SELF'], ".php");
$targetPage = $currentPage . "C.php";
?>

<header class="sidebar" id="sidebar">
  <div class="logoContainer">
    <image id="logo" alt="Tzu Chi Orchestra" src="images/clef-Logo-Short-Lines.png">
  </div>

  <nav class="navigation" id="navigation">
    <ul>
      <li><button id="closeButton">&times;</button></li>
      <li><a class="nav" href="index.php">Home</a></li>
      <li><a class="nav" href="blog.php">Blog/Photos</a></li>
      <li><a class="nav" href="registration.php">Audition</a></li>
      <li><a class="nav" href="team.php">Conductors</a></li>
      <li><a class="nav" href="rules.php">Rules</a></li>
      <li><a class="nav" href="contact.php">Staff Directory</a></li>
      <li><a class="nav" href="<?php echo "$targetPage" ?>">中文网站</a></li>
    </ul>
  </nav>

</header>
