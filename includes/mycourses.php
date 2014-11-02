<?php
include "/hackathonfall14/includes/header.php";
?>
<script language="javascript">         
function addClass() {
    document.location.href="classes.php";
}

function classClick(ele) {
    var allmsgs = document.getElementsByClassName('topmsg');
    if(ele.style.backgroundColor == 'red') {
        ele.style.backgroundColor = 'rgb(240, 240, 240)';
        for(var i = 0; i < allmsgs.length; i++) {
            allmsgs[i].style.visibility='visible';
        }
    } else {
        for(var i = 0; i < allmsgs.length; i++) {
            if(allmsgs[i].title != ele.title)
                allmsgs[i].style.visibility='hidden';
            else
                allmsgs[i].style.visibility='visible';
        }
        var allclasses = document.getElementsByClassName('class');
        for(var j = 0; j < allclasses.length; j++) {
            allclasses[j].style.backgroundColor = 'rgb(240, 240, 240)';
        }
        ele.style.backgroundColor = 'red';
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