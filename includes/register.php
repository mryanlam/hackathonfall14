<html>
<body>

<form action="index.php" method="post">
    <p>Username: <input type="text" name="user" /></p>
    <p>Password: <input type="text" name="pass" /></p>
    <p>Email: <input type="text" name="email" /></p>
    <p><input type="submit" name="submit" value="Register" /></p>
    <input type="hidden" name="submitted" value="TRUE" />
</form>
<?php
include "C:/xampp/includes/registersc.php";
?>
</body>
</html>