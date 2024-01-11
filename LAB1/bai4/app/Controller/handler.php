<?
    include "../Model/Config.php";
    include "../Model/Db_functions.php";
    $email =  $_POST['email'];
    $firstname =  $_POST['firstname'];
    $lastname =  $_POST['lastname'];
    $password =  $_POST['password'];
    $function = new Db_functions();
    if (!empty($email) && !empty($firstname) && !empty($lastname) && !empty($password)) {
        $user = $function->insert($email, $firstname, $lastname, $password);
    }else{
        exit();
    }
    $data_user = $function->get_user();
    include "../Views/input.php";
?>