<?php 
    require_once '../load.php';

    confirm_logged_in();

    if(isset($_GET['id'])) {
        $info_id = $_GET['id'];
        $delete_info_result = deleteInfo($info_id);

        if(!$delete_info_result) {
            $message = 'Failed to delete Info';
        }
    }