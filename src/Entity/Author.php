<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AuthorRepository")
 */
class Author
{
    /**
     * @var int
     * 
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(name="name", type="string", length=255, unique=true)
     */
    private $name;

    /**
     * @var string
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     * @ORM\Column(name="username", type="string", length=255, unique=true)
     */
    private $username;

    /**
     * @var string
     * @ORM\Column(name="company", type="string", length=255)
     */
    private $company;

    /**
     * @var string
     * @ORM\Column(name="short_bio", type="string", length=500)
     */
    private $shortBio;


    /**
     * @var string
     * @ORM\Column(name="phone", type="string", length=255, nullable=true)
     */
    private $phone;

    /**
     * @var string
     * @ORM\Column(name="facebook", type="string", length=255, nullable=true)
     */
    private $facebook;

    /**
     * @var string
     * @ORM\Column(name="twitter", type="string", length=255, nullable=true)
     */
    private $twitter;

    /**
     * Get id
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     * @param string $name
     * @return Author
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
     * Set title
     * 
     * @param string $title
     * 
     * @return Author
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

    /**Set username
     * 
     * @param string $username
     * 
     * @return Author
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     * 
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $company
     * 
     * @return Author
     */
    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     * 
     * @return string 
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set shortBio
     * 
     * @param string $shortBio
     * 
     * @return Author
     */
    public function setShortBio($shortBio)
    {
        $this->shortBio = $shortBio;

        return $this;
    }

    /**
     * Get shortBio
     * 
     * @return string
     */
    public function getShortBio()
    {
        return $this->shortBio;
    }

    /**
     * Set phone
     * 
     * @param string $phone
     * 
     * @return Author
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     * 
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set facebook
     * 
     * @param string $facebook
     * 
     * @return Author
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;

        return $this;
    }

    /**
     * Get facebook
     * 
     * @return string
     */
    public function getFacebook()
    {
        return $this->facebook;
    }
    /**
     * Set twitter
     * 
     * @param string $twitter
     * 
     * @return Author
     */
    public function setTwitter($twitter)
    {
        $this->twitter = $twitter;
    }

    /**
     * Get twitter
     * 
     * @return string
     */
    public function getTwitter()
    {
        return $this->twitter;
    }
}