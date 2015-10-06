<?php

namespace ColombiaAutos\administradorBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use ColombiaAutos\administradorBundle\Entity\Propietario;
use ColombiaAutos\administradorBundle\Form\PropietarioType;

/**
 * Propietario controller.
 *
 */
class PropietarioController extends Controller
{

    /**
     * Lists all Propietario entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ColombiaAutosadministradorBundle:Propietario')->findAll();

        return $this->render('ColombiaAutosadministradorBundle:Propietario:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Propietario entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Propietario();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            $this->get('session')->getFlashBag()->add('mensaje','Se ha ingresado el propietario exitosamente');
            return $this->redirect($this->generateUrl('propietario'));
        }
        return $this->render('ColombiaAutosadministradorBundle:Propietario:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Propietario entity.
     *
     * @param Propietario $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Propietario $entity)
    {
        $form = $this->createForm(new PropietarioType(), $entity, array(
            'action' => $this->generateUrl('propietario_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Propietario entity.
     *
     */
    public function newAction()
    {
        $entity = new Propietario();
        $form   = $this->createCreateForm($entity);

        return $this->render('ColombiaAutosadministradorBundle:Propietario:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Propietario entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ColombiaAutosadministradorBundle:Propietario')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Propietario entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ColombiaAutosadministradorBundle:Propietario:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Propietario entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ColombiaAutosadministradorBundle:Propietario')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Propietario entity.');
        }

        $editForm = $this->createEditForm($entity);

        return $this->render('ColombiaAutosadministradorBundle:Propietario:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Propietario entity.
    *
    * @param Propietario $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Propietario $entity)
    {
        $form = $this->createForm(new PropietarioType(), $entity, array(
            'action' => $this->generateUrl('propietario_update', array('id' => $entity->getnroIdentificacion())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Propietario entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ColombiaAutosadministradorBundle:Propietario')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Propietario entity.');
        }
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();
            $this->get('session')->getFlashBag()->add('mensaje','Se ha editado el propietario exitosamente');
            return $this->redirect($this->generateUrl('propietario'));
        }

        return $this->render('ColombiaAutosadministradorBundle:Propietario:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Propietario entity.
     *
     */
    public function deleteAction($id)
    {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ColombiaAutosadministradorBundle:Propietario')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Propietario entity.');
            }

            $em->remove($entity);
            $em->flush();
            $this->get('session')->getFlashBag()->add('mensaje','Se ha eliminado el propietario exitosamente');
            return $this->redirect($this->generateUrl('propietario'));
    }
}
