
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>

<!---------------------------------------------->
<link rel="stylesheet" type="text/css" href="header/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="header/css/custom.css">
<link rel="stylesheet" type="text/css" href="header/css/font-awesome.min.css">

<script src='header/js/jquery-3.2.1.min.js'></script>
<script src='header/js/popper.min.js'></script>
<script src='header/js/bootstrap.min.js'></script>



</head>
<body id="header">


<section class="apropos" id="apropos">
<h2 class="aproposlab" for=""><span>A </span>Propos De Nous</h2>

<!-- Ecriture pour parler de la structure-->
<div class="imagelab">
    <img  src="../images/t1.jpeg" alt="">
</div>
<p class="plab" >Bonjour ,Dans l'optique de faciliter l'acces aux meilleurs experts dans le domaine des sciences médicales, notre structure offre à la population des soins de qualité dans 
    divers domaines laissant à votre guise le choix entre une palette de medecins pour vous soulager à moindre couts.
</p>
</section>

<section class="temoignage" >

    <h2 class="clientlab" id="temoignage" for="">Que Disent Nos<span class="spanC"> C</span>lients</h2>

        <!-- Conception de  la boite aux demoignages-->

<div class="temoinbox1">
          <div class="imbox">
          <img class='imagetemmmoin' src="../images/t2.jpg" alt=""> 
        </div>
    
         <div class="texte">

        <p> Dans l'optique de faciliter l'acces aux meilleurs experts dans le domaine des sciences médicales, notre structure offre à la population des soins de qualité dans 
            divers domaines laissant à votre guise le choix effiscient pour vous soulager à moindre couts. </p>
        </div>
</div>


<div class="temoinbox2">
    <div class="imbox">
    <img class='imagetemmmoin' src="../images/t2.jpg" alt=""> 
  </div>

   <div class="texte">
  <p> Dans l'optique de faciliter l'acces aux meilleurs experts dans le domaine des sciences médicales, notre structure offre à la population des soins de qualité dans 
      divers domaines laissant à votre guise le choix effiscient pour vous soulager à moindre couts. </p>
  </div>
</div>


<div class="temoinbox3">
    <div class="imbox">
    <img class='imagetemmmoin' src="../images/t2.jpg" alt=""> 
  </div>

   <div class="texte">
  <p> Dans l'optique de faciliter l'acces aux meilleurs experts dans le domaine des sciences médicales, notre structure offre à la population des soins de qualité dans 
      divers domaines laissant à votre guise le choix effiscient pour vous soulager à moindre couts. </p>
  </div>
</div>
<!--Fin  Conception de  la boite aux demoignages-->

</section>

<section class="Contact" >
    <h2 class="contactlab" id="contact" for=""><span>N</span>ous Contacter</h2>
    
    <!-- Conception de  la boite de contact-->

    <div class="contactform">
        <h3 class="hform">Envoyer un message</h3>
        
        <div class="colore">
            <div>
                <input class="contactemail" placeholder="email"></input>
            </div>
            <div>
                <input class="messageemail" placeholder="message"></input>
            </div>
        </div>
      
   <!--Fin  Conception de  la boite contact-->

        <div class="">
            <input type="button" class="contactbtn" value="ENVOYER">
        </div>
        
    </div>
</section>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<footer>
    <p class="copiright">copyright 2022 <a href="#">l equipe monDoc</a> Tous droits reservé</p>
</footer>

</body>
</html>
<style>
/*A PROPOs*/
.aproposlab{    
    position: absolute;
    top: 326px;
    color: black;
    text-transform: capitalize;
    left: 161px;
    font-size: 2em;
}
.aproposlab span{
    color: orange;
}
.imagelab img{
 
    position: absolute;
    top: 354px;
    left: 682px;
    width: 441px;
    height: 462px;
}
.copiright{
    position: absolute;
    top: 97%;
}

/*Style liste deroulante*/
.carousel-inner{
    position: absolute;
    left: 0%;
    top: 12%;
}


/*Section temoignage non*/
.clientlab{
    position: absolute;
    top: 42%;
    padding-left: 429px;
}
.clientlab span{
    color: orange;
}
.plab{
    position: absolute;
    top: 505px;
    left: 76px;
    font-size: 22px;
    width: 556px;
}



.temoinbox1{
    
    position: absolute;
    top: 50%;
    left: 10%;
    width: 272px;
    height: 359px;
    border-radius: 15px;
    box-shadow: 5px 15px 50px rgb(0 0 0 / 80%);

}
.texte{
    margin-block: 15%;
    PADDING: 9%;
}
.temoignage .temoinbox1 .imbox img {
  
    background-size: cover;
    box-shadow: 2px 2px 12px rgb(0 0 0 / 80%);
    HEIGHT: 80px;
    WIDTH: 80px;
    POSITION: relative;
    LEFT: -15%;
    TOP: -8%;
}

/*image2*/
.temoinbox2{
    position: absolute;
    top: 50%;
    right:10%;
    width: 272px;
    height: 359px;
    border-radius: 15px;
    box-shadow: 5px 15px 50px rgb(0 0 0 / 80%);

}


.temoignage .temoinbox2 .imbox img {
  
    background-size: cover;
    box-shadow: 2px 2px 12px rgb(0 0 0 / 80%);
    HEIGHT: 80px;
    WIDTH: 80px;
    POSITION: relative;
    LEFT: -15%;
    TOP: -8%;
}
/*image 3*/
.temoinbox3{
    position: absolute;
    top: 50%;
    left: 39%;
    width: 272px;
    height: 359px;
    border-radius: 15px;
    box-shadow: 5px 15px 50px rgb(0 0 0 / 80%);

}


.temoignage .temoinbox3 .imbox img {
  
    background-size: cover;
    box-shadow: 2px 2px 12px rgb(0 0 0 / 80%);
    HEIGHT: 80px;
    WIDTH: 80px;
    POSITION: relative;
    LEFT: -15%;
    TOP: -8%;
}

.imbox{

    POSITION: relative;
    top: 8%;
    LEFT: 36%;
    border: 1.2px solid teal;
    border-radius: 50%;
    width: 24%;
    height: 18%;
    OVERFLOW: hidden;
}

/*contact form non*/

.contactlab{
    position: absolute;
    top: 73%;
    padding-left: 495px;
}
.contactlab span{
    color: orange;
}
.contactform{  
    background-image: url(../../resto/Resto/images/img-form.jpg);
    background-size: cover;
    box-shadow: 2px 2px 12px rgb(0 0 0 / 80%);
    background-color: white;
    position: absolute;
    top: 85%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 53%;
    height: 15%;
    border-radius: 5px;
    box-shadow: 5px 15px 50px rgb(0 0 0 / 80%);
}
.colore{
    background-color: rgb(140, 221, 194);
}
.hform{
    BACKGROUND-COLOR: #66756330;
    height: 15%;
    border-radius: 4px;
    align-items: center;
}
.contactemail{
    position: absolute;
    top: 33%;
    left: 30%;
    outline: none;
}
.messageemail{
    position: absolute;
    left: 30%;
    top: 54%;
    height: 82px;
    width: 222px;
}
    
/*bouton en lien avec effet*/    

.contactbtn:hover {
    letter-spacing: 4px;
}

.contactbtn {
    top: 244px;
    left: 193px;
    font-size: 1em;
    color: #fff;
    background: #1983a3;
    padding: 1px 20px;
    display: inline-block;
    margin-top: 20px;
    text-decoration: none;
    text-transform: uppercase;
    letter-spacing: 2px;
    transition: 0.5s;
    margin-left: 10px;
    position: absolute;
}

section.contact{    
    background-image: url(../../resto/Resto/images/img-form.jpg);
    width: 100%;
    background-position: unset;
    background-size: cover;
    box-shadow: 2px 2px 12px rgb(0 0 0 / 80%);
    width: 100%;
    background-position: unset;
}



    /*fin bouton lien*/

</style>