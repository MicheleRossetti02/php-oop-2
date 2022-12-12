<?php
require_once __DIR__ . '/../Traits/Weightable.php';

class Item
{
    use Weightable;

    public function __construct(public string $name, string $image, float $price, string $icon, string $type)
    {
        $this->name = $name;
        $this->image = $image;
        $this->price = $price;
        $this->icon = $icon;
        $this->type = $type;
    }
}
