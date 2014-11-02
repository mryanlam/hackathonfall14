<?php
include "/hackathonfall14/includes/header.php";
?>
<script language="javascript">         
function addClass() {
    document.location.href="classes.php";
}
</script>
<classlist>
<!--
<div class="class" id=CLASS#>
DEPT CLASS#<br>
Classname
</div>
Make it clickable in css!
-->
<?php
include "/hackathonfall14/includes/getclasses.php";
?>
<button class="class" onClick=addClass()>
+ Class
</button>
</classlist>
<chatbox>

</chatbox>
</body>
</html>