<?php 
function getAll($tbl){
    $pdo = Database::getInstance()->getConnection();

    $queryAll = 'SELECT * FROM '.$tbl.'ORDER BY id';
    $results = $pdo->query($queryAll);

    if($results){
        return $results;
    }else{
        return 'There was a problem accessing this info';
    }
};