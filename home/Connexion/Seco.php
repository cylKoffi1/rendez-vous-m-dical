
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
   
</head>
<body>
    <div class="regform"><h1>CONNEXION</h1></div>
    <div class="main">
        <form action="secoo.php" method="POST">
            <div id="name" class="name">
                <input class="nomutilisateur"  name="nom_utilisateur" type="texte" required=""><br>
                <label class="nomutilisateurlabel" for="">Nom Utilisateur</label>
                <input type="password" class="mdp" name="mdp" required="">
                <label for="" class="mdplabel"> Mot De Passe</label>
            </div>
            <button class="custom-btn btn-7"><span>Connexion</span></button>

        </form>
        
    </div>

    <script>

        
       
    </script>

    <style>
                *{
            margin: 0;
            padding: 0;
        }
        body{
    background-image: url(../images/c1.jpg);
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    font-family: sans-serif;
    margin-top: 88px;
    height: 474px;
        }
        .regform{
            
    width: 493px;
    background-color: rgb(0, 0, 0,14);
    margin: auto;
    color: #ffffff;
    padding: 10px 0px 10px 0px;
    text-align: center;
    border-radius: 15px 15px 0 0px;
        }
        .main{
    background-color: rgb(0, 0, 0,0.6);
    width: 494px;
    height: 330px;
    border-radius: 0px 0px 15px 15px;
    margin: auto;
        }
        form{
            padding: 10px;
        }
        #name{
            width: 100%;
            height: 100px;
        }
        .nomutilisateur{
           
    position: relative;
    left: 131px;
    top: 33px;
    line-height: 40px;
    border-radius: 6px;
    padding: 0px 36px;
    text-align: center;
    transition: 0.5s;
        }
        .name input:focus ~ .nomutilisateurlabel,
        .nomutilisateur:valid ~ .nomutilisateurlabel
{
    position: relative;
    left: 134px;
    top: 24px;
    color: #32d2da;
    transition: 0.5s;        
}
        .mdp{
          
    position: relative;
    left: 28px;
    top: 97px;
    line-height: 40px;
    border-radius: 6px;
    padding: 0 22px;
    font-size: 16px;
    color: #555;
    text-align: center;
}
.mdp:focus~.mdplabel, .mdp:valid~.mdplabel{
    position: relative;
    left: -214px;
    top: 131px;
    color: #32d2da;
    transition: .5s ease-in-out;       
}


        .nomutilisateurlabel{
           pointer-events: none ;
            position: relative;
    color: #000000;
    text-transform: capitalize;
    font-size: 14px;
    left: 201px;
    top: -13px;
        }
        .mdplabel{
           
    position: relative;
    color: #090909;
    text-transform: capitalize;
    font-size: 14px;
    left: -142px;
    top: 97px;
    pointer-events: none;
        }

        button{
           
    background-color: #3BAF9F;
    display: block;
    margin: 121px 0px 0px 189px;
    text-align: center;
    border-radius: 12px;
    border: 2px solid #366473;
    padding: 12px 24px;
    outline: none;
    color: white;
    cursor: pointer;
           transition: 0.25px;
       }
       button:hover{
           background-color: #5390F5;
       }

    </style>
</body>
</html>