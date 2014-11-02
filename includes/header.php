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
<header>
<img src="LOGO.png" height="80" width="auto">
<?php

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    print('<div class="headername">'.$_SESSION['first'].' '.$_SESSION['last'].'<br>'.$_SESSION['email']);
    print('<button onClick=logout()>Logout</button>');
}
?>
</header>

