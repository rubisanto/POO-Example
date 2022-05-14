<?php
// Gestion de deux employés  

class Employe
{
    public $nom;
    public $prenom;
    public $age;
    // Utiliser un constructeur 
    public function __construct($prenom, $nom, $age)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
    }

    public function presentation()
    {
        var_dump("Bonjour, je suis $this->prenom $this->nom et j'ai $this->age ans");
    }
}

$employe1 = new Employe('Antoine', 'Gogce', 26);

$employe2 = new Employe('Jean', 'Martin', 15);


$employe1->presentation();
$employe1->presentation();
