<?php

namespace ColombiaAutos\administradorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Color
 *
 * @ORM\Table(name="color")
 * @ORM\Entity
 */
class Color
{
    /**
     * @var string
     *
     * @ORM\Column(name="cod_color", type="string", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codColor;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_color", type="string", length=20, nullable=false)
     */
    private $nomColor;



    /**
     * Get codColor
     *
     * @return string
     */
    public function getCodColor()
    {
        return $this->codColor;
    }

    /**
     * Set nomColor
     *
     * @param string $nomColor
     *
     * @return Color
     */
    public function setNomColor($nomColor)
    {
        $this->nomColor = $nomColor;

        return $this;
    }

    /**
     * Get nomColor
     *
     * @return string
     */
    public function getNomColor()
    {
        return $this->nomColor;
    }
}
