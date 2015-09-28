<?php

namespace ColombiaAutos\administradorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VehiculoVehiculopesado
 *
 * @ORM\Table(name="vehiculo_vehiculopesado")
 * @ORM\Entity
 */
class VehiculoVehiculopesado
{
    /**
     * @var string
     *
     * @ORM\Column(name="capacidad", type="string", length=6, nullable=false)
     */
    private $capacidad;

    /**
     * @var string
     *
     * @ORM\Column(name="nro_ejes", type="string", length=3, nullable=false)
     */
    private $nroEjes;

    /**
     * @var \Vehiculo
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Vehiculo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="placa", referencedColumnName="placa")
     * })
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
    public function setPlaca(\ColombiaAutos\administradorBundle\Entity\Vehiculo $placa)
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
