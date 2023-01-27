<?php
 include("connexion.php");
 $sql = "SELECT id, lienimage, messagecom FROM publication LIMIT 10";
 $result = mysqli_query($conn, $sql);
//  var_dump($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <title>Document</title>
</head>
<body>

<table id="load_data_table">
<?php
if(mysqli_num_rows($result) > 0){
     while($row = mysqli_fetch_assoc($result))
     {

      echo "
      <a href='afficheimage.php?id=".$row['id']."'>
      <div class='gallery' style='margin: 5px;border: 1px solid #ccc; float: left; width: max-content; border-radius: 10px;'>
      <img src='.//".$row['lienimage']."' style='width:240px; height:250px; border-top-left-radius: 10px; border-top-right-radius: 10px;'>
      <div class='taille'>300 x 250 - jpg<br> maximumwall.com</div>
   
      <div style='margin-top:10px; text-align:center; max-width:302px;'>".$row['messagecom']."</div>
   
      </div>
      </a>
      ";
      $image_id = $row['id'];
    }
    
 } 

  ?>
  <!-- <tr id="remove_row">  
<td><button type="button" name="btn_more" data-vid="<?php echo $image_id; ?>" id="btn_more" class="btn btn-success form-control bloque">Voir plus...</button></td>  
</tr> -->
</table>
</body>
</html>
