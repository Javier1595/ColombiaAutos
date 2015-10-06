<?php

namespace ColombiaAutos\administradorBundle\Entity;

/**
 * Carroceria
 */
class Carroceria
{
    /**
     * @var string
     */
    private $codCarroceria;

    /**
     * @var string
     */
    private $tipoCarroceria;

    /**
     * Set codCarroceria
     *
     * @param string $codCarroceria
     *
     * @return Carroceria
     */
    public function setCodCarroceria($codCarroceria)
    {
        $this->codCarroceria = $codCarroceria;

        return $this;
    }
    /**
     * Get codCarroceria
     *
     * @return string
     */
    public function getCodCarroceria()
    {
        return $this->codCarroceria;
    }

    /**
     * Set tipoCarroceria
     *
     * @param string $tipoCarroceria
     *
     * @return Carroceria
     */
    public function setTipoCarroceria($tipoCarroceria)
    {
        $this->tipoCarroceria = $tipoCarroceria;

        return $this;
    }

    /**
     * Get tipoCarroceria
     *
     * @return string
     */
    public function getTipoCarroceria()
    {
        return $this->tipoCarroceria;
    }
}
