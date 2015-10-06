<?php

namespace ColombiaAutos\administradorBundle\Entity;

/**
 * Ciudad
 */
class Ciudad
{
    /**
     * @var string
     */
    private $codCiudad;

    /**
     * @var string
     */
    private $nombreCiudad;

    /**
     * @var \ColombiaAutos\administradorBundle\Entity\Departamento
     */
    private $codDepartamento;


    /**
     * Set codCiudad
     *
     * @param string $codCiudad
     *
     * @return Ciudad
     */
    public function setCodCiudad($codCiudad)
    {
        $this->codCiudad = $codCiudad;

        return $this;
    }

    /**
     * Get codCiudad
     *
     * @return string
     */
    public function getCodCiudad()
    {
        return $this->codCiudad;
    }

    /**
     * Set nombreCiudad
     *
     * @param string $nombreCiudad
     *
     * @return Ciudad
     */
    public function setNombreCiudad($nombreCiudad)
    {
        $this->nombreCiudad = $nombreCiudad;

        return $this;
    }

    /**
     * Get nombreCiudad
     *
     * @return string
     */
    public function getNombreCiudad()
    {
        return $this->nombreCiudad;
    }

    /**
     * Set codDepartamento
     *
     * @param \ColombiaAutos\administradorBundle\Entity\Departamento $codDepartamento
     *
     * @return Ciudad
     */
    public function setCodDepartamento(\ColombiaAutos\administradorBundle\Entity\Departamento $codDepartamento = null)
    {
        $this->codDepartamento = $codDepartamento;

        return $this;
    }

    /**
     * Get codDepartamento
     *
     * @return \ColombiaAutos\administradorBundle\Entity\Departamento
     */
    public function getCodDepartamento()
    {
        return $this->codDepartamento;
    }
}
