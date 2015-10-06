<?php

namespace ColombiaAutos\administradorBundle\Entity;

/**
 * Organismo
 */
class Organismo
{
    /**
     * @var string
     */
    private $codOrganismo;

    /**
     * @var string
     */
    private $nombreOrganismo;

    /**
     * @var string
     */
    private $telefonoOrganismo;

    /**
     * @var \ColombiaAutos\administradorBundle\Entity\Ciudad
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
