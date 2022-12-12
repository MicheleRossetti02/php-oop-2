<?php
require_once __DIR__ . '/../Traits/Weightable.php';

class Item
{
    use Weightable;

    public function __construct(public string $name)
    {
        $this->name = $name;
    }
}
