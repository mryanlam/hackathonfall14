<?php
include "/hackathonfall14/includes/header.php";
?>
<script language="javascript">         
function addClass() {
    document.location.href="classes.php";
}

function classClick(ele) {
    var allmsgs = document.getElementsByClassName('topmsg');
    if(ele.style.backgroundColor == 'rgb(220, 220, 220)') {
        ele.style.backgroundColor = 'rgb(254, 254, 254)';
        for(var i = 0; i < allmsgs.length; i++) {
            allmsgs[i].style.display='block';
        }
        document.getElementsByClassName('sendform')[0].style.display='none';
    } else {
        for(var i = 0; i < allmsgs.length; i++) {
            if(allmsgs[i].title != ele.title)
                allmsgs[i].style.display='none';
            else
                allmsgs[i].style.display='block';
        }
        var allclasses = document.getElementsByClassName('class');
        for(var j = 0; j < allclasses.length; j++) {
            allclasses[j].style.backgroundColor = 'rgb(254, 254, 254)';
        }
        ele.style.backgroundColor = 'rgb(220, 220, 220)';
        document.getElementsByClassName('sendform')[0].style.display='block';
        document.getElementsByName('sendval')[0].setAttribute('value', ele.title);
    }
}
</script>
<classlist>
<?php
include "/hackathonfall14/includes/getclasses.php";
?>
<div class="class" onClick="addClass();">
+ Class
</div>
</classlist>
<chatbox>
<div class="sendform">
<form action="index.php" method="post" id="sendformid">
<div class="rightform"><input type="submit" name="sendbtn" value="Send!" style="width: 100%; height: 100%"/></div>
<input type="hidden" name="sendval"/>
</form>
<div class="leftform"><textarea name="msgtosend" style="width: 100%; height: 100%; resize: none" form="sendformid" placeholder="Enter message here!"></textarea></div>
</div> 
<?php
include "/hackathonfall14/includes/sendmsg.php";
include "/hackathonfall14/includes/getmessages.php";
?>
</chatbox>
</body>
</html>