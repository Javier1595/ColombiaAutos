<?php

namespace ColombiaAutos\administradorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Carroceria
 *
 * @ORM\Table(name="carroceria")
 * @ORM\Entity
 */
class Carroceria
{
    /**
     * @var string
     *
     * @ORM\Column(name="cod_carroceria", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codCarroceria;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_carroceria", type="string", length=20, nullable=false)
     */
    private $tipoCarroceria;



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
