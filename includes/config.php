<?php 

    $db_dsn = array(
        'host' => 'us-cdbr-iron-east-04.cleardb.net',
        'dbname' => 'heroku_2edf14057ac8a67',
        'charset' => 'utf8',
    );
    
    $dsn = 'mysql:' . http_build_query($db_dsn, '', ';');

    // Set up connection credentials
    $db_user = 'b4bf75d03a80fc';
    $db_pass = 'cf824c9c';

    $pdo = new PDO($dsn, $db_user, $db_pass);

    /* check connection */
    try {
        $pdo = new PDO($dsn, $db_user, $db_pass);
    } catch (PDOException $exception) {
        echo "Connection error: " . $exception->getMessage();
        exit();
    }