<?php
    require('connect.php');

    if (isset($_GET['about'])) {
        getAbout($pdo);
        $about = getAbout($pdo);

        echo json_encode($about); 
    }
    
    if (isset($_GET['partners'])) {
        getPartners($pdo);
        $partners = getPartners($pdo);

        echo json_encode($partners);
    }
    ?>