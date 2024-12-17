<?php

class SuperHero
{
    public function __construct(public $name, public $power, public $planet){
    }

    public function attack () {
        return "$this->name attack!";
    }

    public function description () {
        return "$this->name is a good superhero!
        He lives in $this->planet!
        His power is $this->power!";
    }


}

$hero = new SuperHero("Batman",1,"Gotham");

echo $hero->description();


?>

