<?php
    echo "PC07384 - Lab 1.1 <br>";
    
    $courses = [
        's1' => 'Lập trình php2',
        's2' => 'Lập trình javascript',
        's3' => 'Kiểm thử'
    ];
    //Model
    /**
     * hàm này để lấy ra mảng
     * @return array
     */
    function get_courses():array {
        global $courses;
        return $courses;
    }
    /**
     * @param string $block
     * hàm này kiểm tra coi có cái khóa học không
     * @return string
     */
    function find_by_semester($semester) {
        global $courses;
        return (array_key_exists($semester, $courses) ? $courses[$semester]: "sai");
    }
    // echo (find_by_semester('s1'))

    //controller
    $list_of_courses = get_courses();

    $semester = (!empty($_GET['semester']) ? $_GET['semester']: '');

    $courses_name = find_by_semester($semester);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 1.1</title>
</head>
<body>
    <h1><?= $courses_name?></h1>
    <form action="">
        <select name="semester" id="">
            <?php foreach($list_of_courses as $key => $value): ?>
                <option value="<?= $key ?>"><?= $value?></option>
            <?php endforeach; ?>
        </select>
        <input type="submit" value="Tìm">
    </form>
</body>
</html>