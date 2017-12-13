<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 08.12.2017
 * Time: 20:00
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Avtomobile;
use AppBundle\Entity\Driver;
use AppBundle\Form\AvtomobileType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Response;

class StartController extends Controller
{
    public function showAction()
    {
        $driver= new Driver();
        $driver->setName("Ivanov");
        $driver->setAge(22);


        $car= new Avtomobile();
        $car->setNameavto("Fiat2");
        $car->setNumberavto("AA78-65BB");
        $car->setYearcar(new \DateTime());

        $driver->setCar($car);


        $meneger=$this->getDoctrine()->getManager();
        $meneger->persist($car);
        $meneger->persist($driver);
        $meneger->flush();

       //return new Response("Response");
        return $this->render("start/index.html.twig");
    }

    public function getDataAction()
    {
        dump(Driver::class);
        $meneger = $this->getDoctrine()->getRepository(Driver::class);
        $driver = $meneger->find(1);
        dump($driver->getCar()->getNumberavto());
        dump($driver->getCar());



        return $this->render("start/index.html.twig");
    }

    public function addcarAction()
    {
        $car = new Avtomobile();
        /*
        $bilder = $this->createFormBuilder($car);
        $bilder->add('numberavto',TextType::class );
        $bilder->add('nameavto',TextType::class );
        $bilder->add('save', SubmitType::class, array('label' => 'Create Car'));
        $newform = $bilder->getForm();
*/
        $newform = $this->createForm(AvtomobileType::class, $car);

        return $this->render("start/addcar.html.twig", array(
            'newform' => $newform->createView()));
    }


}