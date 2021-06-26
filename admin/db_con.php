<?php 
define("DBHOST", "localhost");
define("DBUSER", "root");

define("password", "");
define("DBNAME", "student");

//$DB_serveur = 'localhost'; // Nom du serveur
//$DB_utilisateur = 'root'; // Nom de l'utilisateur de la base
//$DB_motdepasse = ''; // Mot de passe pour accèder à la base
//$DB_base = 'student'; // Nom de la base



$db_con = mysqli_connect(DBHOST, DBUSER,password,DBNAME);
