<?php

namespace ColombiaAutos\administradorBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use ColombiaAutos\administradorBundle\Entity\Motor;
use ColombiaAutos\administradorBundle\Form\MotorType;

/**
 * Motor controller.
 *
 */
class MotorController extends Controller
{

    /**
     * Lists all Motor entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ColombiaAutosadministradorBundle:Motor')->findAll();

        return $this->render('ColombiaAutosadministradorBundle:Motor:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Motor entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Motor();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('motor'));
        }

        return $this->render('ColombiaAutosadministradorBundle:Motor:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Motor entity.
     *
     * @param Motor $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Motor $entity)
    {
        $form = $this->createForm(new MotorType(), $entity, array(
            'action' => $this->generateUrl('motor_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Motor entity.
     *
     */
    public function newAction()
    {
        $entity = new Motor();
        $form   = $this->createCreateForm($entity);

        return $this->render('ColombiaAutosadministradorBundle:Motor:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Motor entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ColombiaAutosadministradorBundle:Motor')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Motor entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ColombiaAutosadministradorBundle:Motor:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Motor entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ColombiaAutosadministradorBundle:Motor')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Motor entity.');
        }

        $editForm = $this->createEditForm($entity);

        return $this->render('ColombiaAutosadministradorBundle:Motor:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Motor entity.
    *
    * @param Motor $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Motor $entity)
    {
        $form = $this->createForm(new MotorType(), $entity, array(
            'action' => $this->generateUrl('motor_update', array('id' => $entity->getNroMotor())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Motor entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ColombiaAutosadministradorBundle:Motor')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Motor entity.');
        }
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();
            $this->get('session')->getFlashBag()->add('mensaje','Se ha editado el motor exitosamente');
            return $this->redirect($this->generateUrl('motor'));
        }

        return $this->render('ColombiaAutosadministradorBundle:Motor:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Motor entity.
     *
     */
    public function deleteAction($id)
    {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ColombiaAutosadministradorBundle:Motor')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Motor entity.');
            }

            $em->remove($entity);
            $em->flush();
            $this->get('session')->getFlashBag()->add('mensaje','Se ha eliminado el motor exitosamente');
            return $this->redirect($this->generateUrl('motor'));
    }
}
