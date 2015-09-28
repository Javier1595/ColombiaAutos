<?php

namespace ColombiaAutos\administradorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Departamento
 *
 * @ORM\Table(name="departamento")
 * @ORM\Entity
 */
class Departamento
{
    /**
     * @var string
     *
     * @ORM\Column(name="cod_departamento", type="string", length=2, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codDepartamento;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_departamento", type="string", length=20, nullable=false)
     */
    private $nombreDepartamento;



    /**
     * Get codDepartamento
     *
     * @return string
     */
    public function getCodDepartamento()
    {
        return $this->codDepartamento;
    }

    /**
     * Set nombreDepartamento
     *
     * @param string $nombreDepartamento
     *
     * @return Departamento
     */
    public function setNombreDepartamento($nombreDepartamento)
    {
        $this->nombreDepartamento = $nombreDepartamento;

        return $this;
    }

    /**
     * Get nombreDepartamento
     *
     * @return string
     */
    public function getNombreDepartamento()
    {
        return $this->nombreDepartamento;
    }
        /**
     * @ORM\OneToMany(targetEntity="Ciudad", mappedBy="Departamento")
     */
    protected $ciudades;

    public function __construct()
    {
        $this->ciudades = new ArrayCollection();
    }

    /**
     * Add ciudade
     *
     * @param \ColombiaAutos\administradorBundle\Entity\Ciudad $ciudade
     *
     * @return Departamento
     */
    public function addCiudade(\ColombiaAutos\administradorBundle\Entity\Ciudad $ciudade)
    {
        $this->ciudades[] = $ciudade;

        return $this;
    }

    /**
     * Remove ciudade
     *
     * @param \ColombiaAutos\administradorBundle\Entity\Ciudad $ciudade
     */
    public function removeCiudade(\ColombiaAutos\administradorBundle\Entity\Ciudad $ciudade)
    {
        $this->ciudades->removeElement($ciudade);
    }

    /**
     * Get ciudades
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCiudades()
    {
        return $this->ciudades;
    }
}
