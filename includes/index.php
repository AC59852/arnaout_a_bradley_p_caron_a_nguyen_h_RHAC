<?php
    require('connect.php');

    if (isset($_GET['about'])) {
        getAbout($pdo);
        $about = getAbout($pdo);
    }

    echo json_encode($about);
    ?>