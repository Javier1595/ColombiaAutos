<?php

namespace ColombiaAutos\administradorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Propietario
 *
 * @ORM\Table(name="propietario")
 * @ORM\Entity
 */
class Propietario
{
    /**
     * @var string
     *
     * @ORM\Column(name="nro_identificacion", type="string", length=12, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nroIdentificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="nombres_p", type="string", length=15, nullable=false)
     */
    private $nombresP;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidos_p", type="string", length=20, nullable=false)
     */
    private $apellidosP;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="TarjetaDePropiedad", mappedBy="nroentificacion")
     */
    private $nroLicencia;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->nroLicencia = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get nroIdentificacion
     *
     * @return string
     */
    public function getNroIdentificacion()
    {
        return $this->nroIdentificacion;
    }

    /**
     * Set nombresP
     *
     * @param string $nombresP
     *
     * @return Propietario
     */
    public function setNombresP($nombresP)
    {
        $this->nombresP = $nombresP;

        return $this;
    }

    /**
     * Get nombresP
     *
     * @return string
     */
    public function getNombresP()
    {
        return $this->nombresP;
    }

    /**
     * Set apellidosP
     *
     * @param string $apellidosP
     *
     * @return Propietario
     */
    public function setApellidosP($apellidosP)
    {
        $this->apellidosP = $apellidosP;

        return $this;
    }

    /**
     * Get apellidosP
     *
     * @return string
     */
    public function getApellidosP()
    {
        return $this->apellidosP;
    }

    /**
     * Add nroLicencium
     *
     * @param \ColombiaAutos\administradorBundle\Entity\TarjetaDePropiedad $nroLicencium
     *
     * @return Propietario
     */
    public function addNroLicencium(\ColombiaAutos\administradorBundle\Entity\TarjetaDePropiedad $nroLicencium)
    {
        $this->nroLicencia[] = $nroLicencium;

        return $this;
    }

    /**
     * Remove nroLicencium
     *
     * @param \ColombiaAutos\administradorBundle\Entity\TarjetaDePropiedad $nroLicencium
     */
    public function removeNroLicencium(\ColombiaAutos\administradorBundle\Entity\TarjetaDePropiedad $nroLicencium)
    {
        $this->nroLicencia->removeElement($nroLicencium);
    }

    /**
     * Get nroLicencia
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getNroLicencia()
    {
        return $this->nroLicencia;
    }
}
