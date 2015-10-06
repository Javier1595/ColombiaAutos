<?php

namespace ColombiaAutos\administradorBundle\Entity;

/**
 * VehiculoVehiculopesado
 */
class VehiculoVehiculopesado
{
    /**
     * @var string
     */
    private $capacidad;

    /**
     * @var string
     */
    private $nroEjes;

    /**
     * @var \ColombiaAutos\administradorBundle\Entity\Vehiculo
     */
    private $placa;


    /**
     * Set capacidad
     *
     * @param string $capacidad
     *
     * @return VehiculoVehiculopesado
     */
    public function setCapacidad($capacidad)
    {
        $this->capacidad = $capacidad;

        return $this;
    }

    /**
     * Get capacidad
     *
     * @return string
     */
    public function getCapacidad()
    {
        return $this->capacidad;
    }

    /**
     * Set nroEjes
     *
     * @param string $nroEjes
     *
     * @return VehiculoVehiculopesado
     */
    public function setNroEjes($nroEjes)
    {
        $this->nroEjes = $nroEjes;

        return $this;
    }

    /**
     * Get nroEjes
     *
     * @return string
     */
    public function getNroEjes()
    {
        return $this->nroEjes;
    }

    /**
     * Set placa
     *
     * @param \ColombiaAutos\administradorBundle\Entity\Vehiculo $placa
     *
     * @return VehiculoVehiculopesado
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
}
