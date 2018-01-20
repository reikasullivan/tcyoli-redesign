<!DOCTYPE html>
<html>

<!-- Content on this page, and all others, cited from the client's page. All images
have citations declared in the title (hover over the images on the webpage to see) -->

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
    <!-- TODO: Fill in content from the website here -->
    <div class="infoBlock">
      <h2 class="blockHeader">Long Island Branch</h2>
        <p class="blockParagraph">
          60 East Williston Ave.
        </p>
        <p class="blockParagraph">
          East Williston, NY 11596
        </p>
        <p class="blockParagraph">
          Phone: 516-873-6888
        </p>
        <p class="blockParagraph">
          Fax: 516-746-0626
        </p>
    </div>

    <h1 class="defaultHeader">Our Mission</h1>
    <p class="halfParagraph">
      The Tzu Chi Young Orchestra of Long Island seeks to provide young musicians
      with the opportunity to work with their peers in an ensemble/chamber group
      setting. Through this opportunity, musicians will be able to sharpen their
      musical skills and knowledge while broadening their performance techniques
      and stage presence. Young musicians will also develop a sense of community
      volunteerism, Tzu Chi humanitarianism, and pride in their musical abilities
      through performance experiences at public venues and Tzu Chi events.
    </p>

    <p class="defaultParagraph">
      Interested in auditioning for the TCYOLI? Please apply <a class="hyperlink" href="registration.php">here</a>.
    </p>

    <button class="defaultButton">Schedule</button>
    <div class="toggleContent">
      <table class="defaultTable">
        <tr>
          <th>Week</th>
          <th>Date</th>
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
              ?> <p class="defaultParagraph">An error with the schedule file has occurred. Please contact the site administrator.</p><?php
            }
        ?>
      </table>
    </div>

    <h3 class="defaultHeader">Weekly Reminders</h3>
      <ul class="defaultList">
        <li>
          All orchestra members please check in with Harry Yuen between 3:40 PM
          and 3:50 PM. Be on time! Rehearsal will start promptly at 4 PM.
        </li>
        <li>
          Bring your TCYOLI reward card to be punched. Please also show Harry
          Yuen your filled-in practice recording sheet at that time. No punch will
          be given if you do not have the practice recording sheet, as you are
          coming unprepared.
        </li>
        <li>
          If you are scheduled for extra practice at 3:00 PM with our Deputy
          Music Director Jon Affatato, please arrive by no later than 2:55 PM.
          Your parents will be contacted if you have early rehearsal.
        </li>
        <li>
          If for any reason you are late, you still need to check in with Harry
          Yuen even though you will not be getting a “punch.” If for any reason
          you are going to be absent, please have one of your parents contact your
          Team (White or Blue or Woodwind) Mom.
        </li>
        <li>
          Please remember to bring your labelled music in the black binder.
        </li>
        <li>
          Please remember to bring your own music stand, a pencil, a cup and
          eating utensils for snack. (Eating utensils are required of everyone,
          as we sometimes practice proper eating etiquette during humanities class.)
        </li>
        <li>
          Remember to practice on your string or woodwind instrument. The
          conductor-instructors will be awarding stickers to orchestra members
          who do well in the rehearsals, and five stickers equal to one punch on
          the reward card.
        </li>
      </ul>
  </div>
</body>
</html>
