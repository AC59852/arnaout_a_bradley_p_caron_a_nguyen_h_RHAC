<?php
    require_once '../load.php';
    confirm_logged_in();

    if(isset($_POST['aboutSubmit'])){
        $about_desc1 = trim($_POST['aboutdesc1']);
        $about_desc2 = trim($_POST['aboutdesc2']);

        if(!empty($about_desc1) && !empty($about_desc2)){
            $message = addAbout($about_desc1, $about_desc2);
        }else{
            $message = 'Please Fill Out the Required Fields';
        }
    }