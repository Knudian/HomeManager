<?php namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Category
 * 
 * Represents a category, or a sub category for displaying informations on the application.
 *
 * @ORM\Table(name="category")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CategoryRepository")
 */
class Category {
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, unique=true)
     */
    private $title;

    /**
     * @ORM\OneToOne(targetEntity="Category")
     * @ORM\JoinColumn(name="mother_id", referencedColumnName="id")
     */
    private $motherCategory;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Category
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set motherCategory
     *
     * @param integer $motherCategory
     *
     * @return Category
     */
    public function setMotherCategory($motherCategory)
    {
        $this->motherCategory = $motherCategory;

        return $this;
    }

    /**
     * Get motherCategory
     *
     * @return int
     */
    public function getMotherCategory()
    {
        return $this->motherCategory;
    }
}
