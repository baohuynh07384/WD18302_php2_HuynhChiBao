<?php

require_once "vendor/autoload.php";
use App\Core\Field;
use App\Core\Form;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Create an account</h1>
        <?php $form = Form::begin('', 'post');?>
        <div class="row">
            <div class="col">
                <?php echo  $form->field('firstname'); ?>
            </div>
            <div class="col">
                <?php echo $form->field('lastname'); ?>
            </div>
        </div>
    </div>
    <?php echo $form->field('email');
          echo $form->field('password')->passwordField();
          echo $form->field('confirmPassword')->passwordField();
    ?>
    <button type="submit" class="btn btn-primary" >Submit</button>
    <?php echo Form::end(); ?>
</body>
</html>