<?php

require __DIR__ . '/AnimalInterface.php';
require __DIR__ . '/EatsHumansInterface.php';
require __DIR__ . '/Member.php';
require __DIR__ . '/Animal.php';
require __DIR__ . '/IsWildTrait.php';
require __DIR__ . '/IsDomesticTrait.php';
require __DIR__ . '/Dog.php';
require __DIR__ . '/Cat.php';



class Utils
{
    /**
     * @var AnimalInterface
     */
    protected $animal;

    /**
     * Utils constructor.
     * @param AnimalInterface|EatsHumansInterface $animal
     */
    public function __construct(AnimalInterface $animal)
    {
        $this->animal = $animal;
    }

    public function getMembers()
    {
        return $this->animal->getMembers();
    }

    public function getColor()
    {
        return $this->animal->getColor();
    }

    public function eatsHumans()
    {
        return $this->animal->eatsHumans();
    }
}

$cat = new Cat('blue');
$dog = new Dog('black');


$utils = new Utils($dog);
$utils->getColor();


//class Vlad
//{
//    protected $ceas;
//
//    protected $lant;
//
//    public function __construct()
//    {
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getCeas()
//    {
//        return $this->ceas;
//    }
//
//    /**
//     * @param mixed $ceas
//     */
//    public function setCeas($ceas)
//    {
//        $this->ceas = $ceas;
//        return $this;
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getLant()
//    {
//        return $this->lant;
//    }
//
//    /**
//     * @param mixed $lant
//     */
//    public function setLant($lant)
//    {
//        $this->lant = $lant;
//        return $this;
//    }
//
//
//}
//
//$vlad = new Vlad();
//$vlad->setCeas('rolex de haur')->setLant('platina');
////$vlad->setLant('platina');
//
//var_dump($vlad);
//exit();

class Config
{
    private static $instance = null;

    private $legs = 0;

    private function __construct()
    {

    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function setLegs($legs)
    {
        $this->legs = $legs;

        return $this;
    }

    public function getLegs()
    {
        return $this->legs;
    }

}

//typehinting discussions. Ce e, ce nu merge, cand il folosim, etc.