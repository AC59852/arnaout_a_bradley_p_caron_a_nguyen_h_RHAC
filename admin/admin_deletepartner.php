<?php 
    require_once '../load.php';

    confirm_logged_in();

    if(isset($_GET['id'])) {
        $partner_id = $_GET['id'];
        $delete_partner_result = deletePartner($partner_id);

        if(!$delete_partner_result) {
            $message = 'Failed to delete Partner';
        }
    }