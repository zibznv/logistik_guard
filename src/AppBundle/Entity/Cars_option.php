<?php

namespace AppBundle\Entity;

class Cars_option
{
    private $id;
    private $idCars;                        //ID автомобиля
    private $tankVolume;                    //Объем бака
    private $fuelType;                      //Вид топлива
    private $idSmartCard;                   //Номер смарт карты
    private $idDriver;                      //Закрепленный водитель
    private $cmcAllowed;                    //CMC разрешены
    private $baseRateSummer;                //Базовая норма расхода лето
    private $baseRateWinter;                //Базовая норма расхода зима
    private $tonneKilometerRatio;           //Коэффициент тонно/км
    private $normOnWarmup;                  //Норма на прогрев в день
    private $standAloneHeaterRate;          //Норма на автономный обогреватель в час
    private $maintenanceIntervals;          //Периодичность ТО
    private $speedometerLastMaintenance;    //Спидометр последнего ТО
    private $numberCheckupCoupon;           //Номер талона техосмотра
    private $numberInsurancePolicy;         //Номер страхового полиса
    private $maintenanceCouponDate;         //Дата годности талона ТО
    private $insurancePolicyCouponDate;     //Дата годности страхового полиса

    public function getId()
    {
        return $this->id;
    }
    public function setIdCars($idCars)
    {
        $this->idCars = $idCars;
        return $this;
    }
    public function getIdCars()
    {
        return $this->idCars;
    }
    public function setTankVolume($tankVolume)
    {
        $this->tankVolume = $tankVolume;
        return $this;
    }
    public function getTankVolume()
    {
        return $this->tankVolume;
    }
    public function setFuelType($fuelType)
    {
        $this->fuelType = $fuelType;
        return $this;
    }
    public function getFuelType()
    {
        return $this->fuelType;
    }
    public function setIdSmartCard($idSmartCard)
    {
        $this->idSmartCard = $idSmartCard;
        return $this;
    }
    public function getIdSmartCard()
    {
        return $this->idSmartCard;
    }
    public function setIdDriver($idDriver)
    {
        $this->idDriver = $idDriver;
        return $this;
    }
    public function getIdDriver()
    {
        return $this->idDriver;
    }
    public function setCmcAllowed($cmcAllowed)
    {
        $this->cmcAllowed = $cmcAllowed;
        return $this;
    }
    public function getCmcAllowed()
    {
        return $this->cmcAllowed;
    }
    public function setBaseRateSummer($baseRateSummer)
    {
        $this->baseRateSummer = $baseRateSummer;
        return $this;
    }
    public function getBaseRateSummer()
    {
        return $this->baseRateSummer;
    }
    public function setBaseRateWinter($baseRateWinter)
    {
        $this->baseRateWinter = $baseRateWinter;
        return $this;
    }
    public function getBaseRateWinter()
    {
        return $this->baseRateWinter;
    }
    public function setTonneKilometerRatio($tonneKilometerRatio)
    {
        $this->tonneKilometerRatio = $tonneKilometerRatio;
        return $this;
    }
    public function getTonneKilometerRatio()
    {
        return $this->tonneKilometerRatio;
    }
    public function setNormOnWarmup($normOnWarmup)
    {
        $this->normOnWarmup = $normOnWarmup;
        return $this;
    }
    public function getNormOnWarmup()
    {
        return $this->normOnWarmup;
    }
    public function setStandAloneHeaterRate($standAloneHeaterRate)
    {
        $this->standAloneHeaterRate = $standAloneHeaterRate;
        return $this;
    }
    public function getStandAloneHeaterRate()
    {
        return $this->standAloneHeaterRate;
    }
    public function setMaintenanceIntervals($maintenanceIntervals)
    {
        $this->maintenanceIntervals = $maintenanceIntervals;
        return $this;
    }
    public function getMaintenanceIntervals()
    {
        return $this->maintenanceIntervals;
    }
    public function setSpeedometerLastMaintenance($speedometerLastMaintenance)
    {
        $this->speedometerLastMaintenance = $speedometerLastMaintenance;
        return $this;
    }
    public function getSpeedometerLastMaintenance()
    {
        return $this->speedometerLastMaintenance;
    }
    public function setNumberCheckupCoupon($numberCheckupCoupon)
    {
        $this->numberCheckupCoupon = $numberCheckupCoupon;
        return $this;
    }
    public function getNumberCheckupCoupon()
    {
        return $this->numberCheckupCoupon;
    }
    public function setNumberInsurancePolicy($numberInsurancePolicy)
    {
        $this->numberInsurancePolicy = $numberInsurancePolicy;
        return $this;
    }
    public function getNumberInsurancePolicy()
    {
        return $this->numberInsurancePolicy;
    }
    public function setMaintenanceCouponDate($maintenanceCouponDate)
    {
        $this->maintenanceCouponDate = $maintenanceCouponDate;
        return $this;
    }
    public function getMaintenanceCouponDate()
    {
        return $this->maintenanceCouponDate;
    }
    public function setInsurancePolicyCouponDate($insurancePolicyCouponDate)
    {
        $this->insurancePolicyCouponDate = $insurancePolicyCouponDate;
        return $this;
    }
    public function getInsurancePolicyCouponDate()
    {
        return $this->insurancePolicyCouponDate;
    }
}
