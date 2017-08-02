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
?>