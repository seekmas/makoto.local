<?php

namespace Makoto\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * POst
 *
 * @ORM\Table(name="post" , 
 *            indexes={@ORM\Index(name="alias_ids", columns={"alias"})}
 *           )
 * @ORM\Entity
 */
class Post
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
     * @ORM\Column(name="title", type="text")
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="alias", type="string", length=255)
     */
    private $alias;

    /**
     * @var string
     *
     * @ORM\Column(name="author", type="string", length=255)
     */
    private $author;

    /**
     * @ORM\ManyToOne(targetEntity="Makoto\AdminBundle\Entity\PostCategory")
     * @ORM\JoinColumn(name="category_id" , referencedColumnName="id")
     */
    private $postCategory;

    /**
    * @ORM\Column(name="category_id" , type="integer")
    **/
    private $categoryId;

    /**
     * @ORM\ManyToMany(targetEntity="Makoto\AdminBundle\Entity\PostTag")
     * @ORM\JoinTable(name="post_post_tags",
     *      joinColumns={@ORM\JoinColumn(name="post_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="tag_id", referencedColumnName="id")}
     *      )
     **/
    private $postTag;

    /**
     * @var string
     *
     * @ORM\Column(name="body", type="text")
     */
    private $body;

    /**
     * @var string
     *
     * @ORM\Column(name="preview", type="text")
     */
    private $preview;

    /**
     * @var datetime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

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
     * @return POst
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
     * Set alias
     *
     * @param string $alias
     * @return POst
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;

        return $this;
    }

    /**
     * Get alias
     *
     * @return string 
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * Set author
     *
     * @param string $author
     * @return POst
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string 
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set postCategory
     *
     * @param string $postCategory
     * @return POst
     */
    public function setPostCategory($postCategory)
    {
        $this->postCategory = $postCategory;

        return $this;
    }

    /**
     * Get postCategory
     *
     * @return string 
     */
    public function getPostCategory()
    {
        return $this->postCategory;
    }

    /**
     * Set postTag
     *
     * @param string $postTag
     * @return POst
     */
    public function setPostTag($postTag)
    {
        $this->postTag = $postTag;

        return $this;
    }

    /**
     * Get postTag
     *
     * @return string 
     */
    public function getPostTag()
    {
        return $this->postTag;
    }

    /**
     * Set body
     *
     * @param string $body
     * @return POst
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get body
     *
     * @return string 
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set preview
     *
     * @param string $preview
     * @return POst
     */
    public function setPreview($preview)
    {
        $this->preview = $preview;

        return $this;
    }

    /**
     * Get preview
     *
     * @return string 
     */
    public function getPreview()
    {
        return $this->preview;
    }

    /**
     * Set date
     *
     * @param string $date
     * @return POst
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string 
     */
    public function getDate()
    {
        return $this->date;
    }

    public function getBodyFormatter()
    {
        return 'richhtml';
    }

    public function __toString()
    {
        return $this->title;
    }

}
