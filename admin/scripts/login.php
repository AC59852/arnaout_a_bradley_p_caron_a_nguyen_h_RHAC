<?php
function login($username, $password, $ip){

    $pdo = Database::getInstance()->getConnection();

    // check to see if the user exists
    $check_exist_query = 'SELECT COUNT(*) FROM `tbl_user` WHERE user_name =:username';
    $user_set = $pdo->prepare($check_exist_query);
    $user_set->execute(
        array(
            ':username'=>$username
        )
    );

    if($user_set->fetchColumn()>0){
        
        // check the post username and database username to see if it matches
        $check_match_query = 'SELECT * FROM `tbl_user` WHERE user_name =:username';
        $check_match_query .= ' AND user_pass=:password';
        $user_match = $pdo->prepare($check_match_query);

        // variable definition
        $user_match->execute(
            array(
                ':username'=>$username,
                ':password'=>$password
            )
        );

        // once the user is found
        while($founduser = $user_match->fetch(PDO::FETCH_ASSOC)){
            $id = $founduser['user_id'];

            // bind the users id and name to the session
            $_SESSION['user_id'] = $id;
            $_SESSION['user_name'] = $founduser['user_fname'];

            // update the current ip based on the id
            $update_exist_query = 'UPDATE `tbl_user` SET user_ip =:ip WHERE user_id =:id';
            $ip_set = $pdo->prepare($update_exist_query);

            // variable definition
            $ip_set->execute(
                array(
                    ':id'=>$id,
                    ':ip'=>$ip
                )
            );
        }


        if(isset($id)){
            redirect_to('index.php');
        } else {
            return 'Wrong password, please try agian';
        }
    }else{
        return 'user does not exist';
    }

}

function confirm_logged_in() {
    if(!isset($_SESSION['user_id'])){
        redirect_to('admin_login.php');
    }
}

function logout() {
    session_destroy();
    redirect_to('admin_login.php');
}