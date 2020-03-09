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
 </div>



<div id="formulaire">
<form method="post" action="type_machine.php">
   <p>
      <label for="materiel">CADRE</label><br />
       <select name="cadre" id="cadre">
               <option value="A">CADRE 1.20</option>
               <option value="B">CADRE 2.00</option>
               <option value="C">CADRE 3.50</option> 
       </select>
      <label for="materiel">ATTELAGE</label><br />
       <select name="attelage" id="attelage">
               <option value="A">CAT.1</option>
               <option value="B">CAT.2</option>
               <option value="C">CAT.3</option> 
       </select>
      <label for="materiel">DENTS</label><br />
       <select name="dents" id="dents">
               <option value="A">Dents carrées 30mm * 650mm</option>
               <option value="B">Dents sécurité ressort</option>
               <option value="C">Disques Agrisem</option> 
       </select>
      <label for="materiel">SEMOIR</label><br />
       <select name="semoir" id="semoir">
               <option value="A">SANS</option>
               <option value="B">Semoir Delimbe</option>
       </select>
      <label for="materiel">ROULEAU</label><br />
       <select name="rouleau" id="rouleau">
               <option value="A">Culti Packer</option>
               <option value="B">Rouleau Cage</option>
       </select>
   </p>
   <input type="submit" value="Envoyer" />
</form>
</div>




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
