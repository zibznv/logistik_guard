<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 04.12.2017
 * Time: 20:50
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User
{

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */s
    private $id;


    /**
     * @ORM\Column(type="string")
     */
    private $username;


    /**
     * @ORM\Column(type="string")
     */
    private $password;
}