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

    <p class="defaultParagraph">
      Looking to speak to someone in the TCYOLI? Please click on the categories
      below to see contact information for our organization.
    </p>

    <button id="directorButton">Directors</button>
    <div id="toggleDirector">
      <h1 class="defaultHeader">Executive Director:</h1>
      <p class="defaultParagraph">
        Richard莊淂隆 516-554-7779, delongchuang@yahoo.com
      </p>

      <h1 class="defaultHeader">Deputy Director:</h2>
      <p class="defaultParagraph">
        Wenshu Lin林文淑 516-270-6877, wenshu0119@yahoo.com
      </p>

      <h1 class="defaultHeader">Administrative Assistant:</h2>
      <p class="defaultParagraph">
        Jenny Tsai 蔡曉青 646-339-6448, jennytsai305@gmail.com
      </p>

      <h2 class="defaultHeader">Music Director:</h2>
      <p class="defaultParagraph">
        Ashley宋淑慧516-822-4731, leftychen@yahoo.com
      </p>

      <h2 class="defaultHeader">Deputy Music Directors:</h2>
      <p class="defaultParagraph">
        Jonathan Affatato 646-770-710, jonmay11791@yahoo.com.
      </p>

      <p class="defaultParagraph">
        Debbie 沈亮寛 917-886-9314 , liangkshen@gmail.com
      </p>
    </div>

    <button id="staffButton">Staff</button>
    <div id="toggleStaff">

      <h2 class="defaultHeader">Music Filing/Librarian:</h2>
      <p class="defaultParagraph">
        Alfred 陳柏年 646-206-3991, leftychen@yahoo.com
      </p>

      <p class="defaultParagraph">
        Jonathan Affatato 646-770-710, jonmay11791@yahoo.com.
      </p>

      <h2 class="defaultHeader">Secretary:</h2>
      <p class="defaultParagraph">
        Harry袁惠衡917-859-6667, hyuen.tzyoli@yahoo.com
      </p>

      <p class="defaultParagraph">
        Betty Chee 池海燕 718-637-3323, wangltang@yahoo.com
      </p>

      <h2 class="defaultHeader">Registered Nurse:</h2>
      <p class="defaultParagraph">
        Wen Shu林文淑516-270-6877, wenshu0119@yahoo.com
      </p>

      <h2 class="defaultHeader">Guidance Counselor:</h2>
      <p class="defaultParagraph">
        Alfred 陳柏年 646-206-3991, leftychen@yahoo.com
      </p>

      <h2 class="defaultHeader">Event Coordinators, Public Relations:</h2>
      <p class="defaultParagraph">
        Carol葉欽慧917-561-6683, cyeh74@yahoo.com
      </p>

      <p class="defaultParagraph">
        Jenny Tsai 蔡曉青 646-339-6448, jennytsai305@gmail.com
      </p>

      <p class="defaultParagraph">
        Anita Yao 姚乃瑜 917-299-0548, anititas@gmail.com
      </p>

      <h2 class="defaultHeader">Treasurers: </h2>
      <p class="defaultParagraph">
        Patty 吳培菁, pei1004722000@yahoo.com
      </p>

      <p class="defaultParagraph">
        Julie Guan 管鐘昭, gzz1006@yahoo.com
      </p>

      <p class="defaultParagraph">
        Ye Lu陸葉, ky2003am@gmail.com
      </p>

      <h2 class="defaultHeader">Humanistic culture planner:</h2>
      <p class="defaultParagraph">
        Alfred 陳柏年, leftychen@yahoo.com
      </p>

      <h2 class="defaultHeader">Blog Administrator:</h2>
      <p class="defaultParagraph">
        Josephine Chuang 莊晴卉
      </p>

    </div>

    <button id="mediaButton">Media Team</button>
    <div id="toggleMedia">

      <h2 class="defaultHeader">Documentary team:</h2>
      <p class="defaultParagraph">
        Sherry Chiu 邱紹璟, sherrychiu@yahoo.com
      </p>

      <h2 class="defaultHeader">Photographer team:</h2>
      <p class="defaultParagraph">
        Ann Chu, dearann@gmail.com
      </p>

      <h2 class="defaultHeader">Graphic Artist:</h2>
      <p class="defaultParagraph">
        廖檍莚 Ellie Liao, ellieliao2005@yahoo.com.tw
      </p>
    </div>

    <button id="momButton">Team Moms</button>
    <div id="toggleMom">

      <h2 class="defaultHeader">The Blue Team Mom:</h2>
      <p class="defaultParagraph">
        Laura Chu, 陳文嵐, 917-968-0988, ch_lr@yahoo.com
      </p>

      <h2 class="defaultHeader">The White Team Mom:</h2>
      <p class="defaultParagraph">
        Ting Lee, 李婷甄, 917-887-6762, jpsh177@gmail.com
      </p>

      <h2 class="defaultHeader">The Woodwind Team Mom:</h2>
      <p class="defaultParagraph">
        Renee Wu, 347-988-9939, renee521122@gmail.com
      </p>
    </div>

  </div>
</body>
</html>
