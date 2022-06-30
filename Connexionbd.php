<?php 
$connexion = new  mysqli("localhost","root","", "projet_quiezzoe");
if($connexion-> connect_error){

echo" ERREUR:Connexion impossible";
exit();

}

?>