<?php

namespace AppBundle\Entity;

class Drivers
{
    private $id;
    private $id1C8;             //Номер записи в 1С8
    private $drShortName;       //Фамилия водителя с инициалами
    private $drSurname;         //Фамилия водителя
    private $drName;            //Имя водителя
    private $drPatronymic;      //Отчество водителя
    private $drDocnum;          //Номер водительского удостоверения
    private $passNumber;        //Паспортные данные
    private $drPhone;           //Телефоны водителя
    private $homeAddress;       //Домашний адрес
    private $dateOfBirth;       //Дата рождения
    private $drStatus;          //Статус сотрудника
    private $dateOfAcceptance;  //Дата приемки на работу
    private $dateOfDismissal;   //Дата увольнения
    private $drPhoto;           //Фото сотрудника (путь)

    public function getId()
    {
        return $this->id;
    }
    public function setId1C8($id1C8)
    {
        $this->id1C8 = $id1C8;
        return $this;
    }
    public function getId1C8()
    {
        return $this->id1C8;
    }
    public function setDrShortName($drShortName)
    {
        $this->drShortName = $drShortName;
        return $this;
    }
    public function getDrShortName()
    {
        return $this->drShortName;
    }
    public function setDrSurname($drSurname)
    {
        $this->drSurname = $drSurname;
        return $this;
    }
    public function getDrSurname()
    {
        return $this->drSurname;
    }
    public function setDrName($drName)
    {
        $this->drName = $drName;
        return $this;
    }
    public function getDrName()
    {
        return $this->drName;
    }
    public function setDrPatronymic($drPatronymic)
    {
        $this->drPatronymic = $drPatronymic;
        return $this;
    }
    public function getDrPatronymic()
    {
        return $this->drPatronymic;
    }
    public function setDrDocnum($drDocnum)
    {
        $this->drDocnum = $drDocnum;
        return $this;
    }
    public function getDrDocnum()
    {
        return $this->drDocnum;
    }
    public function setPassNumber($passNumber)
    {
        $this->passNumber = $passNumber;
        return $this;
    }
    public function getPassNumber()
    {
        return $this->passNumber;
    }
    public function setDrPhone($drPhone)
    {
        $this->drPhone = $drPhone;
        return $this;
    }
    public function getDrPhone()
    {
        return $this->drPhone;
    }
    public function setHomeAddress($homeAddress)
    {
        $this->homeAddress = $homeAddress;
        return $this;
    }
    public function getHomeAddress()
    {
        return $this->homeAddress;
    }
    public function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;
        return $this;
    }
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }
    public function setDrStatus($drStatus)
    {
        $this->drStatus = $drStatus;
        return $this;
    }
    public function getDrStatus()
    {
        return $this->drStatus;
    }
    public function setDateOfAcceptance($dateOfAcceptance)
    {
        $this->dateOfAcceptance = $dateOfAcceptance;
        return $this;
    }
    public function getDateOfAcceptance()
    {
        return $this->dateOfAcceptance;
    }
    public function setDateOfDismissal($dateOfDismissal)
    {
        $this->dateOfDismissal = $dateOfDismissal;
        return $this;
    }
    public function getDateOfDismissal()
    {
        return $this->dateOfDismissal;
    }
    public function setDrPhoto($drPhoto)
    {
        $this->drPhoto = $drPhoto;
        return $this;
    }
    public function getDrPhoto()
    {
        return $this->drPhoto;
    }
}
