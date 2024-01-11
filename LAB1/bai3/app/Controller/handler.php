<?
    include "../Model/Config.php";
    include "../Model/Db_functions.php";
    $email = (!empty($_POST['email']) ? $_POST['email']: '');
    $function = new Db_functions();
    $user = $function->get_user($email);
    include "../Views/input.php";
?>