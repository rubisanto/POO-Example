<?php
// Gestion de deux employés  

class Employe
{
    public $nom;
    public $prenom;
    // Pour l'encapsulation insérer un private pour l'imiter l'accès à la variable
    // private $age;

    // Pour réserver la modification mettre en protected
    // comme le private mais la modification est possible pour les class qui héritent d Employe
    protected $age;


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
        var_dump("Salut, je suis $this->prenom $this->nom et j'ai $this->age ans");
    }
}

$employe1 = new Employe('Antoine', 'Gogce', 26);

$employe2 = new Employe('Jean', 'Martin', 15);


$employe1->presentation();
$employe1->presentation();

//pour modifier l'age il faut faire 
$employe1->setAge(50);

// ajout d'une classe supplémentaire 


// Heritage avec l extends
// Patron est enfant de la classe parent Employe
class Patron extends Employe
{

    private $voiture;
    // Maintenant l'age est disponible que dans les fonctions déclarées de la class


    // Utiliser un constructeur 
    public function __construct($prenom, $nom, $age, $voiture)
    {
        // Pour éviter de réécrire tout le construct

        parent::__construct($prenom, $nom, $age);


        $this->voiture = $voiture;
    }

    // Redéfinition de la méthode présentation pour qu'elle soit différente de la classe parent 
    public function presentation()
    {
        var_dump("Bonjour, je suis $this->prenom $this->nom et j'ai $this->age ans, je roule en $this->voiture et je suis le patron");
    }


    // Nouvelle fonction sépcifique à la nouvelle class

    public function conduire()
    {
        var_dump("Je roule en $this->voiture");
    }
}


$patron = new Patron("joseph", "roland", 51, "mercedes");
$patron->presentation();
$patron->conduire();
