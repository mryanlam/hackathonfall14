<?php
include "/hackathonfall14/includes/header.php";
?>
<script language="javascript">         
function addClass() {
    document.location.href="classes.php";
}

function classClick(ele) {
    alert(ele.nodeName);
    var allmsgs = document.getElementsByClassName('topmsg');
    if(ele.style.backgroundcolor == 'red') {
        ele.style.backgroundcolor = '';
        for(var i = 0; i < allmsgs.length; i++) {
            allmsgs[i].style.visibility='visible';
        }
    } else {
        for(var i = 0; i < allmsgs.length; i++) {
            if(allmsgs[i].nodeName != ele.nodeName)
                allmsgs[i].style.visibility='hidden';
        }
        ele.style.backgroundcolor = 'red';
    }
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
<div class="class" onClick="addClass();">
+ Class
</div>
</classlist>
<chatbox>
<?php
include "/hackathonfall14/includes/getmessages.php";
?>
</chatbox>
</body>
</html>