<?php
include("connexion.php");
@$id= 9;
$countlike='0';
$sqlcountlike = "SELECT * FROM likeanddislikes WHERE valeur_likeanddislike='content' AND likeanddislikes.id_image=$id";  
$resulcountlike = mysqli_query($conn, $sqlcountlike);
$countlike=mysqli_num_rows($resulcountlike);
echo $countlike;

?>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        