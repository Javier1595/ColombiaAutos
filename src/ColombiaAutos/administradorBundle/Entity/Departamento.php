<?php

namespace ColombiaAutos\administradorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Departamento
 *
 * @ORM\Table(name="departamento")
 * @ORM\Entity
 */
class Departamento
{
    /**
     * @var string
     *
     * @ORM\Column(name="cod_departamento", type="string", length=2, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codDepartamento;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_departamento", type="string", length=20, nullable=false)
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
