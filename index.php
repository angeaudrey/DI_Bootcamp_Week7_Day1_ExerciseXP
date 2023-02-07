<?php
#Exercise1
/*
Écrivez une classe PHP simple qui affiche la chaîne suivante.
''*/


class Simple
{
    // déclaration d'une propriété
    public $var="MyClass class has initialized !" ;

    // déclaration de la methode d'affichage
    public function Afficher() {
        echo $this->var;
    }
}
$affichage = new Simple();
$affichage->Afficher();
?>
<?php
#Exercise2
//Ecrire une classe PHP qui calcule la factorielle d'un entier


class Factorielle{
//déclaration d'une propriété
 public $nombre ;
#constructeur qui initialise la propriété $nombre
 public function __construct($nbre)
    {
 
    $this->nombre = $nbre;
	}
 
 //la fonction calcul le factoriel d'un entier 
function Fact()
{
 $facto =1;
 for ($i = 1; $i <= $this->nombre; $i++) {
    $facto  *= $i;
  } 
    return $facto;
  }
}
  
$factorielle = new Factorielle(5);
echo $factorielle->Fact();

?>

<?php
#Exercise3
    class Trie{
   //déclaration d'une propriété
    public $tab;
#constructeur qui initialise la propriété $tableau

    function __construct($tableau){
        $this->tab = $tableau;
    }

//fonction permettant de faire un trie dans l'ordre croissant
    public function trier(){
      $trions = $this->tab;
      sort($trions);	
      return $trions;
    }

    
}
//ici on faire une instanciation de la classe 
$tableTrie = new Trie(array(11, -2, 4, 35, 0, 8, -9));
var_dump($tableTrie->trier());
?>

<?php
#Exercise4
//ici on hérite de la classe DateTime
class differencedate extends DateTime
{

}
//ici on instancie la classe héritée
$date = new differencedate("1981-11-03");
$date1 = new differencedate("2013-09-04");
$difference = $date->diff($date1);
echo "la difference :" . $difference->y . "Annee , " . $difference->m . "mois , " . $difference->d . "jours"; 
?>