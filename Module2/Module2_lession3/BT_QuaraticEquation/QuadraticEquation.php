<?php


class QuadraticEquation
{
    private $a;
    private $b;
    private $c;
    private $delta;

    function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function get_a()
    {
        return $this->a;
    }

    public function get_b()
    {
        return $this->b;
    }

    public function get_c()
    {
        return $this->c;
    }

    public function getDiscriminant()
    {
        $this->delta = (($this->b * $this->b) - (4 * $this->a * $this->c));
    }

    public function root()
    {
        try {
            if ($this->a == 0) {
                throw new Error("NOT QUADRATIC EQUATION");
            }
        } catch (Error $e) {
            return $e->getMessage();
        }
        if ($this->delta == 0) {
            return "The equation has one root r = " . (-$this->b / 2 * $this->a);
        } elseif ($this->delta > 0) {
            return "The equation has two roots: r1 = " . (-$this->b + Math.pow($this->delta,0.5) / 2 * $this->a) . " & r2 = " . (-$this->b - Math.pow($this->delta,0.5) / 2 * $this->a);
        } elseif ($this->delta < 0) {
            return "The equation has no real root!";
        }
    }

}