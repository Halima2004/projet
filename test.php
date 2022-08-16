<!DOCTYPE html>
 <html >
   <head>
	   <meta http-equiv="content-type" content="text/html;charset=utf-8" />
	</head>
</html>
<?php
include('conn.php');
include('form.php');

    if(isset($_POST["submit"])){
        $Nom=$_POST["Nom"];
        $Prénom=$_POST["Prénom"];
        $Adresse=$_POST["Adresse"];
        $Téléphone=$_POST["Téléphone"];
        $Facebook=$_POST["Facebook"];
        $Email=$_POST["Email"];
        $Niveau_étude =$_POST["Niveau_étude"];
        $Spécialité=$_POST["Spécialité"];
        $Année_arrêt=$_POST["Année_arrêt"];
        $Activité=$_POST["Activité"];
        $Filière=$_POST["Filière"];
    
        $query=$connect->prepare("INSERT INTO étudiants (Nom,Prénom,Adresse,Téléphone,Facebook,Email,Niveau_étude,Spécialité,Année_arrêt,Activité,Filière) VALUES ('$Nom','$Prénom','$Adresse','$Téléphone','$Facebook','$Email','$Niveau_étude','$Spécialité','$Année_arrêt','$Activité','$Filière')");
        $query->execute();

        // if($query->rowCount==1){
        //         header("location:thankyou.html");
        // }
        // else{
        //     echo "hello world";
        // }

    }

   
?> 