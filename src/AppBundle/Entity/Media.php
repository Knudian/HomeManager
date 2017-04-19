<?php namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Media
 *
 * Represents the spatial metadatas of a specific document.
 * 
 * @ORM\Table(name="media")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MediaRepository")
 */
class Media
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var point
     *
     * @ORM\Column(name="place", type="point")
     */
    private $place;

    /**
     * @var int
     *
     * @ORM\Column(name="duration", type="integer", nullable=true)
     */
    private $duration;

    /**
     * @var string
     *
     * @ORM\Column(name="document", type="string", length=255)
     */
    private $document;
    
    /**
     *
     * @ORM\ManyToOne(targetEntity="MediaAlbum", inversedBy="medias")
     * @ORM\JoinColumn(name="album_id", referencedColumnName="id")
     */
    private $album;


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
     * Set place
     *
     * @param point $place
     *
     * @return Media
     */
    public function setPlace($place)
    {
        $this->place = $place;

        return $this;
    }

    /**
     * Get place
     *
     * @return point
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Set duration
     *
     * @param integer $duration
     *
     * @return Media
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return int
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set document
     *
     * @param string $document
     *
     * @return Media
     */
    public function setDocument($document)
    {
        $this->document = $document;

        return $this;
    }

    /**
     * Get document
     *
     * @return string
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * Set album
     *
     * @param \AppBundle\Entity\MediaAlbum $album
     *
     * @return Media
     */
    public function setAlbum(\AppBundle\Entity\MediaAlbum $album = null)
    {
        $this->album = $album;

        return $this;
    }

    /**
     * Get album
     *
     * @return \AppBundle\Entity\MediaAlbum
     */
    public function getAlbum()
    {
        return $this->album;
    }
}
