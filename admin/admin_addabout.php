<?php
    require_once '../load.php';
    confirm_logged_in();

    if(isset($_POST['aboutSubmit'])){
        $about_desc1 = trim($_POST['aboutdesc1']);
        $about_desc2 = trim($_POST['aboutdesc2']);
        $about_image = $_FILES['aboutimg'];

        if(!empty($about_desc1) && !empty($about_desc2) && !empty($about_image)){
            $message = addAbout($about_desc1, $about_desc2, $about_image);
        }else{
            $message = 'Please Fill Out the Required Fields';
        }
    }