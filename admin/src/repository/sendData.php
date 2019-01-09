<?php
include "../../../src/pdo.php";
if(isset($_POST["titre"],$_POST["texte"],$_FILES["img"])){
    
        sendData($pdo,$_POST["titre"],$_POST["texte"],$_FILES["img"]);
   
}

function sendData($pdo,$titre,$texte,$file) {

    if(!empty($titre) && !empty($texte) && !empty($file)){
        uploadFile($file);
        $prep = $pdo->prepare( 'INSERT INTO billet(titre,corps_text,image) VALUES(:titre, :texte, :image)');
        $result = $prep->execute([
            "titre" => $titre,
             "texte" =>$texte,
             "image" => $file['name'][0]
        ]);
            echo "request ok ";
    } else {
        echo "error";
    }
}

function uploadFile ($file){
    $fileName = $file['name'][0];
    $fileTmpName = $file["tmp_name"][0];
    move_uploaded_file($fileTmpName,"../../../public/images/".$fileName); 
}
?>