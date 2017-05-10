<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Book
 *
 * @ORM\Table(name="book")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BookRepository")
 */
class Book
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
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     * @Assert\Length(
     *      min = 5,
     *      minMessage="babol")
     */
    private $title;

    /**
     * @var float
     *
     * @ORM\Column(name="raiting", type="float")
     * @Assert\Range(
      *      min = 0,
      *      max = 10,
      *      minMessage = "Minimalna wwartość to 0!",
      *      maxMessage = "Maksymalna wartość to 10!"
      * )
     */
    private $raiting;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     * @Assert\Length(
     *      max = 600,
     *      minMessage="babol")
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="pages", type="integer")
     * @Assert\GreaterThanOrEqual(
      *     value = 1
      * )
     */
    private $pages;

    /**
    * @ORM\ManyToOne(targetEntity="Author", inversedBy="books")
    * @ORM\JoinColumn(name="author_id", referencedColumnName="id")
    * @Assert\NotNull()
    */
    private $author;

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
     * Set title
     *
     * @param string $title
     * @return Book
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
     * Set raiting
     *
     * @param float $raiting
     * @return Book
     */
    public function setRaiting($raiting)
    {
        $this->raiting = $raiting;

        return $this;
    }

    /**
     * Get raiting
     *
     * @return float
     */
    public function getRaiting()
    {
        return $this->raiting;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Book
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set pages
     *
     * @param integer $pages
     * @return Book
     */
    public function setPages($pages)
    {
        $this->pages = $pages;

        return $this;
    }

    /**
     * Get pages
     *
     * @return integer
     */
    public function getPages()
    {
        return $this->pages;
    }

    /**
     * Set author
     *
     * @param \AppBundle\Entity\Author $author
     * @return Book
     */
    public function setAuthor(\AppBundle\Entity\Author $author = null)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return \AppBundle\Entity\Author
     */
    public function getAuthor()
    {
        return $this->author;
    }
}
