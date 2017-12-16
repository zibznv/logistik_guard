<?php

namespace AppBundle\Entity;

/**
 * Avtomobile
 */
class Avtomobile
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $numberavto;

    /**
     * @var string
     */
    private $nameavto;
    private $yearcar;

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
     * Set numberavto
     *
     * @param string $numberavto
     *
     * @return Avtomobile
     */
    public function setNumberavto($numberavto)
    {
        $this->numberavto = $numberavto;

        return $this;
    }

    /**
     * Get numberavto
     *
     * @return string
     */
    public function getNumberavto()
    {
        return $this->numberavto;
    }

    /**
     * Set nameavto
     *
     * @param string $nameavto
     *
     * @return Avtomobile
     */
    public function setNameavto($nameavto)
    {
        $this->nameavto = $nameavto;

        return $this;
    }

    /**
     * Get nameavto
     *
     * @return string
     */
    public function getNameavto()
    {
        return $this->nameavto;
    }
    /**
     * @var string
     */
    private $color;


    /**
     * Set yearcar
     *
     * @param \DateTime $yearcar
     *
     * @return Avtomobile
     */
    public function setYearcar($yearcar)
    {
        $this->yearcar = $yearcar;

        return $this;
    }

    /**
     * Get yearcar
     *
     * @return \DateTime
     */
    public function getYearcar()
    {
        return $this->yearcar;
    }

    /**
     * Set color
     *
     * @param string $color
     *
     * @return Avtomobile
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $waybills;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->waybills = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add waybill
     *
     * @param \AppBundle\Entity\Waybill $waybill
     *
     * @return Avtomobile
     */
    public function addWaybill(\AppBundle\Entity\Waybill $waybill)
    {
        $this->waybills[] = $waybill;

        return $this;
    }

    /**
     * Remove waybill
     *
     * @param \AppBundle\Entity\Waybill $waybill
     */
    public function removeWaybill(\AppBundle\Entity\Waybill $waybill)
    {
        $this->waybills->removeElement($waybill);
    }

    /**
     * Get waybills
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getWaybills()
    {
        return $this->waybills;
    }
}
