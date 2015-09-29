<?php

namespace ColombiaAutos\administradorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vehiculo
 *
 * @ORM\Table(name="vehiculo", indexes={@ORM\Index(name="vehiculo_imp", columns={"cod_importacion"}), @ORM\Index(name="vehiculo_modelo", columns={"cod_modelo"}), @ORM\Index(name="vehiculo_carroceria", columns={"cod_carroceria"}), @ORM\Index(name="FK_C9FA1603A87976F8", columns={"cod_color"})})
 * @ORM\Entity
 */
class Vehiculo
{
    /**
     * @var string
     *
     * @ORM\Column(name="placa", type="string", length=7, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $placa;

    /**
     * @var string
     *
     * @ORM\Column(name="nro_chasis", type="string", length=17, nullable=false)
     */
    private $nroChasis;

    /**
     * @var string
     *
     * @ORM\Column(name="nro_serie", type="string", length=17, nullable=false)
     */
    private $nroSerie;

    /**
     * @var string
     *
     * @ORM\Column(name="capacidad_personas", type="string", length=3, nullable=false)
     */
    private $capacidadPersonas;

    /**
     * @var string
     *
     * @ORM\Column(name="servicio", type="string", length=10, nullable=false)
     */
    private $servicio;

    /**
     * @var string
     *
     * @ORM\Column(name="puertas", type="string", length=3, nullable=false)
     */
    private $puertas;

    /**
     * @var \Color
     *
     * @ORM\ManyToOne(targetEntity="Color")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cod_color", referencedColumnName="cod_color")
     * })
     */
    private $codColor;

    /**
     * @var \Carroceria
     *
     * @ORM\ManyToOne(targetEntity="Carroceria")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cod_carroceria", referencedColumnName="cod_carroceria")
     * })
     */
    private $codCarroceria;

    /**
     * @var \Importacion
     *
     * @ORM\ManyToOne(targetEntity="Importacion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cod_importacion", referencedColumnName="cod_importacion")
     * })
     */
    private $codImportacion;

    /**
     * @var \Linea
     *
     * @ORM\ManyToOne(targetEntity="Linea")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cod_modelo", referencedColumnName="cod_modelo")
     * })
     */
    private $codModelo;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Motor", inversedBy="placa")
     * @ORM\JoinTable(name="motor_vehiculo",
     *   joinColumns={
     *     @ORM\JoinColumn(name="placa", referencedColumnName="placa")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="nro_motor", referencedColumnName="nro_motor")
     *   }
     * )
     */
    private $nroMotor;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->nroMotor = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get placa
     *
     * @return string
     */
    public function getPlaca()
    {
        return $this->placa;
    }

    /**
     * Set nroChasis
     *
     * @param string $nroChasis
     *
     * @return Vehiculo
     */
    public function setNroChasis($nroChasis)
    {
        $this->nroChasis = $nroChasis;

        return $this;
    }

    /**
     * Get nroChasis
     *
     * @return string
     */
    public function getNroChasis()
    {
        return $this->nroChasis;
    }

    /**
     * Set nroSerie
     *
     * @param string $nroSerie
     *
     * @return Vehiculo
     */
    public function setNroSerie($nroSerie)
    {
        $this->nroSerie = $nroSerie;

        return $this;
    }

    /**
     * Get nroSerie
     *
     * @return string
     */
    public function getNroSerie()
    {
        return $this->nroSerie;
    }

    /**
     * Set capacidadPersonas
     *
     * @param string $capacidadPersonas
     *
     * @return Vehiculo
     */
    public function setCapacidadPersonas($capacidadPersonas)
    {
        $this->capacidadPersonas = $capacidadPersonas;

        return $this;
    }

    /**
     * Get capacidadPersonas
     *
     * @return string
     */
    public function getCapacidadPersonas()
    {
        return $this->capacidadPersonas;
    }

    /**
     * Set servicio
     *
     * @param string $servicio
     *
     * @return Vehiculo
     */
    public function setServicio($servicio)
    {
        $this->servicio = $servicio;

        return $this;
    }

    /**
     * Get servicio
     *
     * @return string
     */
    public function getServicio()
    {
        return $this->servicio;
    }

    /**
     * Set puertas
     *
     * @param string $puertas
     *
     * @return Vehiculo
     */
    public function setPuertas($puertas)
    {
        $this->puertas = $puertas;

        return $this;
    }

    /**
     * Get puertas
     *
     * @return string
     */
    public function getPuertas()
    {
        return $this->puertas;
    }

    /**
     * Set codColor
     *
     * @param \ColombiaAutos\administradorBundle\Entity\Color $codColor
     *
     * @return Vehiculo
     */
    public function setCodColor(\ColombiaAutos\administradorBundle\Entity\Color $codColor = null)
    {
        $this->codColor = $codColor;

        return $this;
    }

    /**
     * Get codColor
     *
     * @return \ColombiaAutos\administradorBundle\Entity\Color
     */
    public function getCodColor()
    {
        return $this->codColor;
    }

    /**
     * Set codCarroceria
     *
     * @param \ColombiaAutos\administradorBundle\Entity\Carroceria $codCarroceria
     *
     * @return Vehiculo
     */
    public function setCodCarroceria(\ColombiaAutos\administradorBundle\Entity\Carroceria $codCarroceria = null)
    {
        $this->codCarroceria = $codCarroceria;

        return $this;
    }

    /**
     * Get codCarroceria
     *
     * @return \ColombiaAutos\administradorBundle\Entity\Carroceria
     */
    public function getCodCarroceria()
    {
        return $this->codCarroceria;
    }

    /**
     * Set codImportacion
     *
     * @param \ColombiaAutos\administradorBundle\Entity\Importacion $codImportacion
     *
     * @return Vehiculo
     */
    public function setCodImportacion(\ColombiaAutos\administradorBundle\Entity\Importacion $codImportacion = null)
    {
        $this->codImportacion = $codImportacion;

        return $this;
    }

    /**
     * Get codImportacion
     *
     * @return \ColombiaAutos\administradorBundle\Entity\Importacion
     */
    public function getCodImportacion()
    {
        return $this->codImportacion;
    }

    /**
     * Set codModelo
     *
     * @param \ColombiaAutos\administradorBundle\Entity\Linea $codModelo
     *
     * @return Vehiculo
     */
    public function setCodModelo(\ColombiaAutos\administradorBundle\Entity\Linea $codModelo = null)
    {
        $this->codModelo = $codModelo;

        return $this;
    }

    /**
     * Get codModelo
     *
     * @return \ColombiaAutos\administradorBundle\Entity\Linea
     */
    public function getCodModelo()
    {
        return $this->codModelo;
    }

    /**
     * Add nroMotor
     *
     * @param \ColombiaAutos\administradorBundle\Entity\Motor $nroMotor
     *
     * @return Vehiculo
     */
    public function addNroMotor(\ColombiaAutos\administradorBundle\Entity\Motor $nroMotor)
    {
        $this->nroMotor[] = $nroMotor;

        return $this;
    }

    /**
     * Remove nroMotor
     *
     * @param \ColombiaAutos\administradorBundle\Entity\Motor $nroMotor
     */
    public function removeNroMotor(\ColombiaAutos\administradorBundle\Entity\Motor $nroMotor)
    {
        $this->nroMotor->removeElement($nroMotor);
    }

    /**
     * Get nroMotor
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getNroMotor()
    {
        return $this->nroMotor;
    }
}
