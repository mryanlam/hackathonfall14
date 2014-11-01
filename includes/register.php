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
<form action="index.php" method="post">
    <p>Sign up!</p>
    <p>Username: <input type="text" name="user" /></p>
    <p>Password: <input type="text" name="pass" /></p>
    <p>Email: <input type="text" name="email" /></p>
    <p>First: <input type="text" name="first" /></p>
    <p>Last: <input type="text" name="last" /></p>
    <p><input type="submit" name="submit" value="Register" /></p>
    <input type="hidden" name="submitted" value="TRUE" />
</form>
</div>
<div>
<form action="index.php" method="post">
    <p>Log in!</p>
    <p>Username: <input type="text" name="userlog" /></p>
    <p>Password: <input type="text" name="passlog" /></p>
    <p><input type="submit" name="submitlog" value="Login" /></p>
    <input type="hidden" name="submittedlog" value="TRUE" />
</form>
</div>
</signup>
<!-- keep this php stuff -->
<?php
include "/hackathonfall14/includes/registersc.php";
?>
</body>
</html>