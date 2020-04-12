<?php
    require_once '../load.php';
    confirm_logged_in();

    if(isset($_POST['partnerSubmit'])){
        $partner_name = trim($_POST['partnername']);
        $partner_link = trim($_POST['partnerlink']);
        $partner_image = $_FILES['partnerimg'];

        if(!empty($partner_name) && !empty($partner_image)){
            $message = addPartner($partner_name, $partner_image, $partner_link);
        }else{
            $message = 'Please Fill Out the Required Fields';
        }
    }