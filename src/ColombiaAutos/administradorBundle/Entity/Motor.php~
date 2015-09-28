<?php

namespace ColombiaAutos\administradorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Motor
 *
 * @ORM\Table(name="motor")
 * @ORM\Entity
 */
class Motor
{
    /**
     * @var string
     *
     * @ORM\Column(name="nro_motor", type="string", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nroMotor;

    /**
     * @var string
     *
     * @ORM\Column(name="cilindraje", type="string", length=5, nullable=false)
     */
    private $cilindraje;

    /**
     * @var string
     *
     * @ORM\Column(name="combustible", type="string", length=6, nullable=false)
     */
    private $combustible;

    /**
     * @var string
     *
     * @ORM\Column(name="potencia", type="string", length=3, nullable=false)
     */
    private $potencia;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Vehiculo", mappedBy="nroMotor")
     */
    private $placa;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->placa = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get nroMotor
     *
     * @return string
     */
    public function getNroMotor()
    {
        return $this->nroMotor;
    }

    /**
     * Set cilindraje
     *
     * @param string $cilindraje
     *
     * @return Motor
     */
    public function setCilindraje($cilindraje)
    {
        $this->cilindraje = $cilindraje;

        return $this;
    }

    /**
     * Get cilindraje
     *
     * @return string
     */
    public function getCilindraje()
    {
        return $this->cilindraje;
    }

    /**
     * Set combustible
     *
     * @param string $combustible
     *
     * @return Motor
     */
    public function setCombustible($combustible)
    {
        $this->combustible = $combustible;

        return $this;
    }

    /**
     * Get combustible
     *
     * @return string
     */
    public function getCombustible()
    {
        return $this->combustible;
    }

    /**
     * Set potencia
     *
     * @param string $potencia
     *
     * @return Motor
     */
    public function setPotencia($potencia)
    {
        $this->potencia = $potencia;

        return $this;
    }

    /**
     * Get potencia
     *
     * @return string
     */
    public function getPotencia()
    {
        return $this->potencia;
    }

    /**
     * Add placa
     *
     * @param \ColombiaAutos\administradorBundle\Entity\Vehiculo $placa
     *
     * @return Motor
     */
    public function addPlaca(\ColombiaAutos\administradorBundle\Entity\Vehiculo $placa)
    {
        $this->placa[] = $placa;

        return $this;
    }

    /**
     * Remove placa
     *
     * @param \ColombiaAutos\administradorBundle\Entity\Vehiculo $placa
     */
    public function removePlaca(\ColombiaAutos\administradorBundle\Entity\Vehiculo $placa)
    {
        $this->placa->removeElement($placa);
    }

    /**
     * Get placa
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPlaca()
    {
        return $this->placa;
    }
}
