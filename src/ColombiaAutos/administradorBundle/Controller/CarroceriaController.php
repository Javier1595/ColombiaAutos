<?php

namespace ColombiaAutos\administradorBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use ColombiaAutos\administradorBundle\Entity\Carroceria;
use ColombiaAutos\administradorBundle\Form\CarroceriaType;

/**
 * Carroceria controller.
 *
 */
class CarroceriaController extends Controller
{

    /**
     * Lists all Carroceria entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ColombiaAutosadministradorBundle:Carroceria')->findAll();

        return $this->render('ColombiaAutosadministradorBundle:Carroceria:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Carroceria entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Carroceria();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('carroceria_show', array('id' => $entity->getCodCarroceria())));
        }

        return $this->render('ColombiaAutosadministradorBundle:Carroceria:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Carroceria entity.
     *
     * @param Carroceria $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Carroceria $entity)
    {
        $form = $this->createForm(new CarroceriaType(), $entity, array(
            'action' => $this->generateUrl('carroceria_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Carroceria entity.
     *
     */
    public function newAction()
    {
        $entity = new Carroceria();
        $form   = $this->createCreateForm($entity);

        return $this->render('ColombiaAutosadministradorBundle:Carroceria:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Carroceria entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ColombiaAutosadministradorBundle:Carroceria')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Carroceria entity.');
        }

        return $this->render('ColombiaAutosadministradorBundle:Carroceria:show.html.twig', array(
            'entity'      => $entity,
        ));
    }

    /**
     * Displays a form to edit an existing Carroceria entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ColombiaAutosadministradorBundle:Carroceria')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Carroceria entity.');
        }

        $editForm = $this->createEditForm($entity);

        return $this->render('ColombiaAutosadministradorBundle:Carroceria:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Carroceria entity.
    *
    * @param Carroceria $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Carroceria $entity)
    {
        $form = $this->createForm(new CarroceriaType(), $entity, array(
            'action' => $this->generateUrl('carroceria_update', array('id' => $entity->getCodCarroceria())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Carroceria entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ColombiaAutosadministradorBundle:Carroceria')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Carroceria entity.');
        }
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();
            $this->get('session')->getFlashBag()->add('mensaje','Se ha actualizado la carroceria exitosamente');
            return $this->redirect($this->generateUrl('carroceria'));
        }

        return $this->render('ColombiaAutosadministradorBundle:Carroceria:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
        ));
    }
    /**
     * Deletes a Carroceria entity.
     *
     */
    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('ColombiaAutosadministradorBundle:Carroceria')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Carroceria entity.');
        }

        $em->remove($entity);
        $em->flush();
        $this->get('session')->getFlashBag()->add('mensaje','Se ha eliminado la carroceria exitosamente');
        return $this->redirect($this->generateUrl('carroceria'));
    }
}
