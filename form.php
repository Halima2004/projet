<?php
 include 'sentMail.php';
?>
<!DOCTYPE html>
 <html >
   <head>
       <title>formulaire</title>
	   <link rel="stylesheet" href="style.css">
	   <meta charset="utf-8" />
	</head>

   <body id="halima">
   <form action="test.php" method="POST"> 
   <div class="col1">
   <label for="nom"><strong>Nom :</strong></label>
   <input class="inp" name="Nom" type="text">
   <label for="prenom"><strong>Prénom :</strong></label>
   <input class="inp"  name="Prénom" type="text">
   <label for="adresse"><strong> Adresse :</strong></label>
   <input  class="inp" name="Adresse" type="text" > 
   <label for="télephone"><strong>Téléphone :</strong></label>
   <input  class="inp" name="Téléphone" type="text" > 
     <label for="facebook"><strong>Facebook :</strong></label>
   <input class="inp" name="Facebook" type="text"> 
   <label for="email"><strong>Email:</strong></label>
   <input class="inp" name="Email" type="email"> 
      <label for="nivetude"><strong>Niveau d'étude: </strong></label>
   <input class="inp" name="Niveau_étude" type="texte">
      <label for="specialite"><strong>Spécialité :</strong></label>
   <input class="inp" name="Spécialité" type="text"> 
      <label for="anneearret"><strong>Année d'arrêt des études :</strong></label>
   <input class="inp" name="Année_arrêt" type="texte"> 
      <label for="activite"><strong>Activité :</strong></label>
   <input class="inp" name="Activité" type="text">  
    </div>

  <div class="col2">
   <h3>Cycle Initial - Bac+2</h3> <br/>
   	 <h4>DTS Technicien Spécialisé</h4>	
	 <input type="checkbox" value="Systèmes et Réseaux Informatiques" name="Filière">  <big> Systèmes et Réseaux Informatiques </big> <br/>
	 <input type="checkbox" value="Développement Informatique" name="Filière">  <big> Développement Informatique</big> <br/>
	 <input type="checkbox" value="Gestion des Entreprises" name="Filière">   <big>Gestion des Entreprises </big><br/> <br/>
    <h4>DT Technicien</h4>
	 <input type="checkbox" value="Gestion informatisé" name="Filière">   <big>Gestion informatisé</big> <br/>
	 <input type="checkbox" value="Support Technique et maintenance Informatique et Réseau" name="Filière">   <big>Support Technique et maintenance Informatique et Réseau</big> <br/> <br/>
	<h4>DQ Qualification</h4> 
	  <input type="checkbox" value="Opérateur de Saisie" name="Filière"> <big> Opérateur de Saisie </big><br/> <br/>
	<h3>Cycle Supérieur </h3> <br/>
    <h4>Licences Professionnelles Européennes - Bac+3</h4> 
 	 <input type="checkbox" value="licence Professionnelle Réseaux et Télécommunications" name="Filière">l<big>licence Professionnelle Réseaux et Télécommunications</big><br/>
	 <input type="checkbox" value="Bachelor Assistant de Gestion en Ressources Humaines (DEESARH)" name="Filière" ><big>Bachelor Assistant de Gestion en Ressources Humaines (DEESARH)</big><br/>  
	 <input type="checkbox" value="Bachelor Management et Gestion des PME (DEESGEST)" name="Filière"><big>Bachelor Management et Gestion des PME (DEESGEST) </big><br/>
	 <input type="checkbox" value="Bachelor Informatique (DEESINF)" name="Filière"><big>Bachelor Informatique (DEESINF) </big><br/> <br/>
    <h4>Master Européen - Bac+5</h4>
 	 <input type="checkbox" value="Management et Stratégie d'Entreprise" name="Filière"><big>Management et Stratégie d'Entreprise </big><br/>
	 <input type="checkbox" value="Manager de Projets Informatiques" name="Filière"><big>Manager de Projets Informatiques</big><br/>  
	 <input type="checkbox" value="Management des Ressources Humaines" name="Filière"><big>Management des Ressources Humaines</big> <br/> 
 </div>
   <input type="submit" value="Envoyer" name="submit" > 
	<input type="reset" value="Annuler" ></br>
   <a href="projet.html" target="self" ><big>acceuil</big></a>
   </form>
   </body>
</html>
