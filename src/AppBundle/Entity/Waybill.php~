<?php

namespace AppBundle\Entity;

/**
 * Waybill
 */
class Waybill
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $number;

    /**
     * @var int
     */
    private $distance;

    /**
     * @var string
     */
    private $fuel;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set number
     *
     * @param integer $number
     *
     * @return Waybill
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set distance
     *
     * @param integer $distance
     *
     * @return Waybill
     */
    public function setDistance($distance)
    {
        $this->distance = $distance;

        return $this;
    }

    /**
     * Get distance
     *
     * @return int
     */
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * Set fuel
     *
     * @param string $fuel
     *
     * @return Waybill
     */
    public function setFuel($fuel)
    {
        $this->fuel = $fuel;

        return $this;
    }

    /**
     * Get fuel
     *
     * @return string
     */
    public function getFuel()
    {
        return $this->fuel;
    }
    /**
     * @var \AppBundle\Entity\Avtomobile
     */
    private $carNumber;


    /**
     * Set carNumber
     *
     * @param \AppBundle\Entity\Avtomobile $carNumber
     *
     * @return Waybill
     */
    public function setCarNumber(\AppBundle\Entity\Avtomobile $carNumber = null)
    {
        $this->carNumber = $carNumber;

        return $this;
    }

    /**
     * Get carNumber
     *
     * @return \AppBundle\Entity\Avtomobile
     */
    public function getCarNumber()
    {
        return $this->carNumber;
    }
}
