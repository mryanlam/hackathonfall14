<?php
session_start();
print("Hello ".$_SESSION['first']." ".$_SESSION['last']);    
?>