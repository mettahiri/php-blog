<?php
include "src/pdo.php";

if(!empty($_GET["id"])) {
    $req =$pdo->prepare("SELECT * FROM billet where id=:ID");
    $req->execute(["ID"=> $_GET["id"] ]);
    $articles =$req->fetchAll(PDO::FETCH_ASSOC);
}



?>