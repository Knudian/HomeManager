<?php namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entry
 *
 * @ORM\Table(name="entry")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EntryRepository")
 */
class Entry {
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="up_date", type="datetime")
     */
    private $upDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="e_date", type="datetime")
     */
    private $eDate;

    /**
     * @var string
     *
     * @ORM\Column(name="documentList", type="string", length=255)
     */
    private $documentList;

    /**
     * @var string
     *
     * @ORM\Column(name="docs", type="string", length=255, nullable=true)
     */
    private $docs;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer")
     */
    private $status;

    /**
     * @var int
     *
     * @ORM\Column(name="category", type="integer")
     */
    private $category;

    /**
     * @var float
     *
     * @ORM\Column(name="value", type="float")
     */
    private $value;


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
     * Set upDate
     *
     * @param \DateTime $upDate
     *
     * @return Entry
     */
    public function setUpDate($upDate)
    {
        $this->upDate = $upDate;

        return $this;
    }

    /**
     * Get upDate
     *
     * @return \DateTime
     */
    public function getUpDate()
    {
        return $this->upDate;
    }

    /**
     * Set eDate
     *
     * @param \DateTime $eDate
     *
     * @return Entry
     */
    public function setEDate($eDate)
    {
        $this->eDate = $eDate;

        return $this;
    }

    /**
     * Get eDate
     *
     * @return \DateTime
     */
    public function getEDate()
    {
        return $this->eDate;
    }

    /**
     * Set documentList
     *
     * @param string $documentList
     *
     * @return Entry
     */
    public function setDocumentList($documentList)
    {
        $this->documentList = $documentList;

        return $this;
    }

    /**
     * Get documentList
     *
     * @return string
     */
    public function getDocumentList()
    {
        return $this->documentList;
    }

    /**
     * Set docs
     *
     * @param string $docs
     *
     * @return Entry
     */
    public function setDocs($docs)
    {
        $this->docs = $docs;

        return $this;
    }

    /**
     * Get docs
     *
     * @return string
     */
    public function getDocs()
    {
        return $this->docs;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return Entry
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set category
     *
     * @param integer $category
     *
     * @return Entry
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return int
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set value
     *
     * @param float $value
     *
     * @return Entry
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }
}

