<?php
    require('config.php');

    function getAbout($pdo) {
        $getAbout = 'SELECT * FROM tbl_about';
        $runQuery = $pdo->query($getAbout);

        $result = array();

        while($row = $runQuery->fetch(PDO::FETCH_ASSOC)) {
            // push each row of data into our arry to make it easy to iterate over
            $result[] = $row;
        }

        return $result;
    }