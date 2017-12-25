<?php

namespace AppBundle\Entity;

class WayBills
{
    private $id;
    private $idCompany;             //ID нашей компании
    private $waybillNum;            //Номер путевого листа
    private $idAvto;                //ID автомобиля
    private $idDriver;              //ID водителя
    private $idSmcard;              //ID смарт карты
    private $season;                //Время года
    private $dateTimeDeparture;     //Дата и время выезда
    private $dateTimeReturn;        //Дата и время заезда
    private $travelTime;            //Время в пути, час
    private $speedometerDeparture;  //Спидометр при выезде
    private $speedometerReturn;     //Спидометр при заезде
    private $distanceSpd;           //Провег по спидометру
    private $distanceGps;           //Пробег по GPS
    private $bingoFuelDeparture;    //Остаток топлива при выезде
    private $refillLiters;          //Заправлено литров
    private $bingoFuelReturn;       //Остаток топлива при заезде
    private $cargoWeight;           //Вес груза
    private $returnWeight;          //Вес возвратов
    private $parkingTime;           //Время стоянок час
    private $fuelConsumption;       //Расход л/100км
    private $routeItinerary;        //Маршрут движения
    private $writeOffDate;          //Дата списания
    private $idStaff;               //Сотрудник
    private $commentsWaybill;       //Коментарии

    private function timeOffYear()          //Определение времени года
    {
    }
    private function identifyTravelTime()   //Определение времени нахождения в командировке
    {
    }
    private function identifyDistanseGPS()  //Определение пробега по трекеру
    {
    }
    private function identifyRefillLiters() //Определение количества заправленного топлива
    {
    }
    private function identifyParkingTime()  //Определение времени стоянок
    {
    }
    private function identifyRoute()        //Определение маршрута движения
    {
    }

    public function getId()
    {
        return $this->id;
    }
    public function setIdCompany($idCompany)
    {
        $this->idCompany = $idCompany;
        return $this;
    }
    public function getIdCompany()
    {
        return $this->idCompany;
    }
    public function setWaybillNum($waybillNum)
    {
        $this->waybillNum = $waybillNum;
        return $this;
    }
    public function getWaybillNum()
    {
        return $this->waybillNum;
    }
    public function setIdAvto($idAvto)
    {
        $this->idAvto = $idAvto;
        return $this;
    }
    public function getIdAvto()
    {
        return $this->idAvto;
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
    public function setIdSmcard($idSmcard)
    {
        $this->idSmcard = $idSmcard;
        return $this;
    }
    public function getIdSmcard()
    {
        return $this->idSmcard;
    }
    public function setSeason($season)
    {
        $this->season = $season;
        return $this;
    }
    public function getSeason()
    {
        return $this->season;
    }
    public function setDateTimeDeparture($dateTimeDeparture)
    {
        $this->dateTimeDeparture = $dateTimeDeparture;
        return $this;
    }
    public function getDateTimeDeparture()
    {
        return $this->dateTimeDeparture;
    }
    public function setDateTimeReturn($dateTimeReturn)
    {
        $this->dateTimeReturn = $dateTimeReturn;
        return $this;
    }
    public function getDateTimeReturn()
    {
        return $this->dateTimeReturn;
    }
    public function setTravelTime($travelTime)
    {
        $this->travelTime = $travelTime;
        return $this;
    }
    public function getTravelTime()
    {
        return $this->travelTime;
    }
    public function setSpeedometerDeparture($speedometerDeparture)
    {
        $this->speedometerDeparture = $speedometerDeparture;
        return $this;
    }
    public function getSpeedometerDeparture()
    {
        return $this->speedometerDeparture;
    }
    public function setSpeedometerReturn($speedometerReturn)
    {
        $this->speedometerReturn = $speedometerReturn;

        return $this;
    }
    public function getSpeedometerReturn()
    {
        return $this->speedometerReturn;
    }
    public function setDistanceSpd($distanceSpd)
    {
        $this->distanceSpd = $distanceSpd;
        return $this;
    }
    public function getDistanceSpd()
    {
        return $this->distanceSpd;
    }
    public function setDistanceGps($distanceGps)
    {
        $this->distanceGps = $distanceGps;
        return $this;
    }
    public function getDistanceGps()
    {
        return $this->distanceGps;
    }
    public function setBingoFuelDeparture($bingoFuelDeparture)
    {
        $this->bingoFuelDeparture = $bingoFuelDeparture;
        return $this;
    }
    public function getBingoFuelDeparture()
    {
        return $this->bingoFuelDeparture;
    }
    public function setRefillLiters($refillLiters)
    {
        $this->refillLiters = $refillLiters;
        return $this;
    }
    public function getRefillLiters()
    {
        return $this->refillLiters;
    }
    public function setBingoFuelReturn($bingoFuelReturn)
    {
        $this->bingoFuelReturn = $bingoFuelReturn;
        return $this;
    }
    public function getBingoFuelReturn()
    {
        return $this->bingoFuelReturn;
    }
    public function setCargoWeight($cargoWeight)
    {
        $this->cargoWeight = $cargoWeight;
        return $this;
    }
    public function getCargoWeight()
    {
        return $this->cargoWeight;
    }
    public function setReturnWeight($returnWeight)
    {
        $this->returnWeight = $returnWeight;
        return $this;
    }
    public function getReturnWeight()
    {
        return $this->returnWeight;
    }
    public function setParkingTime($parkingTime)
    {
        $this->parkingTime = $parkingTime;
        return $this;
    }
    public function getParkingTime()
    {
        return $this->parkingTime;
    }
    public function setFuelConsumption($fuelConsumption)
    {
        $this->fuelConsumption = $fuelConsumption;
        return $this;
    }
    public function getFuelConsumption()
    {
        return $this->fuelConsumption;
    }
    public function setRouteItinerary($routeItinerary)
    {
        $this->routeItinerary = $routeItinerary;
        return $this;
    }
    public function getRouteItinerary()
    {
        return $this->routeItinerary;
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
    public function setCommentsWaybill($commentsWaybill)
    {
        $this->commentsWaybill = $commentsWaybill;
        return $this;
    }
    public function getCommentsWaybill()
    {
        return $this->commentsWaybill;
    }
    /**
     * @var \AppBundle\Entity\Cars_description
     */
    private $carDes;


    /**
     * Set carDes
     *
     * @param \AppBundle\Entity\Cars_description $carDes
     *
     * @return WayBills
     */
    public function setCarDes(\AppBundle\Entity\Cars_description $carDes = null)
    {
        $this->carDes = $carDes;

        return $this;
    }

    /**
     * Get carDes
     *
     * @return \AppBundle\Entity\Cars_description
     */
    public function getCarDes()
    {
        return $this->carDes;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $fillingChecks;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->fillingChecks = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add fillingCheck
     *
     * @param \AppBundle\Entity\FillingChecks $fillingCheck
     *
     * @return WayBills
     */
    public function addFillingCheck(\AppBundle\Entity\FillingChecks $fillingCheck)
    {
        $this->fillingChecks[] = $fillingCheck;

        return $this;
    }

    /**
     * Remove fillingCheck
     *
     * @param \AppBundle\Entity\FillingChecks $fillingCheck
     */
    public function removeFillingCheck(\AppBundle\Entity\FillingChecks $fillingCheck)
    {
        $this->fillingChecks->removeElement($fillingCheck);
    }

    /**
     * Get fillingChecks
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFillingChecks()
    {
        return $this->fillingChecks;
    }
}
