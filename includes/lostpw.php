<html>
<head>
<link href="Signin.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Speakeasy Sign Up</title>
</head>

<body>
<header>
hello
</header>

<missionstatement>
    <ms class="header">
        Speak Easy
    </ms>
    <ms class="content">
    <br>Making teamwork smarter and faster. </br>
    <br>Connect with classmates and peers and begin to work together! </br>
    <br>Solve the problems of today and reach the goals of tomorrow.</br>
    </ms>
</missionstatement>


<signup>
<!--Basically, forums just need to use post and you have to let Jeff know the name of the inputs -->
<!--This is a shitty mockup from Jeff, change it however you want -->
<div>
<form action="lostpwpage.php" method="post">
    <p>Lost Password!</p>
    <p><input type="text" name="email" placeholder="Email you signed up with"/></p>
    <p><input type="text" name="password" placeholder="New Password"/></p>
    <p><input type="submit" name="submitlog" value="Change Password" /></p>
    <input type="hidden" name="submittedlog" value="TRUE" />
</form>
<?php
include "/hackathonfall14/includes/lostpwsc.php";
?>
</div>
</signup>
</body>
</html>