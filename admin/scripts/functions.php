<?php

function redirect_to($location){
    if($location != null){
        header('Location: '.$location);
        exit;
    }
}

function addInfo($info_id, $info_name, $info_para1, $info_para2, $info_para3) {

    try {

        $pdo = Database::getInstance()->getConnection();

        // query for inserting a new info into the table based on given variables
        $create_info_sql = 'INSERT INTO tbl_moreInfo(info_title, info_para1, info_para2, info_para3)';
        $create_info_sql .= ' VALUES(:name, :para1, :para2, :para3)';

        $create_info=$pdo->prepare($create_info_sql);

        // variable definitions
        $create_info_result = $create_info->execute(
            array(
                ':name'=>$info_name,
                ':para1'=>$info_para1,
                ':para2'=>$info_para2,
                ':para3'=>$info_para3
            )
        );

        // confirm to the admin that the info was added
        redirect_to('index.php');
    } catch (Exception $e) {

        // if any errors occur, display the error message
        $error = $e->getMessage();
        return $error;
    }
}

function deleteInfo($info_id) {
    $pdo = Database::getInstance()->getConnection();

    $delete_info_query = 'DELETE FROM tbl_moreInfo WHERE info_id=:id';

    $delete_info_prp = $pdo->prepare($delete_info_query);

    $delete_info_result = $delete_info_prp->execute(array(
        ':id'=>$info_id
    ));

    if($delete_info_result && $delete_info_prp->rowCount() > 0) {
        header('refresh:2,index.php');
        echo '<h2 style="font-family: arial;">Listing Deleted. Returning to Dashboard</h2>';
    } else{
        return false;
    }
}





function addAbout($about_desc1, $about_desc2, $about_image) {

    try {
        $pdo = Database::getInstance()->getConnection();

        $cover          = $about_image;

        // define the file types supported
        $upload_file    = pathinfo($cover['name']);
        $accepted_types = array('gif', 'jpg', 'jpe', 'png', 'jpeg', 'webp');
        if (!in_array($upload_file['extension'], $accepted_types)) {
            throw new Exception('Not one of the supported file types');
        }
        
        // define the file path
        $image_path = '../public/images/';
    
        // md5 hashes the string to encrypt the real name of the file
        $generated_name     = md5($upload_file['filename'] . time());
        $generated_filename = $generated_name . '.' . $upload_file['extension'];
        $targetpath         = $image_path . $generated_filename;
    
        // check if the file upload failed
        if (!move_uploaded_file($cover['tmp_name'], $targetpath)) {
            throw new Exception('Failed to upload file');
        }

        // query for inserting a new info into the table based on given variables
        $update_about_sql = 'UPDATE tbl_aboutInfo SET para =:desc1, img =:img, para2 =:desc2 WHERE id=1';

        $update_about      = $pdo->prepare($update_about_sql);

        // variable definitions
        $update_about_result = $update_about->execute(
            array(
                ':desc1'=>$about_desc1,
                ':img'=>$generated_filename,
                ':desc2'=>$about_desc2,
            )
        );

        // confirm to the admin that the info was added
        redirect_to('index.php?createAbout=info Listing Created');
    } catch (Exception $e) {

        // if any errors occur, display the error message
        $error = $e->getMessage();
        return $error;
    }
}



