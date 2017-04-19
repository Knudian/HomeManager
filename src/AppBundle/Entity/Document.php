<?php namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Document
 *
 * @ORM\Table(name="document")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DocumentRepository")
 */
class Document {
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * The Date the document was updated to the application.
     * 
     * @var \DateTime
     *
     * @ORM\Column(name="up_date", type="datetime")
     */
    private $up_date;

    /**
     * The Date the document was emitted.
     * It can be retrieved from the document metadatas.
     * 
     * @var \DateTime
     *
     * @ORM\Column(name="em_date", type="datetime")
     */
    private $em_date;

    /**
     * The extension type of the document.
     * Used for sorting the files.
     *  
     * @var string
     *
     * @ORM\Column(name="ext", type="string", length=3)
     */
    private $ext;
    
    /**
     * The list of tags for the document.
     * 
     * Many Documents have Many DocumentTags.
     * @ORM\ManyToMany(targetEntity="DocumentTag")
     * @ORM\JoinTable(name="doc_tags",
     *      joinColumns={@ORM\JoinColumn(name="doc_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="tag_id", referencedColumnName="id", unique=true)}
     * )
     */
    private $tagList;
    
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tagList = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set inDate
     *
     * @param \DateTime $inDate
     *
     * @return Document
     */
    public function setInDate($inDate)
    {
        $this->up_date = $inDate;

        return $this;
    }

    /**
     * Get inDate
     *
     * @return \DateTime
     */
    public function getInDate()
    {
        return $this->up_date;
    }

    /**
     * Set dDate
     *
     * @param \DateTime $dDate
     *
     * @return Document
     */
    public function setDDate($dDate)
    {
        $this->em_date = $dDate;

        return $this;
    }

    /**
     * Get dDate
     *
     * @return \DateTime
     */
    public function getDDate()
    {
        return $this->em_date;
    }

    /**
     * Set ext
     *
     * @param string $ext
     *
     * @return Document
     */
    public function setExt($ext)
    {
        $this->ext = $ext;

        return $this;
    }

    /**
     * Get ext
     *
     * @return string
     */
    public function getExt()
    {
        return $this->ext;
    }

    /**
     * Add tagList
     *
     * @param \AppBundle\Entity\DocumentTag $tagList
     *
     * @return Document
     */
    public function addTagList(\AppBundle\Entity\DocumentTag $tagList)
    {
        $this->tagList[] = $tagList;

        return $this;
    }

    /**
     * Remove tagList
     *
     * @param \AppBundle\Entity\DocumentTag $tagList
     */
    public function removeTagList(\AppBundle\Entity\DocumentTag $tagList)
    {
        $this->tagList->removeElement($tagList);
    }

    /**
     * Get tagList
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTagList()
    {
        return $this->tagList;
    }

    /**
     * Set isAffected
     *
     * @param boolean $isAffected
     *
     * @return Document
     */
    public function setIsAffected($isAffected)
    {
        $this->isAffected = $isAffected;

        return $this;
    }

    /**
     * Get isAffected
     *
     * @return boolean
     */
    public function getIsAffected()
    {
        return $this->isAffected;
    }
}
