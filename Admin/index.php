<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/index.css">
    <title>Document</title>
</head>
<body>

<div class="wrapper">
    <div class="sidebar">
        <h2>Mon doc</h2>
        <ul>
            <li><a href="index.php?page=acc"><img src="../assets/img/images/icons8-profile-50.png" alt=""> Profile</a></li>
            <li><a href="index.php?page=list"><img src="../assets/img/images/icone dossier.png" alt=""> Liste des patients</a></li>
            <li><a href="index.php?page=hor"><img src="../assets/img/images/icone consultation.png" alt=""> Horaire</a></li>
            <li><a href="index.php?page=rdv"><img src="../assets/img/images/icone de rendez-vous.png" alt="">Rendez-vous</a></li>
            <li><a href="index.php?page=dec"><img src="../assets/img/images/icons8-déconnexion-64.png" alt=""> Déconnexion</a></li>

        </ul> 
        <div class="social_media">
          <a href="#"><img src="../assets/img/images/icons8-whatsapp-48.png" id="icones_liens"></a>
          <a href="#"><img src="../assets/img/images/icons8-facebook-48.png" id="icones_liens"></a>
          <a href="#"><img src="../assets/img/images/icons8-instagram-48.png" id="icones_liens"></a>
      </div>
    </div>
    <div class="main_content">
        <div class="header">
          <div class="nom">
            Bienvenue docteur 
          </div>
          
          <div class="photo_doc">
            <img  src="../assets/img/images/icons8-personne-homme-64.png">               
          </div>  
    </div>
    <div class="info">
            <div class="">
                 
    <?php
    if(isset($_GET['page'])){
        switch($_GET['page']) {
            case 'acc': include("profile.php");
            break;

            case 'list': include("liste_patient.php");
            break;

            case 'hor': include("horaire.php");
            break;

            case 'rdv': include("rendezVous.php");
            break;

            case 'dec' : include("deconnexion.php");
            break;
            default: include ("profile.php");
        }
    } else{
        include "profile.php";
    }
    ?> 
            </div>
          </div> 
    <br>
    
</div>
</body>
</html>