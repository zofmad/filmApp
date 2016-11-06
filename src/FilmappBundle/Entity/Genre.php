<?php

namespace FilmappBundle\Entity;
use FilmappBundle\Entity\Movie;


use Doctrine\ORM\Mapping as ORM;


/**
 * Genre
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="FilmappBundle\Entity\GenreRepository")
 */
class Genre
{
    /**
     * @ORM\ManyToMany(targetEntity="Movie", mappedBy="genres")
     * 
     */
    
    private $movies;
    
    public function __construct(){
        $this->movies = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Genre
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
     * Add movies
     *
     * @param \FilmappBundle\Entity\Movie $movies
     * @return Genre
     */
    public function addMovie(\FilmappBundle\Entity\Movie $movies)
    {
        $this->movies[] = $movies;

        return $this;
    }

    /**
     * Remove movies
     *
     * @param \FilmappBundle\Entity\Movie $movies
     */
    public function removeMovie(\FilmappBundle\Entity\Movie $movies)
    {
        $this->movies->removeElement($movies);
    }

    /**
     * Get movies
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMovies()
    {
        return $this->movies;
    }
}
