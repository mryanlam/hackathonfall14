<?php
include "/hackathonfall14/includes/header.php";
?>
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
<div>
<form action="index.php" method="post">
    <p>Log in!</p>
    <p><input type="text" name="userlog" placeholder="Username or Email"/></p>
    <p><input type="text" name="passlog" placeholder="Password"/></p>
    <p><input type="submit" name="submitlog" value="Login" /></p>
    <input type="hidden" name="submittedlog" value="TRUE" />
</form>
<p><a href="lostpwpage.php">Forgot your password?</a></p>
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