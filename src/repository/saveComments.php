<?php
include "../pdo.php";
if(isset($_POST['form_data']) )
{
  $data = json_decode($_POST["form_data"],true) ;

  $req = $pdo->prepare("INSERT INTO commentaire(author,email,texte,id_billet) VALUES(:nom,:email,:texte) ");
  $req->execute([
    "nom" => $data["nom"],
    "email" => $data["email"],
    "texte" => $data["text"],
    "id" => $data["id_article"]
  ]);

   echo $data["nom"];
}
?>