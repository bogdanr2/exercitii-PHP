<?php

class Dog extends Animal implements EatsHumansInterface
{
    use IsDomesticTrait;

    public function __construct($color, int $legs = 0)
    {
        parent::__construct($color);
        $this->setLegs($legs);
        $this->setHead();
        $this->setTail();
    }

    public function setLegs(int $legs)
    {
        $this->buildAndAddMember(Member::MEMBER_TYPE_LEG, $legs);
    }

    public function setHead()
    {
        $this->buildAndAddMember(Member::MEMBER_TYPE_HEAD, 1);
    }

    public function setTail()
    {
        $this->buildAndAddMember(Member::MEMBER_TYPE_TAIL, 1);
    }

    protected function buildMember(string $type, int $number)
    {
        return new Member($type, $number);
    }

    protected function buildAndAddMember(string $type, int $number)
    {
        $this->addMember($this->buildMember($type, $number));
    }
}
