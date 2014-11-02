<?php
if(isset($_POST['sendval'])) {
    $pquery = "INSERT INTO post (previousId, type, authId, crsId) VALUES (0, 1, ".$_SESSION['user'].", ".$_POST['sendval'].")";
    $pres = $dbc->query($pquery);
    $gquery = "SELECT MAX(id) FROM post";
    $gres = $dbc->query($gquery);
    $grow = $gres->fetch_assoc();
    $tquery = "INSERT INTO textpost (postId, message) VALUES (".$grow['id'].", ".$_POST['msgtosend'].")";
    $tres = dbc->query($tquery);
}
?>