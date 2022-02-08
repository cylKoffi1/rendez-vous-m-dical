<?php
$bdd= new PDO ('mysql:host=localhost; dbname=medecin','root','root');

if(isset($_POST['nom_utilisateur']) && isset($_POST['mdp'])){

    function validate($data){
        $data=trim($data);
        $data=stripcslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }
$user=validate($_POST['nom_utilisateur']);
$mdp=validate($_POST['mdp']);

/*requete */
$sql="SELECT * FROM identifiant WHERE nom_user='$user' AND mdp_user='$mdp'";
$exe=$bdd->query($sql);
$a=$exe->fetch();
if(!empty($a)){
    header("location:http://localhost:81/medecin/conception/koumassi_header.php");
    session_start();
    $_SESSION['name']=$a['nom_user'];
    $_SESSION['id']=$a['id_user'];
}else{
    header("location:seco.php?error=mot de passe incorrect");
}
}
else{
    header("location:seco.php");
    exit();
}
?> 