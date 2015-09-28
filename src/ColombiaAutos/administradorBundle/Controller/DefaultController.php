<?php

namespace ColombiaAutos\administradorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ColombiaAutos\administradorBundle\Entity\Departamento;
use ColombiaAutos\administradorBundle\Entity\Ciudad;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\Common\Collections\ArrayCollection;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ColombiaAutosadministradorBundle:Default:index.html.twig', array('name' => $name));
    }
    public function crearCiudadAction()
    {
        $depto = new Departamento();
        $depto->setCodDepartamento('8');
        $depto->setNombreDepartamento('Atlantico');

        $ciud = new Ciudad();
        $ciud->setCodCiudad('81');
        $ciud->setNombreCiudad('Barranquilla');
        // relaciona este producto a la categoría
        $ciud->setCodDepartamento($depto->getCodDepartamento());

        $em = $this->getDoctrine()->getManager();
        $em->persist($depto);
        $em->persist($ciud);
        $em->flush();

        return new Response(
            'Creada la Ciudad: '.$ciud->getNombreCiudad().' y el departamento: '.$depto->getNombreDepartamento()
        );
    }
}