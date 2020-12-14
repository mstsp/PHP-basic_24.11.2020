<?php
class Foo
{
    protected $fooMin = 25;

    protected $fooMax = 350;

    public function getMin()
    {
        return $this->fooMin;
    }

    public function setMin($value)
    {
        $this->fooMin = $value;
    }

    public function getMax()
    {
        return $this->fooMax;
    }

    public function setMax($value)
    {
        $this->fooMax = $value;
    }
}

class Bar extends Foo
{
    protected $bar = 55;

    public function getBar()
    {
        return $this->bar;
    }

    public function setBar($value)
    {
        $this->bar = $value;
    }

    public function totalSum()
    {
        return $this->bar + $this->fooMin + $this->fooMax;
    }
}

abstract class Bar1 extends Foo
{
    protected $bar1 = 95;

    public function getBar1()
    {
        return $this->bar1;
    }

    public function setBar1($value)
    {
        $this->bar1 = $value;
    }

    public function totalDivision()
    {
        return $this->bar1 / $this->fooMin / $this->fooMax;
    }

    abstract protected function powNumber($exponent);
}

final class Bar2 extends Foo
{
    protected $bar2 = 45;

    public function getBar2()
    {
        return $this->bar2;
    }

    public function setBar2($value)
    {
        $this->bar2 = $value;
    }

    public function totalMultiplication()
    {
        return $this->bar2 * $this->fooMin * $this->fooMax;
    }
}

class Baz1 extends Bar
{
    protected $baz1 = 70;

    public function getBaz1()
    {
        return $this->baz1;
    }

    public function setBaz1($value)
    {
        $this->baz1 = $value;
    }

    public function parentSum()
    {
        return $this->bar + $this->baz1;
    }

    public function rootSum()
    {
        return $this->fooMin + $this->baz1;
    }
}

class Baz2 extends Bar
{
    protected $baz2 = 70;

    public function getBaz2()
    {
        return $this->baz2;
    }

    public function setBaz2($value)
    {
        $this->baz2 = $value;
    }

    public function parentDeduct()
    {
        return $this->baz2 - $this->bar;
    }

    public function rootDeduct()
    {
        return $this->fooMax - $this->baz2;
    }
}

class Baz11 extends Bar1
{
    protected $baz11 = 70;

    public function getBaz11()
    {
        return $this->baz11;
    }

    public function setBaz11($value)
    {
        $this->baz11 = $value;
    }

    public function parentSum()
    {
        return $this->bar1 + $this->baz11;
    }

    public function rootSum()
    {
        return $this->fooMax + $this->baz11;
    }

    public function powNumber($exponent)
    {
        return pow($this->baz11, $exponent);
    }
}

class Baz12 extends Bar1
{
    protected $baz12 = 137;

    public function getBaz12()
    {
        return $this->baz12;
    }

    public function setBaz12($value)
    {
        $this->baz12 = $value;
    }

    public function parentDeduct()
    {
        return $this->bar1 - $this->baz12;
    }

    public function rootDeduct()
    {
        return $this->fooMax - $this->baz12;
    }

    public function powNumber($exponent)
    {
        return pow($this->baz12, $exponent);
    }
}
?>
