<?php
// Gestion de deux employés  

class Employe
{
    public $nom;
    public $prenom;
    // Pour l'encapsulation insérer un private pour l'imiter l'accès à la variable
    private $age;

    // Maintenant l'age est disponible que dans les fonctions déclarées de la class


    // Utiliser un constructeur 
    public function __construct($prenom, $nom, $age)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        // Pour sécuriser le format dès le constructeur
        $this->setAge($age);
    }

    // getter et setter pour pouvoir travailler sur une fonction private 
    //set pour pouvoir la modifier
    public function setAge($age)
    {
        //restreindre la modification a un résultat cohérent
        if (is_int($age) && $age > 1 && $age < 120) {
            $this->age = $age;
        } else {
            throw new Exception("L'âge de l'employé doit etre un entier entre 1 et 120 ");
        }
    }
    //get pour pouvoir la visualiser 
    public function getAge()
    {
        return $this->age;
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

//pour modifier l'age il faut faire 
$employe1->setAge(50);
