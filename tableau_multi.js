var tab_nom = new Array();
tab_nom['nom']= new Array('Doe','Doe','Vador','Connor','Trump','Mouse','Lagaf','Morgane');
tab_nom['prenom']= new Array('John','Jane','Dark','Sarah','Donald','Mickey','Gaston','Clara');

var tab_ville = new Array();
tab_ville['texte'] = new Array('Beziers','Montpellier','Lunel','Lyon','Paris','Pau','Toulouse','Nimes');
tab_ville['link']= new Array(6,3,1,7,0,5,2,4);

var tab_cp = new Array(34500,34000,34400,69000,75011,64000,31000,30000);

var tab_pseudo = new Array();
tab_pseudo['pseudo'] = new Array('JD','JD','Papa','Terminator','...','Deadmau','Gastounet','CM');
tab_pseudo['password']=new Array('JohnPS','JanePS','DarkPS','SarahPS','DonaldPS','MickeyPS','GastonPS','ClaraPS');

for(i = 0; i < tab_nom['nom'].length; i++)
{
    var num_ville = "";
    for(j=0;j<tab_nom['nom'].length;j++)
    {
        if(tab_ville["link"][j]===i)
        {
        num_ville=j;
        }
    }
    document.write("Nom :"+ tab_nom['nom'][i] + "<br>Prenom: "+tab_nom['prenom'][i] +"<br>Ville: "+tab_ville['texte'][num_ville] +"<br>Code Postal: " + tab_cp[num_ville]+"<br>Pseudo :"+tab_pseudo['pseudo'][i]+"<br>Mot de passe :"+ tab_pseudo['password'][i]+"<br><br>");
}
