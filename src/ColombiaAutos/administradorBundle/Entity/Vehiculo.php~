<?php

namespace ColombiaAutos\administradorBundle\Entity;

/**
 * Vehiculo
 */
class Vehiculo
{
    /**
     * @var string
     */
    private $placa;

    /**
     * @var string
     */
    private $nroChasis;

    /**
     * @var string
     */
    private $nroSerie;

    /**
     * @var string
     */
    private $capacidadPersonas;

    /**
     * @var string
     */
    private $servicio;

    /**
     * @var string
     */
    private $puertas;

    /**
     * @var \ColombiaAutos\administradorBundle\Entity\Color
     */
    private $codColor;

    /**
     * @var \ColombiaAutos\administradorBundle\Entity\Carroceria
     */
    private $codCarroceria;

    /**
     * @var \ColombiaAutos\administradorBundle\Entity\Importacion
     */
    private $codImportacion;

    /**
     * @var \ColombiaAutos\administradorBundle\Entity\Linea
     */
    private $codModelo;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $nroMotor;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->nroMotor = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get placa
     *
     * @return string
     */
    public function getPlaca()
    {
        return $this->placa;
    }

    /**
     * Set nroChasis
     *
     * @param string $nroChasis
     *
     * @return Vehiculo
     */
    public function setNroChasis($nroChasis)
    {
        $this->nroChasis = $nroChasis;

        return $this;
    }

    /**
     * Get nroChasis
     *
     * @return string
     */
    public function getNroChasis()
    {
        return $this->nroChasis;
    }

    /**
     * Set nroSerie
     *
     * @param string $nroSerie
     *
     * @return Vehiculo
     */
    public function setNroSerie($nroSerie)
    {
        $this->nroSerie = $nroSerie;

        return $this;
    }

    /**
     * Get nroSerie
     *
     * @return string
     */
    public function getNroSerie()
    {
        return $this->nroSerie;
    }

    /**
     * Set capacidadPersonas
     *
     * @param string $capacidadPersonas
     *
     * @return Vehiculo
     */
    public function setCapacidadPersonas($capacidadPersonas)
    {
        $this->capacidadPersonas = $capacidadPersonas;

        return $this;
    }

    /**
     * Get capacidadPersonas
     *
     * @return string
     */
    public function getCapacidadPersonas()
    {
        return $this->capacidadPersonas;
    }

    /**
     * Set servicio
     *
     * @param string $servicio
     *
     * @return Vehiculo
     */
    public function setServicio($servicio)
    {
        $this->servicio = $servicio;

        return $this;
    }

    /**
     * Get servicio
     *
     * @return string
     */
    public function getServicio()
    {
        return $this->servicio;
    }

    /**
     * Set puertas
     *
     * @param string $puertas
     *
     * @return Vehiculo
     */
    public function setPuertas($puertas)
    {
        $this->puertas = $puertas;

        return $this;
    }

    /**
     * Get puertas
     *
     * @return string
     */
    public function getPuertas()
    {
        return $this->puertas;
    }

    /**
     * Set codColor
     *
     * @param \ColombiaAutos\administradorBundle\Entity\Color $codColor
     *
     * @return Vehiculo
     */
    public function setCodColor(\ColombiaAutos\administradorBundle\Entity\Color $codColor = null)
    {
        $this->codColor = $codColor;

        return $this;
    }

    /**
     * Get codColor
     *
     * @return \ColombiaAutos\administradorBundle\Entity\Color
     */
    public function getCodColor()
    {
        return $this->codColor;
    }

    /**
     * Set codCarroceria
     *
     * @param \ColombiaAutos\administradorBundle\Entity\Carroceria $codCarroceria
     *
     * @return Vehiculo
     */
    public function setCodCarroceria(\ColombiaAutos\administradorBundle\Entity\Carroceria $codCarroceria = null)
    {
        $this->codCarroceria = $codCarroceria;

        return $this;
    }

    /**
     * Get codCarroceria
     *
     * @return \ColombiaAutos\administradorBundle\Entity\Carroceria
     */
    public function getCodCarroceria()
    {
        return $this->codCarroceria;
    }

    /**
     * Set codImportacion
     *
     * @param \ColombiaAutos\administradorBundle\Entity\Importacion $codImportacion
     *
     * @return Vehiculo
     */
    public function setCodImportacion(\ColombiaAutos\administradorBundle\Entity\Importacion $codImportacion = null)
    {
        $this->codImportacion = $codImportacion;

        return $this;
    }

    /**
     * Get codImportacion
     *
     * @return \ColombiaAutos\administradorBundle\Entity\Importacion
     */
    public function getCodImportacion()
    {
        return $this->codImportacion;
    }

    /**
     * Set codModelo
     *
     * @param \ColombiaAutos\administradorBundle\Entity\Linea $codModelo
     *
     * @return Vehiculo
     */
    public function setCodModelo(\ColombiaAutos\administradorBundle\Entity\Linea $codModelo = null)
    {
        $this->codModelo = $codModelo;

        return $this;
    }

    /**
     * Get codModelo
     *
     * @return \ColombiaAutos\administradorBundle\Entity\Linea
     */
    public function getCodModelo()
    {
        return $this->codModelo;
    }

    /**
     * Add nroMotor
     *
     * @param \ColombiaAutos\administradorBundle\Entity\Motor $nroMotor
     *
     * @return Vehiculo
     */
    public function addNroMotor(\ColombiaAutos\administradorBundle\Entity\Motor $nroMotor)
    {
        $this->nroMotor[] = $nroMotor;

        return $this;
    }

    /**
     * Remove nroMotor
     *
     * @param \ColombiaAutos\administradorBundle\Entity\Motor $nroMotor
     */
    public function removeNroMotor(\ColombiaAutos\administradorBundle\Entity\Motor $nroMotor)
    {
        $this->nroMotor->removeElement($nroMotor);
    }

    /**
     * Get nroMotor
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getNroMotor()
    {
        return $this->nroMotor;
    }
}
