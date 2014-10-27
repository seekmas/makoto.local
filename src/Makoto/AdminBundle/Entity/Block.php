<?php

namespace Makoto\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Block
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Makoto\AdminBundle\Entity\BlockRepository")
 */
class Block
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
     * @ORM\Column(name="block_alias", type="string", length=255)
     */
    private $blockAlias;

    /**
     * @var string
     *
     * @ORM\Column(name="block_title", type="string", length=255)
     */
    private $blockTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="block_content", type="text")
     */
    private $blockContent;

    /**
     * @var string
     *
     * @ORM\Column(name="from_page", type="string", length=255)
     */
    private $fromPage;

    /**
    * @ORM\Column(name="formatter" ,  type="string" , length=255 )
    */
    private $formatter;

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
     * Set blockAlias
     *
     * @param string $blockAlias
     * @return Block
     */
    public function setBlockAlias($blockAlias)
    {
        $this->blockAlias = $blockAlias;

        return $this;
    }

    /**
     * Get blockAlias
     *
     * @return string 
     */
    public function getBlockAlias()
    {
        return $this->blockAlias;
    }

    /**
     * Set blockTitle
     *
     * @param string $blockTitle
     * @return Block
     */
    public function setBlockTitle($blockTitle)
    {
        $this->blockTitle = $blockTitle;

        return $this;
    }

    /**
     * Get blockTitle
     *
     * @return string 
     */
    public function getBlockTitle()
    {
        return $this->blockTitle;
    }

    /**
     * Set blockContent
     *
     * @param string $blockContent
     * @return Block
     */
    public function setBlockContent($blockContent)
    {
        $this->blockContent = $blockContent;

        return $this;
    }

    /**
     * Get blockContent
     *
     * @return string 
     */
    public function getBlockContent()
    {
        return $this->blockContent;
    }

    /**
     * Set fromPage
     *
     * @param string $fromPage
     * @return Block
     */
    public function setFromPage($fromPage)
    {
        $this->fromPage = $fromPage;

        return $this;
    }

    /**
     * Get fromPage
     *
     * @return string 
     */
    public function getFromPage()
    {
        return $this->fromPage;
    }

    public function getFormatter()
    {
        $this->formatter = 'richhtml';
        return $this->formatter;
    }

    public function setFormatter( $formatter)
    {
        $this->formatter = 'richhtml';
        return $this;
    }
}
