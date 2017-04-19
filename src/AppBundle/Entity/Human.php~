<?php namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * Class Human
 *
 * Represents a user within the application.
 * 
 * @ORM\Table(name="human")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\HumanRepository")
 */
class Human extends BaseUser {
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct(){
      parent::__construct();
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }
}
