<?php

interface AnimalInterface
{
    public function getMembers();
    public function getColor();

//    public function doEggs(): bool;
//    public function swims(): bool;
}

interface EggMakerInterface
{
    public function doEggs();
}
