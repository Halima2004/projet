<?php
if(isset($_POST["submit"])){
    $Nom=$_POST["Nom"];
    $Prénom=$_POST["Prénom"];
    $Adresse=$_POST["Adresse"];
    $Téléphone=$_POST["Téléphone"];
    $Facebook=$_POST["Facebook"];
    $Email=$_POST["Email"];
    $Niveau_étude=$_POST["Niveau_étude"];
    $Spécialité=$_POST["Spécialité"];
    $Année_arrêt=$_POST["Année_arrêt"];
    $Activité=$_POST["Activité"];
    $Filière=$_POST["Filière"];

    $message= " nom d'étudiant:" . $Nom . "\n"
    . "Prénom :" . $Prénom .  "\r\n"
    . "Adresse :" . $Adresse . "\r\n"
    . "Téléphone :" . $Téléphone. "\r\n"
    . "Facebook:" . $Facebook . "\r\n"
    . "Email :" . $Email . "\r\n"
    . "Niveau_étude :" . $Niveau_étude . "\r\n"
    . "Spécialité :" . $Spécialité . "\r\n"
    . "Année_arrêt :" . $Année_arrêt . "\r\n"
    . "Activité :" . $Activité . "\r\n"
    . "Filière :" . $Filière . "\r\n";

    $sujet="inscription";

    $retour = mail("sahboudhalima2004@gmail.com",$sujet,$message,"From:$Email"."\r\n"."Replay-to:".$Email);
    if($retour){
        echo "<p>L'email a bien été envoyé.<p>";
    }
}
?> 