<html>
  <head>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  	<link href='style_leprefabrique.css' rel='stylesheet'>
    <meta charset="utf-8">
    <title>Configurateur Le Pré Fabriqué</title>
  </head>

      <body>
  	      <div id="menu_haut">
             <a href="index.php"><img </a>
             <img src="images/logo_leprefabrique.png" alt="picture description" width="100" align="middle"> </a>
             <h1>Configurateur Le Pré Fabriqué</h1>
             <!-- <p>Configurez vous même votre outil de travail</p> -->
          </div>

 <div> 

<p> Choix du cadre <?php echo $_POST['cadre']; ?> </p>
<p> Choix de l'attelage <?php echo $_POST['attelage']; ?> </p>
<p> Choix des dents <?php echo $_POST['dents']; ?> </p>
<p> Choix du semoir <?php echo $_POST['semoir']; ?> </p>
<p> Choix du rouleau <?php echo $_POST['rouleau']; ?> </p>



<p>
Le matériel est de type
<?php

$cadre = $_POST['cadre'];
$attelage = $_POST['attelage'];
$dents = $_POST['dents'];
$semoir = $_POST['semoir'];
$rouleau = $_POST['rouleau'];

$type = ("$cadre$attelage$dents$semoir$rouleau");
print "$type"
?>
</p>


<div id="affichage_images">
             <img src="images/vues/<?php print "$type"?>.jpeg" alt="picture description" width="100" align="middle">
</div>




 </div>




     <!--  <div class="container">
          <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-3">
                  <div class="card text-center">
                      <img src="images/goal.png" alt="picture description" width="100">
                      <h2>Fast</h2>
                      <p>A fast app, <strong>very fast</strong> app</p>
              </div>
            </div>

              <div class="col-xs-12 col-sm-6 col-md-3">
                   <div class="card text-center">
                        <img src="images/bicycle.png" alt="picture description" width="100">
                        <h2>Simple</h2>
                        <p>A simple app, <strong>vesry simple</strong> app</p>
                   </div> 
              </div>
            </div>

              <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="card text-center">
                         <img src="images/trekking.png" alt="picture description" width="100">
                          <h2>Awesome</h2>
                          <p>An awesome app, <strong>very awesome</strong> app</p>
                    </div>
            </div>
              <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="card text-center">
                       <img src="images/cheese.png" alt="picture description" width="100">
                        <h2>Beautiful</h2>
                       <p>A beautiful app, <strong>very beautiful</strong> app</p>
                     </div>
              </div>
          </div> -->


    <div id="line">
    <p>Bienvenue sur le configurateur Le Pré Fabriqué</p>
	</div>

    <div id="footer">
        <ul class="list-inline">
         <li><a href="#"><i class="fa fa-instagram"></i></a></li>
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-apple"></i></a></li>
        <li><a href="#"><i class="fa fa-github"></i></a></li>
        </ul>
    </div>

  </body>


</html>