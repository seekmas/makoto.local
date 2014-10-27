<?php

namespace Makoto\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Timeline
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Timeline
{
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
     * @ORM\Column(name="events", type="text")
     */
    private $events;

    /**
     * @var integer
     *
     * @ORM\Column(name="year", type="integer")
     */
    private $year;

    /**
    * @ORM\Column(name="located_left" , type="boolean" , nullable=true)
    */
    private $locatedLeft;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_enabled", type="boolean" , nullable=true)
     */
    private $isEnabled;

    /**
    * @ORM\Column(name="high_light" , type="boolean" , nullable=true)
    */
    private $highLight;

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
     * Set events
     *
     * @param string $events
     * @return Timeline
     */
    public function setEvents($events)
    {
        $this->events = $events;

        return $this;
    }

    /**
     * Get events
     *
     * @return string 
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * Set year
     *
     * @param integer $year
     * @return Timeline
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return integer 
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set isEnabled
     *
     * @param boolean $isEnabled
     * @return Timeline
     */
    public function setIsEnabled($isEnabled)
    {
        $this->isEnabled = $isEnabled;

        return $this;
    }

    /**
     * Get isEnabled
     *
     * @return boolean 
     */
    public function getIsEnabled()
    {
        return $this->isEnabled;
    }

    public function getLocatedLeft()
    {
        return $this->locatedLeft;
    }

    public function setLocatedLeft( $locatedLeft)
    {
        $this->locatedLeft = $locatedLeft;
    }

    public function __toString()
    {
        return $this->getEvents();
    }

    public function setHighLight( $highLight)
    {
        $this->highLight = $highLight;
    }

    public function getHighLight()
    {
        return $this->highLight;
    }
}
