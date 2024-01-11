<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 1.2</title>
</head>
<body>
    <h1><?= $course_name?></h1>
    <form action="">
        <select name="semester" id="">
            <?php foreach($list_of_course as  $key => $value ): ?>
                <option value="<?= $key ?>"><?= $value ?></option>
            <?php endforeach; ?>
        </select>
        <input type="submit" value="Tìm">
    </form>
</body>
</html>