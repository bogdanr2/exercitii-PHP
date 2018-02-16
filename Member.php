<?php

class Member
{
    // min max
    const MIN = 'min';
    const MAX = 'max';

    // types
    const MEMBER_TYPE_LEG  = 'leg';
    const MEMBER_TYPE_HAND = 'hand';
    const MEMBER_TYPE_TAIL = 'tail';
    const MEMBER_TYPE_HEAD = 'head';
    const MEMBER_TYPE_EYE  = 'eye';

    // types array
    const MEMBER_TYPES = [
        self::MEMBER_TYPE_LEG  => [self::MIN => 0, self::MAX => 8, ],
        self::MEMBER_TYPE_HAND => [self::MIN => 0, self::MAX => 4, ],
        self::MEMBER_TYPE_HEAD => [self::MIN => 0, self::MAX => 1, ],
        self::MEMBER_TYPE_TAIL => [self::MIN => 0, self::MAX => 1, ],
        self::MEMBER_TYPE_EYE  => [self::MIN => 0, self::MAX => 12, ],
    ];

    protected $type;
    protected $number;

    /**
     * Members constructor.
     * @param $type
     * @param $number
     */
    public function __construct($type = null, int $number = 0)
    {
        $this->setType($type);
        $this->setNumber($number);
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $memberTypes = array_keys(self::MEMBER_TYPES);
        if (!in_array($type, $memberTypes)) {
            $memberTypesString = implode(', ', $memberTypes);
            throw new Exception('member not recognised!! valid types are: ' . $memberTypesString);
        }
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param mixed $number
     */
    public function setNumber(int $number)
    {
        $minMax = self::MEMBER_TYPES[$this->type];
        if ($number <= $minMax[self::MIN] || $number > $minMax[self::MAX]){
            throw new Exception('number of ' . $this->type . 's is not valid');
        }
        $this->number = $number;
    }

//    public function getMinLegs()
//    {
//        return static::MIN_LEGS;
//    }
}
