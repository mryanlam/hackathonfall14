<?php
foreach($classes as $curclass) {
    $query = "SELECT course.courseNumber, course.courseName, department.code FROM course INNER JOIN department ON course.deptId=department.id WHERE course.id=".$curclass;
    $result = $dbc->query($query);
    if($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        print('<div class="class" id='.$row['courseNumber'].'>');
        print($row['code'].' '.$row['courseNumber'].'<br>');
        print($row['courseName']);
        print('</div>');
    }
}
?>