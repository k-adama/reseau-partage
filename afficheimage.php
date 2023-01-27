<?php
include("connexion.php");
include("likdislik.php");
include("menu.php");
// include("commentaire.php");
@$id = $_GET['id'];
$countlike='0';
// requetle like
// $sqllike = "SELECT * FROM likeanddislikes WHERE valeur_likeanddislike='content' AND likeanddislikes.id_image=$id";  
// $resullike = mysqli_query($conn, $sqllike);
// $compteurlike=mysqli_num_rows($resullike);

// requete dislikes
// $sqldislike = "SELECT * FROM likeanddislikes WHERE valeur_likeanddislike='fache' AND likeanddislikes.id_image=$id";  
// $resuldislike = mysqli_query($conn, $sqldislike);
// $compteurdislike=mysqli_num_rows($resuldislike);

//hhhhhhhhh
$sqlquery="SELECT * from publication WHERE publication.id =$id";
$res=mysqli_query($conn,$sqlquery);
// requete recupération image unique
$sql = "SELECT titre, typepublication, lienimage, messagecom, datepub FROM publication WHERE publication.id =$id";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result))
         {
          ?>
          <?php ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
                <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
                <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
                <link rel="stylesheet" href="im.css">
                <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
                <title>Document</title>
            </head>
            <body>
                <?php
                    echo "
                    <div style='text-align:center;padding-top:10px;margin-bottom:-35px;text-transform:capitalize;font-size:2.5em;color:#008518;'>".$row['typepublication']."</div>
                   
                    <div style='padding-top:-80px; margin-bottom:-10px; display:flex;' id='picture'>
                    <img src='.//".$row['lienimage']."' style='width:240px; height:250px; border-top-left-radius: 10px; border-top-right-radius:10px;'>
                    <div style='margin-left:50px;'>
                    <h1 style='text-transform:uppercase; color:#3551EC;'>".$row['titre']."</h1>
                    <p style='color:#000000;'>".$row['messagecom']."</p>
                    <p style='color:#596CE5;'>publié le ".$row['datepub']."</p>
                    </div>
                    </div>
                    
                   
                    ";
                ?>

<div class="likons">
<?php if($row=mysqli_fetch_assoc($res)){?>
              <!-- likons -->
              <form action="" method="POST" id="MyformLike">  
                <div class="likeclass">
                <span id="like_loop_<?php echo $id?>" class="likes_counts" style="color:black; width:40px; height:40px;"><?php echo $row['like_count']?></span>
                <button type="button" id="like" name="like"><a href="javascript:void(0)">
              <span onclick="like_update('<?php echo $id?>')"><i class="like fa fa-thumbs-up like-btn"></i></span>
                </a></button> 
            </div>
          
                    
              </form>   

              <form action="" method="POST">
                <div class="likeclass">
                <button type="button" id="dislike" name="dislike"><a href="javascript:void(0)">
                <span onclick="dislike_update('<?php echo $id?>')"><i class="fa-solid fa-thumbs-down" style="color:red;"></i></span>
                  </a></button>
                <span id="dislike_loop_<?php echo $id?>" class="likes_counts" style="background-color:red; color:black;width:40px; height:40px;"><?php echo $row['dislike_count']?></span>
                   
              </div>
                </form> 
              <?php } ?> 
                  
            
</div>

<div class="commentaire" style="margin-top:10px">
<!-- <div id="response" style="text-align:center; margin-right:500px; color:green; margin-top:20px;"></div> -->
    <div class="commentair">
        <form action="" method="POST" class="form" id="Myform">
            <input type="text" name="commentaires" class="comment" id="monCommentaire" placeholder="commentaire...">
            <input type="text" name="id" value="<?php echo $id ?>" hidden>
            <button type="submit" value="Submit" id="btncomment" name="commentaire"><i class="far fa-comment-dots" id="com"></i> </button>
        </form>
    </div>
 
</div>

<div>

</div>
<script>
$(function () {
	$('form#Myform').on('submit', function (event) {
		$.ajax({
			type: 'post',
			url: 'commentaire.php',
			data: $('form').serialize(),
			success: function (data) {
                $('#monCommentaire').val('');
                // $("#response").html("Votre commentaire a été pris en compte !");
			}
          
		});
		event.preventDefault();
       
      
	});
});
</script>
<script>
function like_update(id){
			jQuery.ajax({
				url:'update_count.php',
				type:'post',
				data:'type=like&id='+id,
				success:function(result){
					var current_count=jQuery('#like_loop_'+id).html();
					current_count++;
					jQuery('#like_loop_'+id).html(current_count);
			
				}
			});
		}	

        	
		function dislike_update(id){
			jQuery.ajax({
				url:'update_count.php',
				type:'post',
				data:'type=dislike&id='+id,
				success:function(result){
					var current_count=jQuery('#dislike_loop_'+id).html();
					current_count++;
					jQuery('#dislike_loop_'+id).html(current_count);
			
				}
			});
		}	
        </script>
            </body>
            </html>


<?php


}
} 
?>

