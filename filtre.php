<?php
  include("connexion.php");
  if(isset($_POST['filtre'])){
    $choix = $_POST['filtre'];
    if($choix == "restaurant"){
      $sql = "SELECT id, lienimage, messagecom FROM publication WHERE typepublication = '$choix' ORDER BY id DESC LIMIT 10";
      $result = mysqli_query($conn, $sql);
      //  var_dump($result);
      if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result))
    {
  
      echo "
    <div class='gallery' style='margin: 5px;border: 1px solid #ccc; float: left; width: max-content; border-radius: 10px;'>
    <img src='.//".$row['lienimage']."' style='width: 240px; height: 250px; border-top-left-radius: 10px; border-top-right-radius: 10px;'>
    <div class='taille'>300 x 250 - jpg<br> maximumwall.com</div>
  
    <div style='margin-top:10px; text-align:center; max-width: 302px;'>".$row['messagecom']."</div>
  
    </div>
    ";
   }
   
  } else{
   echo "poto";
  }
  mysqli_close($conn);
    }

}


?>