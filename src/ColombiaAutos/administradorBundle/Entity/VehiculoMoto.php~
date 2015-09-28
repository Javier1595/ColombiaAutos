<?php

namespace ColombiaAutos\administradorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VehiculoMoto
 *
 * @ORM\Table(name="vehiculo_moto")
 * @ORM\Entity
 */
class VehiculoMoto
{
    /**
     * @var string
     *
     * @ORM\Column(name="nro_ruedas", type="string", length=2, nullable=false)
     */
    private $nroRuedas;

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
     * Set nroRuedas
     *
     * @param string $nroRuedas
     *
     * @return VehiculoMoto
     */
    public function setNroRuedas($nroRuedas)
    {
        $this->nroRuedas = $nroRuedas;

        return $this;
    }

    /**
     * Get nroRuedas
     *
     * @return string
     */
    public function getNroRuedas()
    {
        return $this->nroRuedas;
    }

    /**
     * Set placa
     *
     * @param \ColombiaAutos\administradorBundle\Entity\Vehiculo $placa
     *
     * @return VehiculoMoto
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
