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
  <?php include "includes/sideNavCh.php" ?>

  <!-- pageContent contains all content to the right of the side navigation bar.-->
  <div class="pageContent" id="pageContent">
    <button id="sideButton">☰</button>
    <?php include "includes/headerImage.php" ?>

    <div class="infoBlock">
      <h2 class=“blockHeader”>長島分行</h2>
      <p class=“blockParagraph”>
        東威利斯頓大街60號
      </p>
      <p class=“blockParagraph”>
        East Williston，NY 11596
      </p>
      <p class=“blockParagraph”>
        電話：516-873-6888
      </p>
      <p class=“blockParagraph”>
        傳真：516-746-0626
      </p>
    </div>

    <h1 class=“defaultHeader”>我們的使命</h1>
    <p class=“halfParagraph”>
      長島慈濟青年交響樂團尋求提供年輕的音樂家
      並有機會與合作夥伴/商會團體的同事合作
      設置。通過這個機會，音樂家將能夠磨礪自己的音樂
      音樂技巧和知識，同時拓寬演奏技巧
      和舞台的存在。年輕的音樂家也會培養一種社區感
      志願主義，慈濟人道主義，以及對音樂能力的自豪感
      通過公共場所和慈濟活動的表演經驗。
    </p>

    <p class="defaultHeader">
      <a href="registrationC.php">面试</a>
    </p>

    <button class="defaultButton">值日生日期</button>
    <div class="toggleContent">
      <table class="defaultTable">
        <tr>
          <th>週次</th>
          <th>日期</th>
          <th>Blue Team</th>
          <th>White Team</th>
          <th>Woodwind</th>
        </tr>
        <?php
          if (($data = fopen("schedule/schedule.csv", "r")) !== FALSE) {
            while (($schedule = fgetcsv($data, 1000, ",")) !== FALSE) {
                echo "<tr>";
                echo "<td>" . $schedule[0] . "</td>";
                echo "<td>" . $schedule[1] . "</td>";
                echo "<td>" . $schedule[2] . "</td>";
                echo "<td>" . $schedule[3] . "</td>";
                echo "<td>" . $schedule[4] . "</td>";
                echo "</tr>";
              }
            } else {
              ?> <p class="defaultParagraph">发生了错误。 请联系网站管理员。</p><?php
            }
        ?>
      </table>
    </div>

    <h3 class=“defaultHeader”>每週提醒</h3>
    <ul class=“defaultList”>
      <li>
        所有樂團成員請在下午3:40之前與Harry Yuen聯繫
        和3:50 PM。要準時！排演會在下午四點開始。
      </li>
      <li>
        帶上你的TCYOLI獎勵卡。請同時顯示Harry
        Yuen當時填寫的練習記錄表。沒有一拳會
        如果你沒有練習記錄表，就像你一樣
        沒有準備好。
      </li>
      <li>
        如果您計劃在下午3點與我們的副手進行額外的練習
        音樂總監Jon Affatato，請不遲於2:55 PM抵達。
        如果你有早期的排練，你的父母會被聯繫。
      </li>
      <li>
        如果由於某種原因，你遲到了，你還是需要與Harry簽到
        即使你不會得到“一拳”，如果因為任何原因
        你將缺席，請讓你的父母之一與你聯繫
        團隊（白色或藍色或木管樂）媽媽。
      </li>
      <li>
        請記得帶上標有音樂的黑色活頁夾。
      </li>
      <li>
        請記得帶上你自己的音樂架，一支鉛筆，一個杯子和一個杯子
        吃零食的器物。 （每個人都需要吃器皿，
        因為我們有時在人文課上練習適當的飲食禮儀。）
      </li>
      <li>
        記得練習你的弦樂器或木管樂器。該
        指揮員將授予交響樂團成員的貼紙
        誰在排練中表現良好，五個貼紙等於一個拳頭
        獎勵卡。
      </li>
    </ul>
  </div>
</body>
</html>
