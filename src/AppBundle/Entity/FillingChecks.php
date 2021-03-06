<?php

namespace AppBundle\Entity;

class FillingChecks
{
    private $id;
    private $idProvider;        //ID поставщика
    private $idRecord;          //Уникальный номер записи
    private $numberPaperCheck;  //Номер бумажного чека
    private $dateTimeRefill;    //Дата и время заправки
    private $placeRefill;       //Место заправки
    private $typeOffFuel;       //Вид топлива
    private $quantityLiters;    //Заправлено литров
    private $pricePerLiter;     //Стоимость за литр
    private $smartCardNumber;   //Номер топливной карты
    private $waybillNumber;     //Номер путевого листа
    private $loadOffDate;       //Дата загрузки в БД
    private $writeOffDate;      //Дата списания
    private $idStaff;           //Сотрудник

    public function getId()
    {
        return $this->id;
    }
    public function setIdProvider($idProvider)
    {
        $this->idProvider = $idProvider;
        return $this;
    }
    public function getIdProvider()
    {
        return $this->idProvider;
    }
    public function setIdRecord($idRecord)
    {
        $this->idRecord = $idRecord;
        return $this;
    }
    public function getIdRecord()
    {
        return $this->idRecord;
    }
    public function setNumberPaperCheck($numberPaperCheck)
    {
        $this->numberPaperCheck = $numberPaperCheck;
        return $this;
    }
    public function getNumberPaperCheck()
    {
        return $this->numberPaperCheck;
    }
    public function setDateTimeRefill($dateTimeRefill)
    {
        $this->dateTimeRefill = $dateTimeRefill;
        return $this;
    }
    public function getDateTimeRefill()
    {
        return $this->dateTimeRefill;
    }
    public function setPlaceRefill($placeRefill)
    {
        $this->placeRefill = $placeRefill;
        return $this;
    }
    public function getPlaceRefill()
    {
        return $this->placeRefill;
    }
    public function setTypeOffFuel($typeOffFuel)
    {
        $this->typeOffFuel = $typeOffFuel;
        return $this;
    }
    public function getTypeOffFuel()
    {
        return $this->typeOffFuel;
    }
    public function setQuantityLiters($quantityLiters)
    {
        $this->quantityLiters = $quantityLiters;
        return $this;
    }
    public function getQuantityLiters()
    {
        return $this->quantityLiters;
    }
    public function setPricePerLiter($pricePerLiter)
    {
        $this->pricePerLiter = $pricePerLiter;
        return $this;
    }
    public function getPricePerLiter()
    {
        return $this->pricePerLiter;
    }
    public function setSmartCardNumber($smartCardNumber)
    {
        $this->smartCardNumber = $smartCardNumber;
        return $this;
    }
    public function getSmartCardNumber()
    {
        return $this->smartCardNumber;
    }
    public function setWaybillNumber($waybillNumber)
    {
        $this->waybillNumber = $waybillNumber;
        return $this;
    }
    public function getWaybillNumber()
    {
        return $this->waybillNumber;
    }
    public function setLoadOffDate($loadOffDate)
    {
        $this->loadOffDate = $loadOffDate;
        return $this;
    }
    public function getLoadOffDate()
    {
        return $this->loadOffDate;
    }
    public function setWriteOffDate($writeOffDate)
    {
        $this->writeOffDate = $writeOffDate;
        return $this;
    }
    public function getWriteOffDate()
    {
        return $this->writeOffDate;
    }
    public function setIdStaff($idStaff)
    {
        $this->idStaff = $idStaff;
        return $this;
    }
    public function getIdStaff()
    {
        return $this->idStaff;
    }
    /**
     * @var \AppBundle\Entity\WayBills
     */
    private $waybillId;


    /**
     * Set waybillId
     *
     * @param \AppBundle\Entity\WayBills $waybillId
     *
     * @return FillingChecks
     */
    public function setWaybillId(\AppBundle\Entity\WayBills $waybillId = null)
    {
        $this->waybillId = $waybillId;

        return $this;
    }

    /**
     * Get waybillId
     *
     * @return \AppBundle\Entity\WayBills
     */
    public function getWaybillId()
    {
        return $this->waybillId;
    }
}
