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
    <br>Making teamwork smarter and faster.
    <br>Connect with classmates and peers and begin to work together!
    <br>Solve the problems of today and reach the goals of tomorrow.
    </ms>
</missionstatement>


<signup>
<!--Basically, forums just need to use post and you have to let Jeff know the name of the inputs -->
<!--This is a shitty mockup from Jeff, change it however you want -->
<div>
<form action="index.php" method="post">
    <p>Log in!</p>
    <p><input type="text" name="userlog" placeholder="Username or Email"/></p>
    <p><input type="text" name="passlog" placeholder="Password"/></p>
    <p><input type="submit" name="submitlog" value="Login" /></p>
    <input type="hidden" name="submittedlog" value="TRUE" />
</form>
<?php
include "/hackathonfall14/includes/loginsc.php";
?>
</div>
<br>
<div>
<form action="index.php" method="post">
    <p>Sign up!</p>
    <p><input type="text" name="user" placeholder="Username"/></p>
    <p><input type="text" name="pass" placeholder="Password"/></p>
    <p><input type="text" name="email" placeholder="Email"/></p>
    <p><input type="text" name="first" placeholder="First Name"/></p>
    <p><input type="text" name="last" placeholder="Last Name"/></p>
    <p><input type="submit" name="submit" value="Register" /></p>
    <input type="hidden" name="submitted" value="TRUE" />
</form>
<?php
include "/hackathonfall14/includes/registersc.php";
?>
</div>
</signup>
</body>
</html>