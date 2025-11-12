<?php

include "db.php";
function getBeverages(){
    $pdo = getPDO();

    $stmt = $pdo->prepare("Select * from beverages");
    $stmt->execute();
    return $stmt->fetchAll();
}