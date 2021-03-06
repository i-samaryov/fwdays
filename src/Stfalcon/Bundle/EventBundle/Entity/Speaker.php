<?php

namespace Stfalcon\Bundle\EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Stfalcon\Bundle\EventBundle\Entity\Speaker
 *
 * @ORM\Table(name="event__speakers")
 * @ORM\Entity(repositoryClass="Stfalcon\Bundle\EventBundle\Entity\SpeakerRepository")
 */
class Speaker
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $slug
     *
     * @ORM\Column(name="slug", type="string", length=255)
     */
    private $slug;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string $email
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string $company
     *
     * @ORM\Column(name="company", type="string", length=255)
     */
    private $company;

    /**
     * @var text $about
     *
     * @ORM\Column(name="about", type="text")
     */
    private $about;
    
    /**
     * @var string $photo
     *
     * @ORM\Column(name="photo", type="string", length=255)
     */
    private $photo;    

    /**
     * @Assert\File(maxSize="6000000")
     */
    private $file;
    
    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     *
     * @ORM\ManyToMany(targetEntity="Event")
     * @ORM\JoinTable(name="event__events_speakers",
     *   joinColumns={
     *     @ORM\JoinColumn(name="speaker_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="event_id", referencedColumnName="id")
     *   }
     * )
     */    
    private $events;
    
    /**
     * @var Doctrine\Common\Collections\ArrayCollection
     *
     * @ORM\ManyToMany(targetEntity="Review", mappedBy="speakers")
     */
    private $reviews;    
    
    public function __construct()
    {
        $this->events = new ArrayCollection();
        $this->reviews = new ArrayCollection();
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
     * Set slug
     *
     * @param string $slug
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }
    
    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
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
     * Set email
     *
     * @param string $eMail
     */
    public function setEmail($eMail)
    {
        $this->email = $eMail;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set company
     *
     * @param string $company
     */
    public function setCompany($company)
    {
        $this->company = $company;
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
     * Set about
     *
     * @param text $about
     */
    public function setAbout($about)
    {
        $this->about = $about;
    }

    /**
     * Get about
     *
     * @return text 
     */
    public function getAbout()
    {
        return $this->about;
    }
    
    /**
     * Get photo
     * 
     * @return string
     */
    public function getPhoto() {
        return $this->photo;
    }

    /**
     * Set photo
     * 
     * @param type $photo 
     */
    public function setPhoto($photo) {
        $this->photo = $photo;
    }
    
    public function getFile() {
        return $this->file;
    }

    public function setFile($file) {
        $this->file = $file;
    }

    public function getEvents() {
        return $this->events;
    }

    public function setEvents($events) {
        var_dump($events);
        exit;
        $this->events = $events;
    }
    
    public function getReviews() {
        return $this->reviews;
    }

    public function setReviews($reviews) {
        $this->reviews = $reviews;
    }

    public function __toString() { return $this->name; }
    
}