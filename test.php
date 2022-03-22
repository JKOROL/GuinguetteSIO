<?php

class Stagiaire
{
    private $_ID;
    private $_Nom;
    private $_Prenom;
    private $_Nb1;
    private $_Nb2;

    public function __construct($ID,$Nom,$Prenom,$Nb1,$Nb2)
    {
        $this->_ID = $ID;
        $this->_Nom = $Nom;
        $this->_Prenom = $Prenom;
        $this->_Nb1 = $Nb1;
        $this->_Nb2 = $Nb2;
    }

    public function Moy()
    {
        return ($this->_Nb1+$this->_Nb2)/2;
    }
}

$Tiago = new Stagiaire(1,"Blaze","Tiago",18,15);
$Adam = new Stagiaire(2,"Alvarez","Adam",20,0);
$Jonathan = new Stagiaire(3,"Karol","Jonathan",18,19);

echo "Tiago: ".$Tiago->Moy()."<br> Adam: ".$Adam-> Moy()."<br> Jonathan: ".$Jonathan ->Moy();

?>