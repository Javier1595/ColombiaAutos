<?php

namespace ColombiaAutos\administradorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Importacion
 *
 * @ORM\Table(name="importacion")
 * @ORM\Entity
 */
class Importacion
{
    /**
     * @var string
     *
     * @ORM\Column(name="cod_importacion", type="string", length=16, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codImportacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_importacion", type="date", nullable=true)
     */
    private $fechaImportacion;



    /**
     * Get codImportacion
     *
     * @return string
     */
    public function getCodImportacion()
    {
        return $this->codImportacion;
    }

    /**
     * Set fechaImportacion
     *
     * @param \DateTime $fechaImportacion
     *
     * @return Importacion
     */
    public function setFechaImportacion($fechaImportacion)
    {
        $this->fechaImportacion = $fechaImportacion;

        return $this;
    }

    /**
     * Get fechaImportacion
     *
     * @return \DateTime
     */
    public function getFechaImportacion()
    {
        return $this->fechaImportacion;
    }
}
