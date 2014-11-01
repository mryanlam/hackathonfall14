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
if(isset($_POST['submitted'])) {
    DEFINE('USER', 'root');
    DEFINE('PASSWORD', '');
    DEFINE('HOST', 'localhost');
    DEFINE('DB', 'world');
    $dbc = new mysqli(HOST, USER, PASSWORD, DB);
    if($dbc->connect_error) {
        trigger_error("Could not connect! ".$dbc->connect_error, E_USER_ERROR);
    }
    $query = "INSERT INTO account (username, pass, email) VALUES ('".$_POST['user']."', '".hash("sha512", $_POST['user'].$_POST['pass'])."', '".$_POST['email']."')";
    $result = $dbc->query($query);
    if($result) {
        print("<p>REGISTERED: ".$_POST['user']."</p>");
    }
    else {
        print("<p>OOPS ".$dbc->error."</p>");
    }
    $dbc->close();
}
?>
</body>
</html>