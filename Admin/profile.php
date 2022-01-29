<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/profile.css">
    <title>Document</title>
</head>
<body>
<div class="contenu_prof">
    <div class="photo_prof">
        <img type="file" src="../assets/img/images/betsaleel.jpg" alt=""><br>
        <div class="form-group"> <input type="file" name="modifier_photo" value="voulez vous modifier votre photo de profile"></div>
       
    </div>
    <br><br>
    
    <div class='content'>
      <div class='title'>
        Utilisateurs	
      </div>
      <div class='grid'>
        <div class='col'>
          <div class='head'>
            Réinitialiser la profession
          </div>
            <form method="post">
                    <table><tbody>
                        <tr>
                            <td><label>Profession actuel :</label></td>
                            <td>
                                <select name="profession" require id="profession">
                                    <option></option>
                                    <option>churigie</option>
                                    <option>ophtamologue</option>
                                    <option>medecin</option>
                                    <option>pharmacien</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label>Changer la profession :</label></td>
                            <td><select name="profession1" >
                                    <option></option>
                                    <option>churigie</option>
                                    <option>ophtamologue</option>
                                    <option>medecin</option>
                                    <option>pharmacien</option>
                                </select></td>
                        </tr>
                    </tbody></table>
          <div class='btnset'>
		  <input class="btn pri" type="submit" name="submit" value="Sauvegarder" />
          </div>
            </form>
        </div>
        <div class='col'>
          <div class='head'>
            Réinitialiser le mot de passe
          </div>
	<form method="post">
		<table><tbody>
		    <tr>
			<td><label>Ancien mot de passe :</label></td>
			<td><input name="anciencode" required type="password"  /></td>
		    </tr>
		    <tr>
			<td><label>Nouveau mot de passe :</label></td>
			<td><input  name="nouveaucode1" required="required" type="password" /></td>
		    </tr>
		    <tr>
			<td><label>Nouveau mot de passe (confirmer) :</label></td>
			<td><input autocomplete="off" name="nouveaucode2" required="required" type="password" /></td>
		    </tr>
		</tbody></table>
	  <div class='btnset'>
		  <input class="btn pri" type="submit" name="changercode" value="Sauvegarder" />
          </div>
	</form>
        </div>
      </div>
      <div class='grid'>
        <div class='col'>
          <div class='head'>
            Email et contact
          </div>
	<form method="post">
    <table><tbody>
        <tr>
            <td><label>Email :</label></td>
            <td><input type="email" name="email"  /></td>
        </tr>
        <tr>
            <td><label>Contact :</label></td>
            <td><input type="tel" name="email"  /></td>
        </tr>
        </tbody></table>	
	  <div class='btnset'>
		  <input class="btn pri" type="submit" name="submit" value="Sauvegarder" />
          </div>
	</form>
        </div>
	<div class='col'>
          <div class='head'>
            Infos
          </div>
	<form method="post">
    <table><tbody>
                        <tr>
                            <td><label>Nom :</label></td>
                            <td><input type="text" name="nom_user" ></td>
                        </tr>
                        <tr>
                            <td><label>Prénom :</label></td>
                            <td><input type="text" name="prenom_user" value="Stan" /></td>
                        </tr>
                    </tbody></table>
		
		
		
		
	  <div class='btnset'>
		  <input class="btn pri" type="submit" name="submit" value="Sauvegarder" />
          </div>
	</form>
        </div>
      </div>
 </div>
    </div>
</div>

</body>
</html>