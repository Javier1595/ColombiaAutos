<?php

namespace ColombiaAutos\administradorBundle\Entity;

/**
 * TarjetaDePropiedad
 */
class TarjetaDePropiedad
{
    /**
     * @var string
     */
    private $nroLicencia;

    /**
     * @var \DateTime
     */
    private $fechaExpedicion;

    /**
     * @var \DateTime
     */
    private $fechaMatricula;

    /**
     * @var \DateTime
     */
    private $fechaVencimiento;

    /**
     * @var \ColombiaAutos\administradorBundle\Entity\Organismo
     */
    private $codOrganismo;

    /**
     * @var \ColombiaAutos\administradorBundle\Entity\Vehiculo
     */
    private $placa;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $nroentificacion;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->nroentificacion = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get nroLicencia
     *
     * @return string
     */
    public function getNroLicencia()
    {
        return $this->nroLicencia;
    }

    /**
     * Set fechaExpedicion
     *
     * @param \DateTime $fechaExpedicion
     *
     * @return TarjetaDePropiedad
     */
    public function setFechaExpedicion($fechaExpedicion)
    {
        $this->fechaExpedicion = $fechaExpedicion;

        return $this;
    }

    /**
     * Get fechaExpedicion
     *
     * @return \DateTime
     */
    public function getFechaExpedicion()
    {
        return $this->fechaExpedicion;
    }

    /**
     * Set fechaMatricula
     *
     * @param \DateTime $fechaMatricula
     *
     * @return TarjetaDePropiedad
     */
    public function setFechaMatricula($fechaMatricula)
    {
        $this->fechaMatricula = $fechaMatricula;

        return $this;
    }

    /**
     * Get fechaMatricula
     *
     * @return \DateTime
     */
    public function getFechaMatricula()
    {
        return $this->fechaMatricula;
    }

    /**
     * Set fechaVencimiento
     *
     * @param \DateTime $fechaVencimiento
     *
     * @return TarjetaDePropiedad
     */
    public function setFechaVencimiento($fechaVencimiento)
    {
        $this->fechaVencimiento = $fechaVencimiento;

        return $this;
    }

    /**
     * Get fechaVencimiento
     *
     * @return \DateTime
     */
    public function getFechaVencimiento()
    {
        return $this->fechaVencimiento;
    }

    /**
     * Set codOrganismo
     *
     * @param \ColombiaAutos\administradorBundle\Entity\Organismo $codOrganismo
     *
     * @return TarjetaDePropiedad
     */
    public function setCodOrganismo(\ColombiaAutos\administradorBundle\Entity\Organismo $codOrganismo = null)
    {
        $this->codOrganismo = $codOrganismo;

        return $this;
    }

    /**
     * Get codOrganismo
     *
     * @return \ColombiaAutos\administradorBundle\Entity\Organismo
     */
    public function getCodOrganismo()
    {
        return $this->codOrganismo;
    }

    /**
     * Set placa
     *
     * @param \ColombiaAutos\administradorBundle\Entity\Vehiculo $placa
     *
     * @return TarjetaDePropiedad
     */
    public function setPlaca(\ColombiaAutos\administradorBundle\Entity\Vehiculo $placa = null)
    {
        $this->placa = $placa;

        return $this;
    }

    /**
     * Get placa
     *
     * @return \ColombiaAutos\administradorBundle\Entity\Vehiculo
     */
    public function getPlaca()
    {
        return $this->placa;
    }

    /**
     * Add nroentificacion
     *
     * @param \ColombiaAutos\administradorBundle\Entity\Propietario $nroentificacion
     *
     * @return TarjetaDePropiedad
     */
    public function addNroentificacion(\ColombiaAutos\administradorBundle\Entity\Propietario $nroentificacion)
    {
        $this->nroentificacion[] = $nroentificacion;

        return $this;
    }

    /**
     * Remove nroentificacion
     *
     * @param \ColombiaAutos\administradorBundle\Entity\Propietario $nroentificacion
     */
    public function removeNroentificacion(\ColombiaAutos\administradorBundle\Entity\Propietario $nroentificacion)
    {
        $this->nroentificacion->removeElement($nroentificacion);
    }

    /**
     * Get nroentificacion
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getNroentificacion()
    {
        return $this->nroentificacion;
    }
}
