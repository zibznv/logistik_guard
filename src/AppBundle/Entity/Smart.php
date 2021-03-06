<?php

namespace AppBundle\Entity;

class Smart
{
    private $id;
    private $provider;      //Поставщик услуг
    private $cardNumber;    //Номер смарт карты
    private $idFixedCar;    //Номер id закрепленного автомобиля
    private $cardStatus;    //Статус карты
    private $cardComments;  //Комментарии по карте

    public function getId()
    {
        return $this->id;
    }
    public function setProvider($provider)
    {
        $this->provider = $provider;
        return $this;
    }
    public function getProvider()
    {
        return $this->provider;
    }
    public function setCardNumber($cardNumber)
    {
        $this->cardNumber = $cardNumber;
        return $this;
    }
    public function getCardNumber()
    {
        return $this->cardNumber;
    }
    public function setIdFixedCar($idFixedCar)
    {
        $this->idFixedCar = $idFixedCar;
        return $this;
    }
    public function getIdFixedCar()
    {
        return $this->idFixedCar;
    }
    public function setCardStatus($cardStatus)
    {
        $this->cardStatus = $cardStatus;
        return $this;
    }
    public function getCardStatus()
    {
        return $this->cardStatus;
    }
    public function setCardComments($cardComments)
    {
        $this->cardComments = $cardComments;
        return $this;
    }
    public function getCardComments()
    {
        return $this->cardComments;
    }
}
