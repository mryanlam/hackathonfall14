<?php
session_start();
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    include "/hackathonfall14/includes/addclasses.php";
} else {
    header("Location: /hackathonfall14/htdocs/index.php");
}
?>