<?php

abstract class Animal implements AnimalInterface
{
    protected $color;
    protected $members = [];

    /**
     * Animal constructor.
     * @param $legs
     * @param $color
     */
    public function __construct($color = null)
    {
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getMembers(): array
    {
        return $this->members;
    }

    /**
     * @param Member $member
     * @internal param mixed $legs
     *
     * @return object
     */
    public function addMember(Member $member)
    {
        $this->members[$member->getType()] = $member;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

}
