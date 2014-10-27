<?php

namespace Makoto\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Slider
 *
 * @ORM\Table(name="slider")
 * @ORM\Entity
 */
class Slider
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
     * @ORM\Column(name="headTitle", type="string", length=255)
     */
    private $headTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="bigTitle", type="string", length=255)
     */
    private $bigTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="smallTitle", type="text")
     */
    private $smallTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="orderId", type="integer")
     */
    private $orderId;

    /**
     * @var string
     *
     * @ORM\Column(name="media", type="text" , nullable=true)
     */
    private $media;


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
     * Set headTitle
     *
     * @param string $headTitle
     * @return Slider
     */
    public function setHeadTitle($headTitle)
    {
        $this->headTitle = $headTitle;

        return $this;
    }

    /**
     * Get headTitle
     *
     * @return string 
     */
    public function getHeadTitle()
    {
        return $this->headTitle;
    }

    /**
     * Set bigTitle
     *
     * @param string $bigTitle
     * @return Slider
     */
    public function setBigTitle($bigTitle)
    {
        $this->bigTitle = $bigTitle;

        return $this;
    }

    /**
     * Get bigTitle
     *
     * @return string 
     */
    public function getBigTitle()
    {
        return $this->bigTitle;
    }

    /**
     * Set smallTitle
     *
     * @param string $smallTitle
     * @return Slider
     */
    public function setSmallTitle($smallTitle)
    {
        $this->smallTitle = $smallTitle;

        return $this;
    }

    /**
     * Get smallTitle
     *
     * @return string 
     */
    public function getSmallTitle()
    {
        return $this->smallTitle;
    }

    /**
     * Set orderId
     *
     * @param string $orderId
     * @return Slider
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * Get orderId
     *
     * @return string 
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * Set media
     *
     * @param string $media
     * @return Slider
     */
    public function setMedia($media)
    {
        $this->media = $media;

        return $this;
    }

    /**
     * Get media
     *
     * @return string 
     */
    public function getMedia()
    {
        return $this->media;
    }
}
