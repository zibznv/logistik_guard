<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 25.12.2017
 * Time: 11:20
 */

namespace AppBundle\Controller;

use AppBundle\Entity\Cars_description;
use AppBundle\Entity\Cars_option;
use AppBundle\Entity\Drivers;
use AppBundle\Entity\FillingChecks;
use AppBundle\Entity\Smart;
use AppBundle\Entity\WayBills;
use AppBundle\Form\Cars_descriptionType;
use AppBundle\Form\Cars_optionType;
use AppBundle\Form\DriversType;
use AppBundle\Form\FillingChecksType;
use AppBundle\Form\SmartType;
use AppBundle\Form\WayBillsType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SettingController extends Controller
//Контроллер работы с таблицами БД (создать, удалить, редактировать)
{
    public function addCarsDescriptionAction(Request $request)
    {
        $newCarsDescription = new Cars_description();

        $formCarsDescription = $this->createForm(Cars_descriptionType::class, $newCarsDescription);
        $formCarsDescription->handleRequest($request);

        if($formCarsDescription->isSubmitted()){
            if($formCarsDescription->isValid()){

                $saveDescription = $this->getDoctrine()->getManager();
                $saveDescription->persist($newCarsDescription);
                $saveDescription->flush();
            }
        }
        return $this->render("setting/addCarsDescription.html.twig", array('addCarsDescription' => $formCarsDescription->createView()));
    }

    public function addCarsOptionAction(Request $request)
    {
        $newCarsOption = new Cars_option();

        $formCarsOption = $this->createForm(Cars_optionType::class, $newCarsOption);
        $formCarsOption->handleRequest($request);

        if($formCarsOption->isSubmitted()){
            if($formCarsOption->isValid()){

                $saveOption = $this->getDoctrine()->getManager();
                $saveOption->persist($newCarsOption);
                $saveOption->flush();
            }
        }
        return $this->render("setting/addCarsOption.html.twig", array('addCarsOption' => $formCarsOption->createView()));
    }

    public function addDriverAction(Request $request)
    {
        $newDriver = new Drivers();

        $formDriver = $this->createForm(DriversType::class, $newDriver);
        $formDriver->handleRequest($request);

        if($formDriver->isSubmitted()){
            if($formDriver->isValid()){

                $saveDriver = $this->getDoctrine()->getManager();
                $saveDriver->persist($newDriver);
                $saveDriver->flush();
            }
        }
        return $this->render("setting/addDriver.html.twig", array('addDriver' => $formDriver->createView()));
    }

    public function addFillingCheckAction(Request $request)
    {
        $newFillingCheck = new FillingChecks();

        $formFillingCheck = $this->createForm(FillingChecksType::class, $newFillingCheck);
        $formFillingCheck->handleRequest($request);

        if($formFillingCheck->isSubmitted()){
            if($formFillingCheck->isValid()){

                $saveFillingCheck = $this->getDoctrine()->getManager();
                $saveFillingCheck->persist($newFillingCheck);
                $saveFillingCheck->flush();
            }
        }
        return $this->render("setting/addFillingCheck.html.twig", array('addFillingCheck' => $formFillingCheck->createView()));
    }

    public function addSmartAction(Request $request)
    {
        $newSmart = new Smart();

        $formSmart = $this->createForm(SmartType::class, $newSmart);
        $formSmart->handleRequest($request);

        if($formSmart->isSubmitted()){
            if($formSmart->isValid()){

                $saveSmart = $this->getDoctrine()->getManager();
                $saveSmart->persist($newSmart);
                $saveSmart->flush();
            }
        }
        return $this->render("setting/addSmart.html.twig", array('addSmart' => $formSmart->createView()));
    }

    public function addWayBillAction(Request $request)
    {
        $newWayBill = new WayBills();

        $formWayBill = $this->createForm(WayBillsType::class, $newWayBill);
        $formWayBill->handleRequest($request);

        if($formWayBill->isSubmitted()){
            if($formWayBill->isValid()){

                $saveWayBill = $this->getDoctrine()->getManager();
                $saveWayBill->persist($newWayBill);
                $saveWayBill->flush();
            }
        }
        return $this->render("setting/addWayBill.html.twig", array('addWayBill' => $formWayBill->createView()));
    }

}