<?php

class Item
{
    public function __construct(public string $name)
    {
        $this->name = $name;
    }
}
