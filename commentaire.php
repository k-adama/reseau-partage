<?php
include("connexion.php");
if(isset($_POST["commentaires"])){
    if($_POST["commentaires"] !=""){
        $messagecommentaire = addslashes($_POST["commentaires"]);
        @$id= $_POST['id'];
        $sql = "INSERT INTO commentaire (commentaire, id_publication)
         VALUES ('$messagecommentaire', '$id')";
        if (mysqli_query($conn, $sql)) {
        echo "";
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
     mysqli_close($conn);
    }
} 
?>