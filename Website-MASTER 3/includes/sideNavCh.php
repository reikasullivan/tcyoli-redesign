<?php
$currentPage = basename($_SERVER['PHP_SELF']);
$remove = strpos($currentPage, ".php") - 1;
$targetPage = substr($currentPage, 0, $remove) . ".php";
?>

<header class="sidebar" id="sidebar">
  <div class="logoContainer">
    <image id="logo" alt="Tzu Chi Orchestra" src="images/clef-Logo-Short-Lines.png">
  </div>

  <nav class="navigation" id="navigation">
    <ul>
      <li><button id="closeButton">&times;</button></li>
      <li><a class="nav" href="indexC.php">首頁</a></li>
      <li><a class="nav" href="blogC.php">博客, 照片剪影</a></li>
      <li><a class="nav" href="registrationC.php">面试</a></li>
      <li><a class="nav" href="teamC.php">指揮老師簡介</a></li>
      <li><a class="nav" href="rulesC.php">樂團規章</a></li>
      <li><a class="nav" href="contactC.php">行政人員</a></li>
      <li><a class="nav" href="<?php echo "$targetPage" ?>">English Site</a></li>
    </ul>
  </nav>

</header>
