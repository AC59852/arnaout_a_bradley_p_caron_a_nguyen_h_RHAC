<?php 

// grab abs paths
require_once '../load.php';


// check if each input is filled, if so, perform registration function. if not, display error message
if(isset($_POST['register'])){
    $email = trim($_POST['email']);
    $fname = trim($_POST['firstname']);
    $lname = trim($_POST['lastname']);

    if(!empty($fname) && !empty($lname) && !empty($email)){
        $registerMsg = register($fname, $lname, $email);
        echo $registerMsg;
        header('Refresh:5;url=../index.php');
    }else{
        $registerMsg = 'Please fill out the required field';
    }
}

?>
