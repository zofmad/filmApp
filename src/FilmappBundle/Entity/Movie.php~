<?php

namespace FilmappBundle\Entity;
use FilmappBundle\Entity\Genre;
use FilmappBundle\Entity\Actor;

use Doctrine\ORM\Mapping as ORM;


/**
 * Movie
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="FilmappBundle\Entity\MovieRepository")
 */
class Movie
{
    public function __toString()
    {
    return $this->name;
    
    }
    /**
     * 
     * @ORM\ManyToMany(targetEntity="Actor", mappedBy="movies")
     * 
     */
    
    private $actors;
    
    /**
     * @ORM\ManyToMany(targetEntity="Director", mappedBy="movies")
     */
    private $directors;

    
    
    /**
     * @ORM\ManyToMany(targetEntity="Genre", inversedBy="movies")
     * @ORM\JoinTable()
     * 
     */
    private $genres;
    
    public function __construct(){
        $this->genres = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="production_year", type="integer")
     */
    private $productionYear;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="rating", type="integer")
     */
    private $rating;


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
     * Set name
     *
     * @param string $name
     * @return Movie
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set productionYear
     *
     * @param integer $productionYear
     * @return Movie
     */
    public function setProductionYear($productionYear)
    {
        $this->productionYear = $productionYear;

        return $this;
    }

    /**
     * Get productionYear
     *
     * @return integer 
     */
    public function getProductionYear()
    {
        return $this->productionYear;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Movie
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
     * Set rating
     *
     * @param integer $rating
     * @return Movie
     */
    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * Get rating
     *
     * @return integer 
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Add genres
     *
     * @param \FilmappBundle\Entity\Genre $genres
     * @return Movie
     */
    public function addGenre(\FilmappBundle\Entity\Genre $genres)
    {
        $this->genres[] = $genres;

        return $this;
    }

    /**
     * Remove genres
     *
     * @param \FilmappBundle\Entity\Genre $genres
     */
    public function removeGenre(\FilmappBundle\Entity\Genre $genres)
    {
        $this->genres->removeElement($genres);
    }

    /**
     * Get genres
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGenres()
    {
        return $this->genres;
    }

    /**
     * Add actors
     *
     * @param \FilmappBundle\Entity\Actor $actors
     * @return Movie
     */
    public function addActor(\FilmappBundle\Entity\Actor $actors)
    {
        $this->actors[] = $actors;

        return $this;
    }

    /**
     * Remove actors
     *
     * @param \FilmappBundle\Entity\Actor $actors
     */
    public function removeActor(\FilmappBundle\Entity\Actor $actors)
    {
        $this->actors->removeElement($actors);
    }

    /**
     * Get actors
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getActors()
    {
        return $this->actors;
    }

    /**
     * Add directors
     *
     * @param \FilmappBundle\Entity\Director $directors
     * @return Movie
     */
    public function addDirector(\FilmappBundle\Entity\Director $directors)
    {
        $this->directors[] = $directors;

        return $this;
    }

    /**
     * Remove directors
     *
     * @param \FilmappBundle\Entity\Director $directors
     */
    public function removeDirector(\FilmappBundle\Entity\Director $directors)
    {
        $this->directors->removeElement($directors);
    }

    /**
     * Get directors
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDirectors()
    {
        return $this->directors;
    }
}
