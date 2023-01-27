<?php
 include("connexion.php");
 include("menu.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="http://example.com/favicon.ico" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style_css.css" />
  <title>Document</title>
  <link rel="icon" type="image/x-icon" href="images/favicon.ico">
  
</head>
<body>

<table id="load_data_table">
<?php

if(!isset($_POST["myselection"])){
     $sql = "SELECT id, lienimage, messagecom FROM publication ORDER BY id DESC LIMIT 10";
     $result = mysqli_query($conn, $sql);
//  var_dump($result);
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

    }
    
 } 
 ?>
<?php ?>
 <tr id="remove_row" >  
 <td><button type="button" name="btn_more" data-vid="<?php echo $image_id; ?>" id="btn_more" class="btn btn-success form-control bloque">Voir plus...</button></td>  
 </tr> 
 <?php

 }
elseif(isset($_POST["myselection"])){
     $choix= addslashes($_POST["myselection"]);
     $sql = "SELECT id, lienimage, messagecom FROM publication WHERE typepublication = '$choix' ORDER BY id DESC LIMIT 10";
     $result = mysqli_query($conn, $sql);
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
          
 }
}

 } 
  ?>


</table>
</body>
</html>

<script>  
 $(document).ready(function(){  
      $(document).on('click', '#btn_more', function(){  
           var last_video_id = $(this).data("vid");  
           $('#btn_more').html("charge");  
           $.ajax({  
                url:"voir_plus.php",  
                method:"POST",  
                data:{last_video_id:last_video_id},  
                dataType:"text",  
                success:function(data)  
                {  
                     if(data != '')  
                     {  
                          $('#remove_row').remove();  
                          $('#load_data_table').append(data);  
                     }  
                     else  
                     {  
                          $('#btn_more').html("No Data");  
                     }  
                }  
           });  
      });  
 });  
 </script>