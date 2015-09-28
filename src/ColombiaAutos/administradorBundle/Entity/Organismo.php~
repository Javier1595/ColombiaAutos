<?php

namespace ColombiaAutos\administradorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Organismo
 *
 * @ORM\Table(name="organismo", indexes={@ORM\Index(name="ciudad_organismo", columns={"cod_ciudad"})})
 * @ORM\Entity
 */
class Organismo
{
    /**
     * @var string
     *
     * @ORM\Column(name="cod_organismo", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codOrganismo;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_organismo", type="string", length=50, nullable=false)
     */
    private $nombreOrganismo;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono_organismo", type="string", length=10, nullable=false)
     */
    private $telefonoOrganismo;

    /**
     * @var \Ciudad
     *
     * @ORM\ManyToOne(targetEntity="Ciudad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cod_ciudad", referencedColumnName="cod_ciudad")
     * })
     */
    private $codCiudad;



    /**
     * Get codOrganismo
     *
     * @return string
     */
    public function getCodOrganismo()
    {
        return $this->codOrganismo;
    }

    /**
     * Set nombreOrganismo
     *
     * @param string $nombreOrganismo
     *
     * @return Organismo
     */
    public function setNombreOrganismo($nombreOrganismo)
    {
        $this->nombreOrganismo = $nombreOrganismo;

        return $this;
    }

    /**
     * Get nombreOrganismo
     *
     * @return string
     */
    public function getNombreOrganismo()
    {
        return $this->nombreOrganismo;
    }

    /**
     * Set telefonoOrganismo
     *
     * @param string $telefonoOrganismo
     *
     * @return Organismo
     */
    public function setTelefonoOrganismo($telefonoOrganismo)
    {
        $this->telefonoOrganismo = $telefonoOrganismo;

        return $this;
    }

    /**
     * Get telefonoOrganismo
     *
     * @return string
     */
    public function getTelefonoOrganismo()
    {
        return $this->telefonoOrganismo;
    }

    /**
     * Set codCiudad
     *
     * @param \ColombiaAutos\administradorBundle\Entity\Ciudad $codCiudad
     *
     * @return Organismo
     */
    public function setCodCiudad(\ColombiaAutos\administradorBundle\Entity\Ciudad $codCiudad = null)
    {
        $this->codCiudad = $codCiudad;

        return $this;
    }

    /**
     * Get codCiudad
     *
     * @return \ColombiaAutos\administradorBundle\Entity\Ciudad
     */
    public function getCodCiudad()
    {
        return $this->codCiudad;
    }
}
