<?php namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Financial
 *
 * Represents an entry of the application, which has a defined value.
 * 
 * @ORM\Table(name="financial")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FinancialRepository")
 */
class Financial extends Entry {
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * The amount of the financial movement.
     * 
     * @var float
     * 
     * @ORM\Column(name="value", type="float")
     */
    protected $value;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}
