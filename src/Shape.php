<?php
namespace src;
class Shape
{
    public string $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName(): string
    {
        return $this->name;
    }
}