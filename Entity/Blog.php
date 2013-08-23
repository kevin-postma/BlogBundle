<?php


namespace Kp\Bundle\BlogBundle\Entity;

use Kp\Bundle\BlogBundle\Model\Blog as BaseBlog;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Storage agnostic blog object
 *
 * @author Kevin Postma <kevinpostma@live.nl>
 */

/**
 * @ORM\Entity
 * @ORM\Table(name="kp_user")
 */
class Blog extends BaseBlog
{   
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\ManyToMany(targetEntity="Sylius\Bundle\TaxonomiesBundle\Model\TaxonInterface")
     * @ORM\JoinTable(
     *     joinColumns={@ORM\JoinColumn(name="blog_id", referencedColumnName="id")},
     *     inverseJoinColumns={@ORM\JoinColumn(name="taxon_id", referencedColumnName="id")}
     * )
     */
    protected $taxons;
    
    public function __construct()
    {
        parent::__construct();
        // your own logic
        
        $this->taxons = new ArrayCollection();
    }

    public function getTaxons()
    {
        return $this->taxons;
    }

    public function setTaxons(Collection $taxons)
    {
        $this->taxons = $taxons;
    }
}

?>
