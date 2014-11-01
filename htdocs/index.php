<?php
session_start();
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    include "/hackathonfall14/includes/landing.php"
} else {
    include "/hackathonfall14/includes/register.php"
}
?>