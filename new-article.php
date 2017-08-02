<?php
if( empty($_POST["title"]) || empty($_POST["content"]) ) {
    //Renvoie une reponse code erreur.
    http_response_code(400);
    //Lui precise ce que l'on lui envoie.
    header("content-type: text/plain");
    echo "Manque un parametre";
    //Si une erreur quitte le script.
    //le 1 correspont = 1 erreur vient du language C si 0 = Pas d'erreur.
    exit(1);
    //Par default php renvoie quand tout se passe bien un exit(0); = OK
}
echo $_POST["title"] . " " . $_POST["content"];
//Quand on fais des api, si ont veut rendre accessible l'API il faut ajouter des header.
//C'est une sécurité pour le client (navigateur mais pas serveur).
// header('Access-Control-Allow-Origin: *');
// header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
// header('Content-type: text/html; charset=UTF-8'); 
// header('Access-Control-Allow-Headers: X-Requested-With');
?>