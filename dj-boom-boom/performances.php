<style type="text/css">
    p.title_perfor{
        background-color: #000 !important;
        color: #fff;
        font-size: 16px;
        /*font-size: 18px;
        text-align: center;*/

    }
        p.more{
            float: right;
            bottom: 0;
            background-color: #000;
            color: #fff;
            cursor: pointer;
        }
		   .title_perforView{
			   background-color: #000 !important;
			   text-align:center;
			   color: #fff;
			   font-size: 18px;
		   }
				.desc-perfor{
					background-color:#FFF;
					color: #000;
				}
        a{
            text-decoration: none !important;
            list-type: none !important;
            color: #fff !important;
        }
</style>
<h2 align="center" style="font-family: 'Fredericka the Great', cursive;background-color:#fff;">Performances</h2>
<div class="row">

<?php
include('admin/config/connection.php');
$resultat = Dbc::getInstance()->query("select * from performances ")->fetchAll(PDO::FETCH_ASSOC);
foreach ($resultat as $data ) {
        ?>

        <?php  $data['id_perfor']; ?>
        <?php  $data['artists_perfor']; ?>
        <?php  $data['medias_perfor']; ?>
         <?php  $data['artists_perfor']; ?>
         <?php  $data['medias_perfor']; ?>

        <div class="col-md-4">
            <div class="thumbnail" style="width:100%; height: 100%;">
                <img src="./admin/img_perfor/<?php echo $data['title_img']; ?>" alt="Lights" style="width:100%;cursor:pointer;">
                <div class="caption">
                    <p class="title_perfor"><?php echo $data['title_perfor']; ?></p><br/>
                    <p><?php echo $data['description_perfor'];?></p>
                    <p class="more "><a class="act1" datatype="view_perfor.php?id=<?= $data['id_perfor'];?>" href="#">More>></a></p><br/>
					
					
					<div class="flow">

                   <div class="box">
		<button class="closeWindow">Close</button>
		
		
                       <div class="retour">
                       
					  
					   </div>

        </div>
    </div>


                </div>

            </div>

        </div>
        <?php
    }
?>
</div><br/>
            
<script src="js/jquery-3.1.1.js"></script>
  <script type="text/javascript">
      
	  // $("div.flow").hide();
      // $(".act1").click(function () {
          // $("div.flow").fadeIn();
      // });

      $(".closeWindow").click(function () {
          $("div.flow").hide();
      });


      $(".act1").click(function(){
//          alert('ddd');
          $("div.flow").fadeIn();
          var  urlk = $(this).attr('datatype');
          $.ajax({
              url:urlk,
              data:'',
              type:'POST',
              cache: false,
              success: function (rdata){
                  $("div.retour").html(rdata);
              }
          });
      });


  
  
  </script>
