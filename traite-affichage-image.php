<?php
include("connexion.php");
 $sql = "SELECT lienimage FROM publication ORDER BY id DESC";
 $result = mysqli_query($conn, $sql);
//  var_dump($result);
  if(mysqli_num_rows($result) > 0){
     while($row = mysqli_fetch_assoc($result))
     {
     
     echo "
    <div style='display:inline;'>
    <img src='.//".$row['lienimage']."' class='img-thumbnail' style='max-width:100%; max-height:200px; margin: 0px 10px 20px 30px; '>
   
    </div>
     ";

     }
  } else{
     echo "poto";
 }
 mysqli_close($conn);
 ?> 
