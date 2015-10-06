<?php

namespace ColombiaAutos\administradorBundle\Entity;

/**
 * Propietario
 */
class Propietario
{
    /**
     * @var string
     */
    private $nroIdentificacion;

    /**
     * @var string
     */
    private $nombresP;

    /**
     * @var string
     */
    private $apellidosP;

    /**
     * @var \Doctrine\Common\Collections\Collection
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
     * Set nroIdentificacion
     *
     * @param string $nroIdentificacion
     *
     * @return Propietario
     */
    public function setNroIdentificacion($NroIdentificacion)
    {
        $this->nroIdentificacion = $NroIdentificacion;

        return $this;
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
