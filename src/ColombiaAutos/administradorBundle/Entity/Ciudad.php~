<?php

namespace ColombiaAutos\administradorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ciudad
 *
 * @ORM\Table(name="ciudad", indexes={@ORM\Index(name="departamento_ciudad", columns={"cod_departamento"})})
 * @ORM\Entity
 */
class Ciudad
{
    /**
     * @var string
     *
     * @ORM\Column(name="cod_ciudad", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codCiudad;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_ciudad", type="string", length=25, nullable=false)
     */
    private $nombreCiudad;

    /**
     * @var \Departamento
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Departamento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cod_departamento", referencedColumnName="cod_departamento")
     * })
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
    public function setCodDepartamento(\ColombiaAutos\administradorBundle\Entity\Departamento $codDepartamento)
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
    /**
     * @ORM\ManyToOne(targetEntity="Departamento", inversedBy="Ciudad")
     * @ORM\JoinColumn(name="CodDepartamento", referencedColumnName="cod_departamento")
     */
    protected $departamento;

    /**
     * Set departamento
     *
     * @param \ColombiaAutos\administradorBundle\Entity\Departamento $departamento
     *
     * @return Ciudad
     */
    public function setDepartamento(\ColombiaAutos\administradorBundle\Entity\Departamento $departamento = null)
    {
        $this->departamento = $departamento;

        return $this;
    }

    /**
     * Get departamento
     *
     * @return \ColombiaAutos\administradorBundle\Entity\Departamento
     */
    public function getDepartamento()
    {
        return $this->departamento;
    }
}
