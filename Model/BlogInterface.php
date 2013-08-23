<?php

namespace Kp\Bundle\BlogBundle\Model;

use DateTime;

/**
 * Promotion model interface.
 *
 * @author Saša Stamenković <umpirsky@gmail.com>
 */
interface BlogInterface
{
    public function getId();
    public function setId($id);
    public function getActive();
    public function setActive($active);
    public function getAuthor();
    public function setAuthor($author);
    public function getCreatedAt();
    public function setCreatedAt(\DateTime $createdAt);
    public function getUpdatedAt();
    public function setUpdatedAt(\DateTime $updatedAt);
    public function getCategory();
    public function setCategory($category);
    public function getTitle();
    public function setTitle($title);
    public function getBlog();
    public function setBlog($blog);
    public function getTags();
    public function getTaggableType();
    public function getTaggableId();
    
    
    
}
