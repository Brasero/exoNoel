<?php 

require "./form.php";

class Personne {
    public string $name;
    public int $age;
    public $compteBancaire;

    public function __construct(string $name, int $age,CompteBancaire $compteBancaire){
        $this->name = ucfirst($name);
        $this->age = $age;
        $this->compteBancaire = $compteBancaire;
    }

        public function getName()
        {
                return $this->name;
        }

        public function setName($name)
        {
                $this->name = $name;

                return $this;
        }

        public function getAge()
        {
                return $this->age;
        }

        public function setAge($age)
        {
                $this->age = $age;

                return $this;
        }

        public function getcompteBancaire()
        {
                return $this->compteBancaire;
        }

        public function setcompteBancaire(CompteBancaire $compteBancaire)
        {
                $this->compteBancaire = $compteBancaire;

                return $this;
        }

        public function afficheInfoComplete(){
            $infoComplete = 
            $this->name . '<br>' . 
            $this->age. '<br>' . 
            $this->compteBancaire . '<br>';

            return $infoComplete;
        }
}
