<?php

namespace ColombiaAutos\administradorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VehiculoAutomovil
 *
 * @ORM\Table(name="vehiculo_automovil")
 * @ORM\Entity
 */
class VehiculoAutomovil
{
    /**
     * @var string
     *
     * @ORM\Column(name="blindaje", type="string", length=2, nullable=false)
     */
    private $blindaje;

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
     * Set blindaje
     *
     * @param string $blindaje
     *
     * @return VehiculoAutomovil
     */
    public function setBlindaje($blindaje)
    {
        $this->blindaje = $blindaje;

        return $this;
    }

    /**
     * Get blindaje
     *
     * @return string
     */
    public function getBlindaje()
    {
        return $this->blindaje;
    }

    /**
     * Set placa
     *
     * @param \ColombiaAutos\administradorBundle\Entity\Vehiculo $placa
     *
     * @return VehiculoAutomovil
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
