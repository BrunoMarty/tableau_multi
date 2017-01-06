<?php

// creation des tableaux
$tab_nom = array( "nom" => array("Doe","Doe","Vador","Connor","Trump","Mouse","Lagaf","Morgane"),
                   "prenom" =>array("John","Jane","Dark","Sarah","Donald","Mickey","Gaston","Clara"));

//tableau ['link'] permet de lié une ville a un nom
$tab_ville = array("texte" => array("Beziers","Montpellier","Lunel","Lyon","Paris","Pau","Toulouse","Nimes" ),
                   "link" => array(6,3,1,7,0,5,2,4));

$tab_cp = array(34500,34000,34400,69000,75011,64000,31000,30000);

$tab_pseudo = array( "pseudo" => array("JD","JD","Papa","Terminator","...","Deadmau","Gastounet","CM"),
                   "password" =>array("JohnPS","JanePS","DarkPS","SarahPS","DonaldPS","MickeyPS","GastonPS","ClaraPS"));

for($i=0;$i<count($tab_nom["nom"]);$i++){  // navigation dans les tableaux
    $num_ville="";  // variable vide qui serivira pour stocker l'index de tab_ville
    for($j=0;$j<count($tab_ville["link"]);$j++)  // on recherche le tableau ville, celle qui correspond au nom en cours ($i)
    {
        if($tab_ville["link"][$j]==$i)
        {
        $num_ville=$j;  // on stocke l'index de la ville correspond au nom

        }
    }

  echo "\n Nom: ".$tab_nom["nom"][$i]."\n Prenom: ". $tab_nom["prenom"][$i]."\n Ville: ". $tab_ville["texte"][$num_ville].
  "\n Code Postal: ".$tab_cp[$num_ville]."\n Pseudo: ".$tab_pseudo["pseudo"][$i]."\n Mot de passe :".$tab_pseudo["password"][$i]."\n \n";
}
