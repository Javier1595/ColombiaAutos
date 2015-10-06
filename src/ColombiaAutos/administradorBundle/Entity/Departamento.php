<?php

namespace ColombiaAutos\administradorBundle\Entity;

/**
 * Departamento
 */
class Departamento
{
    /**
     * @var string
     */
    private $codDepartamento;

    /**
     * @var string
     */
    private $nombreDepartamento;


    /**
     * Get codDepartamento
     *
     * @return string
     */
    public function getCodDepartamento()
    {
        return $this->codDepartamento;
    }

    /**
     * Set nombreDepartamento
     *
     * @param string $nombreDepartamento
     *
     * @return Departamento
     */
    public function setNombreDepartamento($nombreDepartamento)
    {
        $this->nombreDepartamento = $nombreDepartamento;

        return $this;
    }

    /**
     * Get nombreDepartamento
     *
     * @return string
     */
    public function getNombreDepartamento()
    {
        return $this->nombreDepartamento;
    }
}
