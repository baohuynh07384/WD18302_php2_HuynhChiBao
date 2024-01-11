<?php
   
    include 'model.php';
    $list_of_course = get_courses();
  
    $semester = (!empty($_GET['semester']) ? $_GET['semester']: '');

    $course_name = find_by_semester($semester);

    include 'view.php';
?>