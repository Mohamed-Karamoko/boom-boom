<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Tableau de Bord Admin</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<style type="text/css"> 
	.content {
	
    max-width: 700px;
    margin: auto;
    	background-color: rgba(52,73,94,0.7);
    padding: 10px;
	
}
	  body{
		  background:url("img_ad/bg-admin.jpg") no-repeat fixed;
		  background-size: cover;
		
	  }
	      h1{
			   font-family;font-family: 'Ruthie', cursive !important; 
		  text-align:center;
		  background-color:#000;
		  color: #fff;
		    font-size: 50px;
		  border: 4px solid;
		  }
		     h3{
				 background-color:#FFF;
				 font-style: italic;
				 font-size: 28px;
			 }
			    input[type='submit']{
				 background-color:#000;
				 color: #fff;
				 margin-left:0px;
				 /* margin-top:20px; */
				 margin-top:-100px;
			}
			   input[type='file']{
				   margin-top:15px;
				   margin-left:25px;
			   }
			       .model_success{
								 color:#fff;
								 background-color:#000;
								 font-size:25px;
								 text-align:center;
							 }
							     .model_error {
									 color:#fff;
								 background-color:#000;
								 font-size:25px;
								 text-align:center;
								 }
								    input{
										
										
									}
									   label{
										   color: #fff !important;
									   }
	</style>
	
	<link href="https://fonts.googleapis.com/css?family=Ruthie" rel="stylesheet">
	
</head>
<body>
				<div class="content"> 
				<h1>Tableau de Bord</h1>
				     <h3 align="center">Remplissez le formulaire</h3>
					 
					 	<?php 
							if(!empty($_FILES))
							{ 
					require('imgClass.php');
								$image_perfor = $_FILES['img_perfor'];
						$extension = strtolower(substr($image_perfor['name'],-3));
						$extensions_autorisees= array("jpg","gif","png");
								if(in_array($extension,$extensions_autorisees)){
			move_uploaded_file($image_perfor['tmp_name'],"img_perfor/".$image_perfor['name']);
			Img::creerMin("img_perfor/".$image_perfor['name'],"img_perfor/img-perfor_Min",$image_perfor['name'],250,600);
			                             	}
													else {
										$msg_error = '<div class="model_error">Le fichier n\'est pas une image!</div>';
													}
							}
							?>
							<form method="post" action="index_admin.php" enctype="multipart/form-data" > 
						 <?php
											// if(isset($msg_error)){
												// echo $msg_error;
											// }
									           
											    // else{
													// echo '<div class="model_success">'.'Votre modèle  a été ajouter avec succès!<br/>'.'</div><br/>';
												// }
												              ?>
									<?php  
									    	include('config/connection.php');
									?>
		<form method="POST" action="index_admin.php" >
 
    <label for="exampleInputEmail1">Titre Performance:</label>
    <input type="text" class="form-control" id="" name="title" placeholder="Entrer le titre de la performance">

 
   
	   <label for="exampleInputPassword1">Insérer une image:</label>
	<input type="file" name="img_perfor" id=""/> <!--<input type="submit" name="ajout" value="AJOUTER" />-->
 
     
	 <label for="exampleInputPassword1">Description de l'image:</label>
	 <textarea class="form-control" name="description_image" rows="3">
	 
	 </textarea><br/>
	 
	 <label for="exampleInputPassword1">Artistes invités:</label>
	 <input type="text" class="form-control" name="artists" id="" placeholder="Entrer les artistes invités "><br/>
	 
	 <label for="exampleInputPassword1">Médias:</label>
	 <input type="text" class="form-control" name="medias" id="" placeholder="Entrer les médias"><br/>
	 
	 
	 <input type="submit" value=" Enregistrer"  name="envoie"/>
  </form><br/>
							<?php
							$Folder = "img_perfor/img-perfor_Min";
							$Open =  opendir($Folder);
			while($file=readdir($Open)){
		$extensions_autorisees= array("jpg","gif","png");
		$extension = strtolower(substr($file,-3));
			if(in_array($extension,$extensions_autorisees))
			{


				$titre = $_POST['title'];
				$image = $file;
				$desc_img = $_POST['description_image'];
				$Artists = $_POST['artists'];
				$Medias = $_POST['medias'];

				if($titre&&$image&&$desc_img&&$Artists&&$Medias) {

					$req = Dbc::getInstance()->prepare(" INSERT INTO performances SET title_perfor=?, description_perfor=?, artists_perfor=?,medias_perfor=?, title_img= ?");
					$req->execute(array($titre, $desc_img, $Artists, $Medias, $image));

				}
			   
				 ?>
				      <span class="modele_min"> 
					 
							</span>
			        <?php
				  }
				   
			}
		    
						?>
				
				</div>
	
</body>
</html>