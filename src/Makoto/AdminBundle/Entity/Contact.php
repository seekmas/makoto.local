<?php

namespace Makoto\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contact
 *
 * @ORM\Table(name="contact")
 * @ORM\Entity
 */
class Contact
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
     * @ORM\ManyToOne(targetEntity="Makoto\AdminBundle\Entity\ContactType")
     * @ORM\JoinColumn(name="type_id" , referencedColumnName="id")
     */
    private $contactType;

    /**
     * @var string
     *
     * @ORM\Column(name="contactMethod", type="string", length=255)
     */
    private $contactMethod;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="orderId", type="integer")
     */
    private $orderId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="active", type="boolean")
     */
    private $active;


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
     * Set contactType
     *
     * @param string $contactType
     * @return Contact
     */
    public function setContactType($contactType)
    {
        $this->contactType = $contactType;

        return $this;
    }

    /**
     * Get contactType
     *
     * @return string 
     */
    public function getContactType()
    {
        return $this->contactType;
    }

    /**
     * Set contactMethod
     *
     * @param string $contactMethod
     * @return Contact
     */
    public function setContactMethod($contactMethod)
    {
        $this->contactMethod = $contactMethod;

        return $this;
    }

    /**
     * Get contactMethod
     *
     * @return string 
     */
    public function getContactMethod()
    {
        return $this->contactMethod;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Contact
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
     * Set orderId
     *
     * @param integer $orderId
     * @return Contact
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * Get orderId
     *
     * @return integer 
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return Contact
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }

    public function __toString()
    {
        return $this->description;
    }
}
