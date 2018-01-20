<?php
// Stores the name of the class for hidden error messages
$HIDDEN_ERROR_CLASS = "hiddenError";

// when the user submits a date_create_from_format
$submit = $_REQUEST["submit"];
if (isset($submit)) {
  // log to the PHP console
  error_log("user submitted form");

$firstName = $_REQUEST["firstname"];
// if the first name field is not empty:
if (!empty($firstName)) {
  // first name is valid
  $fnameValid = true;
} else {
  // first name not fnameValid
  $fnameValid = false;
}

$lastName = $_REQUEST["lastname"];
// if last name field is not empty:
if (!empty($lastName)) {
  // last name is fnameValid
  $lnameValid = true;
} else {
  // last name not valid
  $lnameValid = false;
}

// email, gender, date of birth (month, day, year),

$email = $_REQUEST["email"];
// if email field is not empty and is email
if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailValid = true;
} else {
  $emailValid = false;
}

$gender = $_REQUEST["gender"];
// if gender field is selected
if (!empty($gender)) {
  $genderValid = true;
} else {
  $genderValid = false;
}

if (isset($_POST ['DOBMonth'])) {
  $month = $_POST['DOBMonth'];
}

if (isset($_POST ['DOBDay'])) {
  $day = $_POST['DOBDay'];
}

if (isset($_POST ['DOBYear'])) {
  $year = $_POST['DOBYear'];
}

$month = $_POST["DOBMonth"];
if (isset($month) && $month != '0') {
  $monthValid = true;
} else {
  $monthValid = false;
}

$day = $_POST["DOBDay"];
if (isset($day) && $day != '0') {
  $dayValid = true;
} else {
  $dayValid = false;
}

$year = $_POST["DOBYear"];
if (isset($year) && $year != '0') {
  $yearValid = true;
} else {
  $yearValid = false;
}

if (isset($_POST['gender'])) {
  $gender = $_POST['gender'];
}

if (isset($_POST ['updates'])) {
  $updates = $_POST['updates'];
}

$formValid = $fnameValid && $lnameValid && $emailValid && $genderValid &&
$monthValid && $dayValid && $yearValid;

  // if valid, allow submission
  if ($formValid) {
    // create session to pass values to redirected page
    session_start();
    $_SESSION['firstname'] = $firstName;
    $_SESSION['lastname'] = $lastName;
    $_SESSION['email'] = $email;
    $_SESSION['gender'] = $gender;
    $_SESSION['DOBMonth'] = $month;
    $_SESSION['DOBDay'] = $day;
    $_SESSION['DOBYear'] = $year;

  // redirect to formSubmitted.php
    header("Location: formSubmittedC.php");
    return;
  }
}

else {
  error_log("no form submitted");

  $fnameValid = true;
  $lnameValid = true;
  $emailValid = true;
  $genderValid = true;
  $dayValid = true;
  $monthValid = true;
  $yearValid = true;
}

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
  <?php include "includes/sideNavCh.php" ?>

  <!-- pageContent contains all content to the right of the side navigation bar.-->
  <div class="pageContent" id="pageContent">
    <button id="sideButton">☰</button>
    <?php include "includes/headerImage.php" ?>
    <h1 class="defaultHeader"> TCYOLI注册2017 - 2018年 </h1>

    <p class="defaultParagraph">
      <span class="bold">试演日期/时间:</span> 2017年7月15日@下午2:00
    </p>

    <p class="defaultParagraph">
      <span class="bold">试演地点:</span> 60 East Williston Ave., East Williston, NY 11596
    </p>

    <p class="defaultParagraph">
      <span class="bold">学费:</span> $550
    </p>

    <p class="defaultParagraph">
      <span class="bold">Note:</span> Auditionee应准备一个独奏，展示你的技术能力和你的音乐性。
      你最近的NYSSMA独奏是一个很好的例子，但是你准备的作品不一定是NYSSMA批准的独奏。
      试演将包括你对这件作品的表现，并可能包括一个简短的视觉阅读的例子。
    </p>

    <form method="post" action="registrationC.php" id="registerForm">
    <fieldset id="register">
      <div class="inputSection">
        <label for = "lastname"> 姓: </label>
        <input id="lastname" name="lastname" placeholder="Your last name"
        value="<?php if(isset($_POST ['lastname'])) echo $_POST['lastname'];?>" required/>
        <span class="errorContainer <?php if ($lnameValid) { echo($HIDDEN_ERROR_CLASS); }?>" id="lastNameError">
          姓氏是必需的 </span>
      </div>

      <div class="inputSection">
        <label for = "firstname"> 名字: </label>
        <input id="firstname" name="firstname" placeholder="Your first name"
        value="<?php if(isset($_POST ['firstname'])) echo $_POST['firstname'];?>" required/>
        <span class="errorContainer <?php if ($fnameValid) { echo($HIDDEN_ERROR_CLASS); }?>" id="firstNameError">
          名字是必需的 </span>
      </div>



      <div class="inputSection">
        <label for= "email"> Email: </label>
        <input id="email" type= "email" name="email" placeholder="Your email"
        value="<?php if(isset($_POST ['email'])) echo $_POST['email'];?>" required/>
        <span class="errorContainer <?php if ($emailValid) { echo($HIDDEN_ERROR_CLASS); }?>" id="emailError">
          Email是必需的 </span>
      </div>

      <div class="inputSection">
        <label for="gender"> 性别: </label>
        <input class="radio" type="radio" name="gender" value="male"
        <?php if ($gender == "male") echo 'checked="checked"';?>> 男
        <input class="radio" type="radio" name="gender" value="female"
        <?php if ($gender == "female") echo 'checked="checked"';?>> 女
        <input class="radio" type="radio" name="gender" value="other"
        <?php if ($gender == "other") echo 'checked="checked"';?>> 其他
        <span class="errorContainer <?php if ($genderValid) { echo($HIDDEN_ERROR_CLASS); }?>" id="emailError">
          性别是必需的 </span>
      </div>

      <div class="inputSection">
        出生日期:
        <select name="DOBMonth">
          <option <?php if ($month == "0") echo 'selected="selected"';?> value="0">月</option>
          <option <?php if ($month == "January") echo 'selected="selected"';?> value="January">一月</option>
          <option <?php if ($month == "February") echo 'selected="selected"';?> value="Febuary">二月</option>
          <option <?php if ($month == "March") echo 'selected="selected"';?> value="March">三月</option>
          <option <?php if ($month == "April") echo 'selected="selected"';?> value="April">四月</option>
          <option <?php if ($month == "May") echo 'selected="selected"';?> value="May">五月</option>
          <option <?php if ($month == "June") echo 'selected="selected"';?> value="June">六月</option>
          <option <?php if ($month == "July") echo 'selected="selected"';?> value="July">七月</option>
          <option <?php if ($month == "August") echo 'selected="selected"';?> value="August">八月</option>
          <option <?php if ($month == "September") echo 'selected="selected"';?> value="September">九月</option>
          <option <?php if ($month == "October") echo 'selected="selected"';?> value="October">十月</option>
          <option <?php if ($month == "November") echo 'selected="selected"';?> value="November">十一月</option>
          <option <?php if ($month == "December") echo 'selected="selected"';?> value="December">十二月</option>
        </select>
        <!-- <span class="errorContainer1 <?php if ($monthValid) { echo($HIDDEN_ERROR_CLASS); }?>" id="monthError">
          月是必需的 </span> -->

        <select name="DOBDay">
          <option <?php if ($day == "0") echo 'selected="selected"';?> value="0">日</option>
          <option <?php if ($day == "1") echo 'selected="selected"';?> value="1">1日</option>
          <option <?php if ($day == "2") echo 'selected="selected"';?> value="2">2日</option>
          <option <?php if ($day == "3") echo 'selected="selected"';?> value="3">3日</option>
          <option <?php if ($day == "4") echo 'selected="selected"';?> value="4">4日</option>
          <option <?php if ($day == "5") echo 'selected="selected"';?> value="5">5日</option>
          <option <?php if ($day == "6") echo 'selected="selected"';?> value="6">6日</option>
          <option <?php if ($day == "7") echo 'selected="selected"';?> value="7">7日</option>
          <option <?php if ($day == "8") echo 'selected="selected"';?> value="8">8日</option>
          <option <?php if ($day == "9") echo 'selected="selected"';?> value="9">9日</option>
          <option <?php if ($day == "10") echo 'selected="selected"';?> value="10">10日</option>
          <option <?php if ($day == "11") echo 'selected="selected"';?> value="11">11日</option>
          <option <?php if ($day == "12") echo 'selected="selected"';?> value="12">12日</option>
          <option <?php if ($day == "13") echo 'selected="selected"';?> value="13">13日</option>
          <option <?php if ($day == "14") echo 'selected="selected"';?> value="14">14日</option>
          <option <?php if ($day == "15") echo 'selected="selected"';?> value="15">15日</option>
          <option <?php if ($day == "16") echo 'selected="selected"';?> value="16">16日</option>
          <option <?php if ($day == "17") echo 'selected="selected"';?> value="17">17日</option>
          <option <?php if ($day == "18") echo 'selected="selected"';?> value="18">18日</option>
          <option <?php if ($day == "19") echo 'selected="selected"';?> value="19">19日</option>
          <option <?php if ($day == "20") echo 'selected="selected"';?> value="20">20日</option>
          <option <?php if ($day == "21") echo 'selected="selected"';?> value="21">21日</option>
          <option <?php if ($day == "22") echo 'selected="selected"';?> value="22">22日</option>
          <option <?php if ($day == "23") echo 'selected="selected"';?> value="23">23日</option>
          <option <?php if ($day == "24") echo 'selected="selected"';?> value="24">24日</option>
          <option <?php if ($day == "25") echo 'selected="selected"';?> value="25">25日</option>
          <option <?php if ($day == "26") echo 'selected="selected"';?> value="26">26日</option>
          <option <?php if ($day == "27") echo 'selected="selected"';?> value="27">27日</option>
          <option <?php if ($day == "28") echo 'selected="selected"';?> value="28">28日</option>
          <option <?php if ($day == "29") echo 'selected="selected"';?> value="29">29日</option>
          <option <?php if ($day == "30") echo 'selected="selected"';?> value="30">30日</option>
          <option <?php if ($day == "31") echo 'selected="selected"';?> value="31">31日</option>
        </select>
        <!-- <span class="errorContainer1 <?php if ($dayValid) { echo($HIDDEN_ERROR_CLASS); }?>" id="dayError">
          日期是必需的 </span> -->

        <select name="DOBYear">
          <option <?php if ($year == "0") echo 'selected="selected"';?> value="0">年</option>
          <option <?php if ($year == "2017") echo 'selected="selected"';?> value="2017">2017年</option>
          <option <?php if ($year == "2016") echo 'selected="selected"';?> value="2016">2016年</option>
          <option <?php if ($year == "2015") echo 'selected="selected"';?> value="2015">2015年</option>
          <option <?php if ($year == "2014") echo 'selected="selected"';?> value="2014">2014年</option>
          <option <?php if ($year == "2013") echo 'selected="selected"';?> value="2013">2013年</option>
          <option <?php if ($year == "2012") echo 'selected="selected"';?> value="2012">2012年</option>
          <option <?php if ($year == "2011") echo 'selected="selected"';?> value="2011">2011年</option>
          <option <?php if ($year == "2010") echo 'selected="selected"';?> value="2010">2010年</option>
          <option <?php if ($year == "2009") echo 'selected="selected"';?> value="2009">2009年</option>
          <option <?php if ($year == "2008") echo 'selected="selected"';?> value="2008">2008年</option>
          <option <?php if ($year == "2007") echo 'selected="selected"';?> value="2007">2007年</option>
          <option <?php if ($year == "2006") echo 'selected="selected"';?> value="2006">2006年</option>
          <option <?php if ($year == "2005") echo 'selected="selected"';?> value="2005">2005年</option>
          <option <?php if ($year == "2004") echo 'selected="selected"';?> value="2004">2004年</option>
          <option <?php if ($year == "2003") echo 'selected="selected"';?> value="2003">2003年</option>
          <option <?php if ($year == "2002") echo 'selected="selected"';?> value="2002">2002年</option>
          <option <?php if ($year == "2001") echo 'selected="selected"';?> value="2001">2001年</option>
          <option <?php if ($year == "2000") echo 'selected="selected"';?> value="2000">2000年</option>
          <option <?php if ($year == "1999") echo 'selected="selected"';?> value="1999">1999年</option>
          <option <?php if ($year == "1998") echo 'selected="selected"';?> value="1998">1998年</option>
        </select>
        <span class="errorContainer1 <?php if ($yearValid && $monthValid && $dayValid) { echo($HIDDEN_ERROR_CLASS); }?>" id="yearError">
          月，日，年是必需的 </span>
      </div>

      <div class="inputSection">
        <input type="checkbox" name="updates" <?php echo ($updates ? 'checked="checked"' : '') ?>>加入TCYOLI邮件列表以获取新闻和更新。
      </div>
    </fieldset>
        <button type="submit" name="submit" class="submitButton">提交</button>
    </form>

  </div>
</body>
</html>
