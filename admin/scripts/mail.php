<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Was advised to use phpmailer as a quick alternative to a full api
// Call in the files from the folder using abspath, check for
// registration and perform the function


function register($fname, $lname, $email){

    $pdo = Database::getInstance()->getConnection();
    $registerMsg = '';

    // check user existance
    $sqlCheck = 'SELECT COUNT(email) AS num FROM tbl_register WHERE email = :email'; 
    $sqlSet = $pdo->prepare($sqlCheck);
    $sqlSet->execute(
        array(
            ':email'=>$email
        )
    );

    $row = $sqlSet->fetch(PDO::FETCH_ASSOC);

    // UPDATE THIS LATER. Need to send email to users already registered
    if($row['num'] > 0){
        echo '<h1 style="font-family: Arial;">This email is already taken</h1>';
    }else{
        $mail = new PHPMailer();

        $mail->isSMTP();
        $mail->Host = 'tls://smtp.gmail.com';
        $mail->SMTPSecure='tls';
        $mail->Port = 587;
        $mail->SMTPAuth=true;

        $mail->Username='thkdesigns@gmail.com';
        $mail->Password='Au17829364773';

        $mail->addAddress($email);
        $mail->setFrom('test@rhac.com');
        
        $mail->isHTML(true);
        $mail->Subject='Registration'; 
        $mail->Body='
        Thanks for signing up for our site <br> We hope to see you around often!
        ';

        if(!$mail->send()){
            $registerMsg= $mail->ErrorInfo;
        }else{ // register the account (subdate not actually needed
            // As timestamp CURRENT_TIME applies regardless)
                $sqlUpdate = "INSERT INTO `tbl_register` (`id`, `firstname`, `lastname`, `email`) VALUES (NULL, :fname, :lname, :email);";
                 $stmtSet = $pdo->prepare($sqlUpdate);
                $stmtSet->execute(
                    array(
                        ':fname'=>$fname,
                        ':lname'=>$lname,
                        ':email'=>$email,
                    )
                );
            } 
            
        echo '<h1 style="font-family: Arial;">Thanks for signing up.<br>Check your Email for Confirmation!</h1>';
    }
}