<?php
DEFINE('USER', 'root');
DEFINE('PASSWORD', '');
DEFINE('HOST', 'localhost');
DEFINE('DB', 'auth');
$dbc = new mysqli(HOST, USER, PASSWORD, DB);
if($dbc->connect_error) {
    trigger_error("Could not connect! ".$dbc->connect_error, E_USER_ERROR);
} 
$query = "SELECT id FROM account WHERE username='".$_SESSION['user']."'";
$result = $dbc->query($query);
if($result->num_rows > 0){
    $row = $result->fetch_assoc();
    $query = "SELECT * FROM mycourses WHERE id='".$row['id']."'";
    $result = $dbc->query($query);
    if($result->num_rows > 0){
        $dbc->close();
        $classes->fetch_assoc();
        include "/hackathonfall14/includes/mycourses.php";
    } else {
        $dbc->close();
        header("Location: /hackathonfall14/htdocs/classes.php");
    }
} else {
//DATABASE ERROR
}
?>