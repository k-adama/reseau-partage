<?php
include("connexion.php");
if(isset($_POST['content'])){   
        $like = $_POST["content"];
        @$idImgLik= $_POST['id'];
        $sql = "INSERT INTO `likeanddislikes`(valeur_likeanddislike, id_image)
          VALUES('$like', '$idImgLik')";
          if(mysqli_query($conn, @$sql)){
            echo '';
        }else{
            echo "error: ". $sql ."<br>" . mysqli_error($conn);
        }
    mysqli_close($conn);

 }

?>