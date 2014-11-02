<?php
if(isset($_POST['submittedlog'])) {
    DEFINE('USER', 'root');
    DEFINE('PASSWORD', '');
    DEFINE('HOST', 'localhost');
    DEFINE('DB', 'auth');
    $dbc = new mysqli(HOST, USER, PASSWORD, DB);
    if($dbc->connect_error) {
        trigger_error("Could not connect! ".$dbc->connect_error, E_USER_ERROR);
    }
    $query = "SELECT department.code, course.id, course.courseNumber, course.courseName FROM course INNER JOIN department ON course.deptid=department.id";
    print($query);
    $result = $dbc->query($query);
    if($result) {
        while ($row = $result->fetch_assoc())
        {
            printf("%s, %d, %s\n", $row["department.code"], $row["course.courseNumber"], $row["course.courseName"]);
        }
    } else {
        print("<p>No Classes Exist</p>");
    }
    $dbc->close();
}
?>