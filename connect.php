<?php
error_reporting(E_ALL & ~E_NOTICE);

// On initialise les variables de connexion
define("SERVBD", "localhost"); // Serveur de connection (e.g: 127.0.0.1, localhost ou adresse IP serveur)
define("DBNAME", "BUVETTES"); // Base de données cible

// Uniquement en environnement 'dev'
define("LOG", "root"); // Identifiant connexion
define("MDP", ""); // Mot de passe 

// Permet la connexion à la base de données
try
    {
    	$bdd = new PDO('mysql:host='. SERVBD .'; dbname='. DBNAME .'; charset=utf8 ', LOG, MDP); // On tente la connexion
    } catch(Exception $e) 
    	{
			die('Erreur : '.$e->getMessage()); // En cas d'erreur, on termine la connexion et affiche le message de debug error
		}

 ?>