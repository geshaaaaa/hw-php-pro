<?php

class Color
{
    private int $red;
    private int $green;
    private int $blue;
    public function __construct($red,$green,$blue)
    {
        $this->setRed($red);
        $this->setGreen($green);
        $this->setBlue($blue);
    }

    public function equals(Color $secondColor) : bool
    {
      return
          $this->getRed() === $secondColor->getRed() &
          $this->getBlue() === $secondColor->getRed() &
          $this->getGreen() === $secondColor->getGreen();

    }

    public static function random() : Color
    {
        return new Color(rand(0,250),rand(0,250),rand(0,250));
    }

    public function mix (Color $other ) : Color
    {
         return new Color( ($this->getRed() + $other->getRed()) / 2,
             ($this->getGreen() + $other->getGreen()) / 2,
             ($this->getBlue() + $other->getBlue()) / 2
         );
    }


    /**
     * @return int
     */
    public function getRed(): int
    {
        return $this->red;
    }

    /**
     * @return int
     */
    public function getGreen(): int
    {
        return $this->green;
    }
    /**
     * @return int
     */
    public function getBlue(): int
    {
        return $this->blue;
    }

    /**
     * @param int $red
     */
    public function setRed(int $red): void
    {
        if ($red < 0 || $red > 255)
        {
            throw new Exception("not valid color");
        }
        $this->red = $red;
    }

    /**
     * @param int $green
     */
    public function setGreen(int $green): void
    {
        if ($green < 0 || $green > 255)
        {
            throw new Exception("not valid color");
        }
        $this->green = $green;
    }

    /**
     * @param int $blue
     */
    public function setBlue(int $blue): void
    {
        if ($blue < 0 || $blue > 255)
        {
            throw new Exception("not valid color");
        }
        $this->blue = $blue;
    }


}