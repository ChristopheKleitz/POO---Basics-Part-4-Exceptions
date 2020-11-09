<?php


class Car
{

    /**
     * @var string
     */
    private $color;

    /**
     * @var integer
     */
    private $nbSeats;

    /**
     * @var bool
     */
    private $hasParkBrake;


    public function __construct(string $color, int $nbSeats)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
    }

    public function getParkBrake()
    {
        return $this->hasParkBrake;
    }

    public function setParkBrake(bool $hasParkBrake)
    {
            $this->hasParkBrake = $hasParkBrake;
    }

    public function forward()
    {
        $this->getCurrentSpeed = 20;

        return "Go !";
    }



    public function brake(): string
    {
        $sentence = "";
        while ($this->getCurrentSpeed > 0) {
            $this->getCurrentSpeed--;
            $sentence .= "Brake !!! ";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    public function start()
    {
        if ($this->getParkBrake() === true){
            throw new Exception('Tu as pensé au frein à main ?');
        }
        return "Let's start !" . "<br>";
    }
}
