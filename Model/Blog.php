<?php

namespace Kp\Bundle\BlogBundle\Model;

use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use DoctrineExtensions\Taggable\Taggable;

/**
 * Storage agnostic blog object
 *
 * @author Kevin Postma <kevinpostma@live.nl>
 */
abstract class Blog implements Taggable
{
    
    protected $id;
    
    /**
     * @var boolean
     */
    protected $active;
    
    /**
     * @var boolean
     */
    protected $author;
    
    /**
     * @var \DateTime
     */
    protected $createdAt;
    
    /**
     * @var \DateTime
     */
    protected $updatedAt;
    
    /**
     * @var string
     */
    protected $taxons;
    
    /**
     * @var string
     */
    protected $title;
    
    /**
     * @var string
     */
    protected $blog;
    
    /**
     * @var array
     */
    protected $tags;
    
    
    
    public function __construct()
    {
        $this->createdAt = new \DateTime('now');
        $this->updatedAt = new \DateTime('now');
        $this->taxons = new ArrayCollection();
    }
    
    public function getId() 
    {
        return $this->id;
    }

    public function setId($id) 
    {
        $this->id = $id;
    }

    public function getActive() 
    {
        return $this->active;
    }

    public function setActive($active) 
    {
        $this->active = $active;
    }

    public function getAuthor() 
    {
        return $this->author;
    }

    public function setAuthor($author) 
    {
        $this->author = $author;
    }

    public function getCreatedAt() 
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTime $createdAt) 
    {
        $this->createdAt = $createdAt;
    }

    public function getUpdatedAt() 
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTime $updatedAt) 
    {
        $this->updatedAt = $updatedAt;
    }

    public function getTaxons() {
        return $this->taxons;
    }

    public function setTaxons(Collection $taxons)
    {
        $this->taxons = $taxons;
    }

    public function getTitle() 
    {
        return $this->title;
    }

    public function setTitle($title) 
    {
        $this->title = $title;
    }

    public function getBlog() 
    {
        return $this->blog;
    }

    public function setBlog($blog) 
    {
        $this->blog = $blog;
    }

        
    public function getTags()
    {
        $this->tags = $this->tags ?: new ArrayCollection();

        return $this->tags;
    }

    public function getTaggableType()
    {
        return 'kp_tag';
    }

    public function getTaggableId()
    {
        return $this->getId();
    }
}

?>
