<html>
<head>
<link href="Signin.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Speak Easy</title>
</head>
<body>
<script language="javascript">         
function logout() {
    document.location.href="logout.php";
}
</script>
<padder>
<header>
<a href="index.php">
<img src="Logo.png" height="80" width="auto">
</a>
<div class="logo">
    Speak Easy
</div>
</padder>
<?php
/* Random Background */
$bg = array('pic1.jpg', 'pic2.jpg', 'pic3.jpg', 'pic4.jpg');
$i = rand(0, count($bg)-1);
$selectedBg = "$bg[$i]";
/* if logged in display */
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    print('<div class="headername">'.$_SESSION['first'].' '.$_SESSION['last'].'<br>'.$_SESSION['email']);
    print('<br><button onClick=logout()>Logout</button></div>');
}
?>
<style type="text/css">
<!--
body{
background: url(<?php echo $selectedBg; ?>) no-repeat;
background-size:cover;
}
-->
</style>
</header>

