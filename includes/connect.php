<?php
    require('config.php');

    function getAbout($pdo) {
        $getAbout = 'SELECT * FROM tbl_aboutInfo';
        $runQuery = $pdo->query($getAbout);

        $result = array();

        while($row = $runQuery->fetch(PDO::FETCH_ASSOC)) {
            // push each row of data into our arry to make it easy to iterate over
            $result[] = $row;
        }

        return $result;
    }

    function getPartners($pdo) {
        $getPartners = 'SELECT * FROM tbl_partners';
        $runQuery2 = $pdo->query($getPartners);

        $result2 = array();

        while($row2 = $runQuery2->fetch(PDO::FETCH_ASSOC)) {
            // push each row of data into our arry to make it easy to iterate over
            $result2[] = $row2;
        }

        return $result2;
    }

    function getHelp($pdo) {
        $getHelp = 'SELECT * FROM tbl_help';
        $runQuery3 = $pdo->query($getHelp);

        $result3 = array();

        while($row3 = $runQuery3->fetch(PDO::FETCH_ASSOC)) {
            // push each row of data into our arry to make it easy to iterate over
            $result3[] = $row3;
        }

        return $result3;
    }