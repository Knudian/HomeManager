<?php namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of PhotoAlbum
 *
 * Specific type of Entry for managing pictures, and videos.
 * 
 * @ORM\Table(name="media_albums")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FinancialRepository")
 */
class MediaAlbum extends Entry {
    
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * The ending moment of this album.
     * 
     * @var \DateTime
     * @ORM\Column(name="end_date", type="datetime")
     */
    protected $end_date;
    
    /**
     * Represents the list of documents being part of this album.
     * 
     * One Album has many medias.
     * @ORM\OneToMany(targetEntity="Media", mappedBy="album")
     */
    protected $medias;
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->medias = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     *
     * @return MediaAlbum
     */
    public function setEndDate($endDate)
    {
        $this->end_date = $endDate;

        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->end_date;
    }

    /**
     * Add media
     *
     * @param \AppBundle\Entity\Media $media
     *
     * @return MediaAlbum
     */
    public function addMedia(\AppBundle\Entity\Media $media)
    {
        $this->medias[] = $media;

        return $this;
    }

    /**
     * Remove media
     *
     * @param \AppBundle\Entity\Media $media
     */
    public function removeMedia(\AppBundle\Entity\Media $media)
    {
        $this->medias->removeElement($media);
    }

    /**
     * Get medias
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMedias()
    {
        return $this->medias;
    }
}
