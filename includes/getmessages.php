<?php
$classes->data_seek(0);
$query = "SELECT * FROM post WHERE previousId=0 AND (";
$curclass = $classes->fetch_assoc();
$query = $query."crsId='".$curclass['crs1']."'";
while($curclass = $classes->fetch_assoc()) {
    $query = $query." OR crsId='".$curclass['crs1']."'";
}
$query = $query.")";
$result = $dbc->query($query);
while($curmsg = $result->fetch_assoc()) {
    $query1 = "SELECT courseName FROM course WHERE id=".$curmsg['crsId'];
    $query2 = "SELECT first, last FROM account WHERE id=".$curmsg['authId'];
    $result1 = $dbc->query($query1);
    $result2 = $dbc->query($query2);
    $crs = $result1->fetch_assoc();
    $name = $result2->fetch_assoc();
    print('<div class="topmsg" title='.$curmsg['crsId'].'>'.$name['first'].' '.$name['last'].' -> '.$crs['courseName'].'<br>');
    if($curmsg['type'] == 1) {
        $query1 = "SELECT message FROM textpost WHERE postId=".$curmsg['id'];
        $result1 = $dbc->query($query1);
        $msgtxt = $result1->fetch_assoc();
        print($msgtxt['message'].'<br>');
        //PRINT REPLIES AND ABILITY TO REPLY 
    } else {
        //Nothing as of yet... STAY TUNED!!
    }
    print('</div>');
}
?>