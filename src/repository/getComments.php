<?php
include "../pdo.php";


  $req = $pdo->query("SELECT * FROM commentaire");
  $commentaires = $req->fetchAll(PDO::FETCH_ASSOC);

   echo json_encode($commentaires);


?>