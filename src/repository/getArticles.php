<?php
include "src/pdo.php";
$req =$pdo->query("SELECT * FROM billet ORDER BY id DESC");
$articles =$req->fetchAll(PDO::FETCH_ASSOC);

?>