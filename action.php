<?php 
require_once("Connexionbd.php");
switch ($_GET['action']){
    case "AJOUTQUIZZ" :
        $requet ="INSERT INTO `quizz`(`Titre`, `difficulté`, `id_utilisateur`) VALUES (?,?,1)";
        $result = $connexion->prepare($requet);
        $result-> bind_param("ss", $_POST["titre"] ,$_POST["difficulté"]);
        $result->execute();
        header('Location: Index.html');
        break;
    case "AJOUTUSER" :
        $requet ="INSERT INTO `user`(`pseudo`, `email`, `password`, `role`) VALUES (?,?,?,?)";
        $result = $connexion->prepare($requet);
        $result-> bind_param("sssi", $_POST["pseudo"] ,$_POST["email"], $_POST["password"] ,$_POST["role"]);
        $result->execute();
        header('Location: Index.html');
        break;
        
        
    case "AJOUTQUESTIONS" :
        $requet ="INSERT INTO `questions`(`intitulé_de_question`, `difficulté`, `date_de_creation`) VALUES (?,?,?)";
        $result = $connexion->prepare($requet);
        $result-> bind_param("sss", $_POST["intitulé_de_question"] ,$_POST["difficulté"], $_POST["date_de_creation"]);
        $result->execute();
        header('Location: Index.html');
        break;

    case "CONNEXION" :
        $mail=$_POST['E-mail'];
        $password =$_POST['Mot_de_passe'];
        $sql =" SELECT * FROM user WHERE email  ='".$mail ."' AND password='".$password. "'" ;
        $result = $connexion->query($sql);
        if($result == ""){
            header('Location:Question.php');  

        }
        else{
         $_session[]=$result;
         header('Location: Connexion.php
         ');
        }
        
        break;




}













?>