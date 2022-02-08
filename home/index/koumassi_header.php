
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>

  <link rel="stylesheet" type="text/css" href="../index/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../index/css/custom.css">
<link rel="stylesheet" type="text/css" href="../index/css/font-awesome.min.css">
<script src='../index/js/jquery-3.2.1.min.js'></script>
<script src='../index/js/popper.min.js'></script>
<script src='../index/js/bootstrap.min.js'></script>
</head>
<body>

    <header class="containerr">
        <div class="listeDeroulante" onclick="djo();" ></div>
          <label class="logolab" for="">Mon<span> D</span>oc</label>
       
       
           <a href="#header"  class="lien-header">Acceuil</a>
           <a href="#apropos" class="lien-apropos">A propos</a>
           <a href="#rdv" class="lien-rdv">Rendez-vous</a>
           <a href="#temoignage" class="lien-temoin">Temoignage</a>
           <a href="#contact" class="lien-contact">Contact</a>
           <a href="#connexion" class="btn-connexion">connexion</a>

              
       
      
   </header>
   <div id="carouselExampleIndicators" class="carousel slide my-2 rounded-1 shadowBlack" data-ride="carousel" >
      <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="../images/1.jpg" alt="First slide" style="height: 190px;">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="../images/2.jpg" alt="Second slide" style="height: 190px;" >
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="../images/4.png" alt="Third slide" style="height: 190px;">
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

        <?php include('header.php') ?>


    
   <script>
    function djo(){
    const navActive= document.querySelector('.containerr');
    const acceuil= document.querySelector('.lien-header');
    const apropos= document.querySelector('.lien-apropos');
    const temoin= document.querySelector('.lien-temoin');
    const rdvous= document.querySelector('.lien-rdv');
    const contact= document.querySelector('.lien-contact');
    const btn=document.querySelector('.btn-connexion');
    
    navActive.classList.toggle('arktive') ;
    acceuil.classList.toggle('arktive');
    apropos.classList.toggle('arktive');
    temoin.classList.toggle('arktive');
    rdvous.classList.toggle('arktive');
    contact.classList.toggle('arktive');
    btn.classList.toggle('arktive');
    
    }
                  
        </script>


<style>
   
/*Gestion des labels*/

label.logolab{
        color: white;
    position: fixed;
    top: 1%;
    left: 1%;
    font-size: 108%;
    }
span{
    font-size: 122%;
    color: #fb911f;
}
/*bouton connexion avec simple effet de couleur*/
.btn-connexion{
    padding: 0.6%;
    color:#fda505 ;
background-color:#fff;
   
}
.btn-connexion:hover{

    background-color:#fda505 ;
    color: #ffff;
}
/*fin*/
/*bouton en lien avec effet*/    

/*.azerty:hover {
    letter-spacing: 4px;
}

.azerty {
    font-size: 1em;
    color: #fff;
    background: #fb911f;
    padding: 10px 20px;
    display: inline-block;
    margin-top: 20px;
    text-decoration: none;
    text-transform: uppercase;
    letter-spacing: 2px;
    transition: 0.5s;
    margin-left: 10px;}
*/

    /*fin bouton lien*/
    
    header{
        position: fixed;
        width: 100%;
        top: 0%;
    background-color:#5b7387;
    display: flex;
    align-items: center;
    justify-content: space-around;
    padding-bottom: 35px;
    font-size: 108%;
    box-shadow: 0px 15px 22PX rgb(0 0 0 / 32%);
    z-index:1;
 }   
/*colorier A */
 .lien-header{
   
    text-decoration: none;
    transform: translate(10px, 10px);
    color: white;
    FONT-WEIGHT: 100;
}
.lien-apropos{
    text-decoration: none;
    transform: translate(10px, 10px);
    color: white;
    FONT-WEIGHT: 100;
}
.lien-contact{
    text-decoration: none;
    transform: translate(10px, 10px);
    color: white;
    FONT-WEIGHT: 100;
}
.lien-rdv{
    text-decoration: none;
    transform: translate(10px, 10px);
    color: white;
    FONT-WEIGHT: 100;
}
.lien-temoin{
    text-decoration: none;
    transform: translate(10px, 10px);
    color: white;
    FONT-WEIGHT: 100;
}


a:hover{
    color:#fda505 ;
    text-decoration: none;
}

/*Faire effet de soulignement*/
/*.lien-header::after{
    content: "";
    display: block;
    width: 100%;
    height:  2px;
    background: #fda505 ;
    transform: scale(0);
    transition: 0.3s ease-in-out;
  
}
.lien-header:hover::after{
    transform: scale(1);
}*/
/*fin effet*/

.btn{    
    transform: translate(17px, 12px);
}
/*rendre l'acceuil dynamique*/
@media (max-width: 970px) {
    .listeDeroulante{
        width: 5%;
    height: 5.12564%;
    background-image: url(../images/menu.png);
    position: fixed;
    left: 69%;
    top: 2%;
    cursor: pointer;
    
    }
    a{
        display: none;
    }
    label{
        position: fixed;
    left: 1%;
    top: 03%;
    }
    header.containerr{
        position: fixed;
    padding-bottom: 68px;
    left: 0%;
    width: 100%;
    }
 /*style pour js*/
    .containerr.arktive{
    background-color: #5b8773d1;
    padding: 22%;
    top: -5%;
    z-index: 1;
}
.lien-header.arktive:hover{
letter-spacing: 2px;
transition: 0.5s ease-in-out;}
.lien-header.arktive{
    display: inline;
    position: fixed;
    top: 9%;
    left: 40%;
    font-size: 136%;

}
.lien-apropos.arktive:hover{
letter-spacing: 2px;
transition: 0.5s ease-in-out;}
.lien-apropos.arktive{
    display: inline;
    position: fixed;
    top: 13.6%;
    left: 40%;
    font-size: 136%;

}
.lien-rdv.arktive:hover{

letter-spacing: 2px;
transition: 0.5s ease-in-out;
}
.lien-rdv.arktive{
    display: inline;
    position: fixed;
    top: 19%;
    left: 40%;
    font-size: 136%;
}

.lien-temoin.arktive:hover{
letter-spacing: 2px;
transition: 0.5s ease-in-out;}

.lien-temoin.arktive{
    display: inline;
    position: fixed;
    top: 23.4%;
    left: 40%;
    font-size: 136%;

}
.lien-contact.arktive:hover{
letter-spacing: 2px;
transition: 0.5s ease-in-out;}

.lien-contact.arktive{    
    display: inline;
    position: fixed;
    top: 28%;
    left: 40%;
    font-size: 136%;
}
.btn-connexion.arktive{
    display: inline;
    position: fixed;
    top: 36%;
    left: 40%;
}
   
}

#carouselExampleIndicators{
    top: 61px;
}
a.carousel-control-next {
    right: 0;
    height: 187px;
}
a.carousel-control-prev {
    left: 0;
    height: 187px;
}

</style>
    
</body>
</html>