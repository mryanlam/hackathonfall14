<?php
foreach($classes as $curclass) {
    $query = "SELECT course.courseNumber, course.courseName, department.code FROM course INNER JOIN department ON course.deptId=department.id";
    $result = dbc->query($query);
    if($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        print('<div class="class" id='.$row['course.courseNumber'].'>');
        print($row['department.code'].' '.$row['course.courseNumber'].'<br>');
        print($row['course.courseName']);
        print('</div>');
    }
}
?>