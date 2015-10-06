<?php

namespace ColombiaAutos\administradorBundle\Entity;

/**
 * Marca
 */
class Marca
{
    /**
     * @var string
     */
    private $codMarca;

    /**
     * @var string
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
