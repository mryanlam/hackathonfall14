<?php
session_start();
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    header("Location: /hackathonfall14/htdocs/index.php");
} else {
    include "/hackathonfall14/includes/lostpw.php";
}
?>