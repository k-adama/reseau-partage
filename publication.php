<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="style_css.css" />
	<title>Ajout</title>
	
</head>
<body>
<div class="global-container ">
	<div class="card login-form">
	<div class="card-body">
		<h3 class="card-title text-center ">Publication</h3>
		<div class="card-text">
			
			<form action="traitement/traite-publication.php" method="POST" enctype="multipart/form-data" id="">

				<div class="form-group" style="margin-bottom:10px">
					<label for="titre">Titre de publication</label>
					<input type="text" class="form-control form-control-sm" name="titre" id="titre">
				</div>
                <div class="form-group" style="margin-bottom:10px">
                <label for="">Type de publication</label>
                <select class="form-select" name="choix" id="choix">
                    <option selected disabled value="">Choisir</option>
                    <option value="restaurant">Restaurant</option>
                    <option value="recette">recette</option>
                    <option value="retour d'experience">retour d'expérience</option>
                    <option value="conseil">conseil</option>
                </select>
                </div>
				<div class="form-group" style="margin-bottom:10px">
					<label for="file">Image</label>
                    <input type="file" class="form-control form-control-sm" name="fichier" id="fichier">
				
				</div>
                <div class="form-group" style="margin-bottom:10px">
                    <label for="message">Message</label>
                    <textarea class="form-control" id="message" name="message"></textarea>
                </div>
                <br>
				<button type="submit" class="btn btn-primary btn-block" name="ajouter">Ajouter</button>
			</form>
		</div>
	</div>
</div>
</div>
</body>
</html>

<?php
?>