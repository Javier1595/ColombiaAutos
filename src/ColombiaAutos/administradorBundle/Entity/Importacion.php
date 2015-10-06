<?php

namespace ColombiaAutos\administradorBundle\Entity;

/**
 * Importacion
 */
class Importacion
{
    /**
     * @var string
     */
    private $codImportacion;

    /**
     * @var \DateTime
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
