<?php

class SuperHero
{
    public function __construct(private string $name, private int $power, private string $planet){
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
echo $hero->attack();


?>

