<?php
    require_once '../load.php';
    confirm_logged_in();


    if(isset($_POST['infosubmit'])){
        $info_name = trim($_POST['name']);
        $info_para1 = trim($_POST['infopara1']);
        $info_para2 = trim($_POST['infopara2']);
        $info_para3 = trim($_POST['infopara3']);

        if(!empty($info_name)){
            $message = addInfo($info_id, $info_name, $info_para1, $info_para2, $info_para3);
        }else{
            $message = 'please fill in the missing information.';
        }
    }
?>