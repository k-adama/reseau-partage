<?php
include("../connexion.php");

if(isset($_POST["ajouter"])){
    $titre = addslashes($_POST["titre"]);
    $choix = addslashes($_POST["choix"]);
    $message = addslashes($_POST["message"]);
    // $nomduplat = preg_replace('#[^a-z0-9]#i', '', $nomduplat);
    // $datepublication = date('Y/m/d h:i:s a', time());
    //direction de mon dossier
      $targetPath = "../imagespublication/";
      // @$nouveauNom = uniqid(basename($_FILES['name']));
      @$temp = explode(".", $_FILES["fichier"]["name"]);
      $nouveaunom = round(microtime(true)) . '.' .end($temp);
      $nouveau = $targetPath.$nouveaunom;
      if(move_uploaded_file($_FILES['fichier']['tmp_name'],"" .$nouveau)){
        $sql = "INSERT INTO `publication`(titre, typepublication, lienimage, messagecom)
          VALUES('$titre', '$choix', '$nouveau', '$message')";
          echo "ok";
          // header('location:index.php');
          if(mysqli_query($conn, @$sql)){
            header("location:../index.php");
        }else{
            echo "error: ". $sql ."<br>" . mysqli_error($conn);
        }
      }
    mysqli_close($conn);
   
    } 
?>