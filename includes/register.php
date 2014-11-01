<html>
<body>
<!--Basically, forums just need to use post and you have to let Jeff know the name of the inputs -->
<!--This is a shitty mockup from Jeff, change it however you want -->
<form action="index.php" method="post">
    <p>Sign up!</p>
    <p>Username: <input type="text" name="user" /></p>
    <p>Password: <input type="text" name="pass" /></p>
    <p>Email: <input type="text" name="email" /></p>
    <p><input type="submit" name="submit" value="Register" /></p>
    <input type="hidden" name="submitted" value="TRUE" />
</form>
<form action="index.php" method="post">
    <p>Log in!</p>
    <p>Username: <input type="text" name="userlog" /></p>
    <p>Password: <input type="text" name="passlog" /></p>
    <p><input type="submit" name="submitlog" value="Login" /></p>
    <input type="hidden" name="submittedlog" value="TRUE" />
</form>
<!-- keep this php stuff -->
<?php
include "/hackathonfall14/includes/registersc.php";
?>
</body>
</html>