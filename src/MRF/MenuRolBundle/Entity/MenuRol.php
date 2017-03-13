<?php

namespace MRF\MenuRolBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use MRF\MenuBundle\Entity\Menu;
use MRF\RolBundle\Entity\Rol;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * MenuRol
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MRF\MenuRolBundle\Entity\MenuRolRepository")
 */
class MenuRol
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
     * 
     * @ORM\ManyToOne(targetEntity="MRF\MenuBundle\Entity\Menu", inversedBy="menu_rol", cascade={"persist"})
     * @ORM\JoinColumn(name="menu_id", referencedColumnName="id", onDelete="restrict")
     */
    private $menu;

    /**
     *
     * @ORM\ManyToOne(targetEntity="MRF\RolBundle\Entity\Rol", inversedBy="menu_rol", cascade={"persist"})
     * @ORM\JoinColumn(name="rol_id", referencedColumnName="id", onDelete="restrict")
     */
    private $rol;
    
    public function __construct()
    {
        $this->menu = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Get Menu
     *
     * @return \MRF\MenuBundle\Entity\Menu
     */

    public function getMenu()
    {
        return $this->menu;
    }

    /**
     * Get Rol
     *
     * @return \MRF\RolBundle\Entity\Rol
     */
    public function getRol()
    {
        return $this->rol;
    }
    function setId($id) {
        $this->id = $id;
    }
    
    function setMenu($menu) {
        $this->menu = $menu;
    }

    function setRol($rol) {
        $this->rol = $rol;
    }

        public function __toString() {
        return $this->getNombre();
    }

}
