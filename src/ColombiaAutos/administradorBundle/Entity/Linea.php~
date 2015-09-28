<?php

namespace ColombiaAutos\administradorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Linea
 *
 * @ORM\Table(name="linea", indexes={@ORM\Index(name="marca_linea", columns={"cod_marca"})})
 * @ORM\Entity
 */
class Linea
{
    /**
     * @var string
     *
     * @ORM\Column(name="cod_modelo", type="string", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codModelo;

    /**
     * @var string
     *
     * @ORM\Column(name="anio_modelo", type="string", length=4, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $anioModelo;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_modelo", type="string", length=50, nullable=false)
     */
    private $nombreModelo;

    /**
     * @var \Marca
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Marca")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cod_marca", referencedColumnName="cod_marca")
     * })
     */
    private $codMarca;



    /**
     * Set codModelo
     *
     * @param string $codModelo
     *
     * @return Linea
     */
    public function setCodModelo($codModelo)
    {
        $this->codModelo = $codModelo;

        return $this;
    }

    /**
     * Get codModelo
     *
     * @return string
     */
    public function getCodModelo()
    {
        return $this->codModelo;
    }

    /**
     * Set anioModelo
     *
     * @param string $anioModelo
     *
     * @return Linea
     */
    public function setAnioModelo($anioModelo)
    {
        $this->anioModelo = $anioModelo;

        return $this;
    }

    /**
     * Get anioModelo
     *
     * @return string
     */
    public function getAnioModelo()
    {
        return $this->anioModelo;
    }

    /**
     * Set nombreModelo
     *
     * @param string $nombreModelo
     *
     * @return Linea
     */
    public function setNombreModelo($nombreModelo)
    {
        $this->nombreModelo = $nombreModelo;

        return $this;
    }

    /**
     * Get nombreModelo
     *
     * @return string
     */
    public function getNombreModelo()
    {
        return $this->nombreModelo;
    }

    /**
     * Set codMarca
     *
     * @param \ColombiaAutos\administradorBundle\Entity\Marca $codMarca
     *
     * @return Linea
     */
    public function setCodMarca(\ColombiaAutos\administradorBundle\Entity\Marca $codMarca)
    {
        $this->codMarca = $codMarca;

        return $this;
    }

    /**
     * Get codMarca
     *
     * @return \ColombiaAutos\administradorBundle\Entity\Marca
     */
    public function getCodMarca()
    {
        return $this->codMarca;
    }
}
