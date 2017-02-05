<style type="text/css"> 
			.Title_PERFOR{
				background-color:#000;
				text-align:center;
				font-size: 16px;
				color: #fff;
				font-style: italic;
			}
					p#at_perfor{
						text-decoration:underline;
						font-style: italic;
						font-size: 14px;
					}
						p#med_perfor{
							text-decoration:underline;
							font-style: italic;
							font-size: 14px;
						}
</style>
<?php
include("./admin/config/connection.php");


if(isset($_GET['id']) && !empty($_GET['id'])){
    $idt = $_GET['id'];
    $bdd = Dbc::getInstance();
    $q = $bdd->query("select * from performances where id_perfor='$idt' ")->fetch();
    ?>
    <img src="./admin/img_perfor/<?php echo $q['title_img'];?>" alt="Lights" style="width:100%;cursor:pointer;height:300px;">
    <p class="Title_PERFOR"><?php echo $q['title_perfor']; ?></p>
	<p><?php echo $q['description_perfor'];?></p>
	<p id="at_perfor">Artists:</p><p><?php echo $q['artists_perfor'];?></p>
	<p id="med_perfor">Medias:</p><p><?php echo $q['medias_perfor'];?></p>
    
	<?php

}else{
    echo "Non je ne reçois rien";
}
    ?>