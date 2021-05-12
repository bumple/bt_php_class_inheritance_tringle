<?php
namespace src;
class Triangle extends Shape
{
    public float $side1;
    public float $side2;
    public float $side3;

    public function __construct($name, float $side1 = 6, float $side2 = 7, float $side3 = 8)
    {
        parent::__construct($name);
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
    }

    /**
     * @return float|int
     */
    public function getSide1(): float|int
    {
        return $this->side1;
    }

    /**
     * @return float|int
     */
    public function getSide2(): float|int
    {
        return $this->side2;
    }

    /**
     * @return float|int
     */
    public function getSide3(): float|int
    {
        return $this->side3;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param float|int $side1
     */
    public function setSide1(float|int $side1): void
    {
        $this->side1 = $side1;
    }

    /**
     * @param float|int $side2
     */
    public function setSide2(float|int $side2): void
    {
        $this->side2 = $side2;
    }

    /**
     * @param float|int $side3
     */
    public function setSide3(float|int $side3): void
    {
        $this->side3 = $side3;
    }

    public function getPerimeter(): float|int
    {
        return $this->side1 + $this->side2 + $this->side3;
    }

    public function getArea(): float|int
    {
        $p = $this->getPerimeter();
        $a = $p * ($p - $this->side1) * ($p - $this->side2) * ($p - $this->side3);
        return pow($a, 0.5);
    }

    public function __toString(): string
    {
        return 'chu vi: '.$this->getPerimeter().'<br>'.'dien tich '.$this->getArea();
    }


}