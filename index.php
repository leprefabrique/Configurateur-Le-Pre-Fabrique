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
             <img src="images/logo_leprefabrique.png" alt="picture description" width="100" align="middle">
             <h1>Configurateur Le Pré Fabriqué</h1>
             <!-- <p>Configurez vous même votre outil de travail</p> -->
          </div>




<form method="post" action="type_machine.php">
   <p>
      <label for="materiel">Configurez votre outil</label><br />
       <select name="cadre" id="cadre">
               <option value="A">CADRE 1.20</option>
               <option value="B">CADRE 2.00</option>
               <option value="C">CADRE 3.50</option> 
       </select>
       <select name="attelage" id="attelage">
               <option value="A">CAT.1</option>
               <option value="B">CAT.2</option>
               <option value="C">CAT.3</option> 
       </select>
       <select name="dents" id="dents">
               <option value="A">Dents carrées 30mm * 650mm</option>
               <option value="B">Dents sécurité ressort</option>
               <option value="C">Disques Agrisem</option> 
       </select>
       <select name="semoir" id="semoir">
               <option value="A">SANS</option>
               <option value="B">Semoir Delimbe</option>
       </select>
       <select name="rouleau" id="rouleau">
               <option value="A">Culti Packer</option>
               <option value="B">Rouleau Cage</option>
       </select>
   </p>
   <input type="submit" value="Envoyer" />
</form>




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
