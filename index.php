<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="administration/css_admin/url.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/index.css">
    <title>Document</title>
</head>
<body>

<div class="wrapper">
    <div class="sidebar">
        <h2>Mon doc</h2>
        <ul>
            <li><a href="index.php?page=acc"><img src="images/icone home.png" alt=""> Acceuil</a></li>
            <li><a href="index.php?page=list"><img src="images/icone dossier.png" alt=""> Liste des patients</a></li>
            <li><a href="index.php?page=hor"><img src="images/icone consultation.png" alt=""> Horaire</a></li>
            <li><a href="index.php?page=rdv"><img src="images/icone de rendez-vous.png" alt=""> Rendez-vous</a></li>
            <li><a href="index.php?page=dec"><img src="images/icons8-déconnexion-64.png" alt=""> Déconnexion</a></li>

        </ul> 
        <div class="social_media">
          <a href="#"><img src="images/icons8-whatsapp-48.png" id="icones_liens"></a>
          <a href="#"><img src="images/icons8-facebook-48.png" id="icones_liens"></a>
          <a href="#"><img src="images/icons8-instagram-48.png" id="icones_liens"></a>
      </div>
    </div>
    <div class="main_content">
        <div class="header">
          <div class="nom">
            Bienvenue docteur 
          </div>
          
          <div class="photo_doc">
            <img  src="images/icons8-personne-homme-64.png">               
          </div>  
    </div>
    <div class="info">
            <div class="">
                 
    <?php
    if(isset($_GET['page'])){
        switch($_GET['page']) {
            case 'acc': include("acceuil.php");
            break;

            case 'list': include("liste_patient.php");
            break;

            case 'hor': include("horaire.php");
            break;

            case 'rdv': include("rendezVous.php");
            break;

            case 'dec' : include("deconnexion.php");
            break;
            default: include ("acceuil.php");
        }
    } else{
        include "acceuil.php";
    }
    ?> 
            </div>
          </div> 
    <br>
    
</div>
</body>
</html>