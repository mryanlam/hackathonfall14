<?php
include "/hackathonfall14/includes/header.php";
?>
<missionstatement>
    <ms class="header">
        Speak Easy
    </ms>
    <ms class="content">
    <br>Making teamwork smarter and faster.
    <br>Connect with classmates and peers and begin to work together!
    <br>Solve the problems of today and reach the goals of tomorrow.
    </ms>
</missionstatement>
<signup>
<!--Basically, forums just need to use post and you have to let Jeff know the name of the inputs -->
<!--This is a shitty mockup from Jeff, change it however you want -->
<div class="sign">
<form action="lostpwpage.php" method="post">
    <p>Lost Password!</p>
    <p><input type="text" name="email" placeholder="Email you signed up with"/></p>
    <p><input type="text" name="password" placeholder="New Password"/></p>
    <p><input type="submit" name="submitlog" value="Change Password" /></p>
    <input type="hidden" name="submittedlog" value="TRUE" />
</form>
<?php
include "/hackathonfall14/includes/lostpwsc.php";
?>
</div>
</signup>
</body>
</html>