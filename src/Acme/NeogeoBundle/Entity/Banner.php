<?php

namespace Acme\NeogeoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Banner
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Banner
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
     * @ORM\Column(name="name", type="text")
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="text")
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="text")
     */
    private $link;

    /**
     * @var integer
     *
     * @ORM\Column(name="visible", type="integer")
     */
    private $visible;

    /**
     * @var integer
     *
     * @ORM\Column(name="sort_order", type="integer")
     */
    private $sortOrder;


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
     * Set name
     *
     * @param string $name
     * @return Banner
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
     * Set image
     *
     * @param string $image
     * @return Banner
     */
    public function setImage($image)
    {
        $this->image = $image;
    
        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set link
     *
     * @param string $link
     * @return Banner
     */
    public function setLink($link)
    {
        $this->link = $link;
    
        return $this;
    }

    /**
     * Get link
     *
     * @return string 
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set visible
     *
     * @param integer $visible
     * @return Banner
     */
    public function setVisible($visible)
    {
        $this->visible = $visible;
    
        return $this;
    }

    /**
     * Get visible
     *
     * @return integer 
     */
    public function getVisible()
    {
        return $this->visible;
    }

    /**
     * Set sortOrder
     *
     * @param integer $sortOrder
     * @return Banner
     */
    public function setSortOrder($sortOrder)
    {
        $this->sortOrder = $sortOrder;
    
        return $this;
    }

    /**
     * Get sortOrder
     *
     * @return integer 
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }
}
