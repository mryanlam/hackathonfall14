<?php
while($curclass = $classes->fetch_assoc()) {
    $query = "SELECT course.courseNumber, course.courseName, department.code FROM course INNER JOIN department ON course.deptId=department.id WHERE course.id=".$curclass['crs1'];
    $result = $dbc->query($query);
    if($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        print('<button class="class" id='.$row['courseNumber'].'>');
        print($row['code'].' '.$row['courseNumber'].'<br>');
        print($row['courseName']);
        print('</button><br>');
    }
}
?>