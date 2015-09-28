<?php

namespace ColombiaAutos\administradorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Marca
 *
 * @ORM\Table(name="marca")
 * @ORM\Entity
 */
class Marca
{
    /**
     * @var string
     *
     * @ORM\Column(name="cod_marca", type="string", length=2, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codMarca;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_marca", type="string", length=25, nullable=false)
     */
    private $nombreMarca;



    /**
     * Get codMarca
     *
     * @return string
     */
    public function getCodMarca()
    {
        return $this->codMarca;
    }

    /**
     * Set nombreMarca
     *
     * @param string $nombreMarca
     *
     * @return Marca
     */
    public function setNombreMarca($nombreMarca)
    {
        $this->nombreMarca = $nombreMarca;

        return $this;
    }

    /**
     * Get nombreMarca
     *
     * @return string
     */
    public function getNombreMarca()
    {
        return $this->nombreMarca;
    }
}
