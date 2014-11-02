<?php
/* Functions */
function makeButtons($dbc)
{
    $query = "SELECT department.code, course.id, course.courseNumber, course.courseName FROM course INNER JOIN department ON course.deptid=department.id";
    //print($query);
    $result = $dbc->query($query);
    if($result) {
        while ($row = $result->fetch_assoc())
        {
            printf('<button class="addclass" onclick="checkBtn(%d)">%s, %d, %s</button><br>', $row["id"], $row["code"], $row["courseNumber"], $row["courseName"]);
        }
    } else {
        print("<myErr>No Classes Exist</myErr>");
    }
    $dbc->close();
}

/* Script */
DEFINE('USER', 'root');
DEFINE('PASSWORD', '');
DEFINE('HOST', 'localhost');
DEFINE('DB', 'auth');
$dbc = new mysqli(HOST, USER, PASSWORD, DB);
if($dbc->connect_error) {
       trigger_error("Could not connect! ".$dbc->connect_error, E_USER_ERROR);
}

if (isset($_POST["choice"]))
{
    $query = 'SELECT * FROM mycourses WHERE id='.$_SESSION["user"].' AND crs1='.$_POST["choice"];
    //print($query);
    $result = $dbc->query($query);
    if ($result)
    {
        print("<myErr>You are already registered for that course<br></myErr>");
        makeButtons($dbc);
    }
    else
    {
        $query = 'INSERT INTO mycourses (id, crs1) VALUES ("'.$_SESSION["user"].'", "'.$_POST["choice"].'")';
        $result = $dbc->query($query);
        if ($result)
        {
            header("Location: index.php");
        }
        else
        {
            print("<myErr>failed to register course</myErr>");
        }
    }
}
else 
{
    makeButtons($dbc);
}
?>