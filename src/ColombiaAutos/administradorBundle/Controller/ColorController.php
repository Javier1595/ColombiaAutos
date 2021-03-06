<?php

namespace ColombiaAutos\administradorBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use ColombiaAutos\administradorBundle\Entity\Color;
use ColombiaAutos\administradorBundle\Form\ColorType;

/**
 * Color controller.
 *
 */
class ColorController extends Controller
{

    /**
     * Lists all Color entities.
     *
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ColombiaAutosadministradorBundle:Color')->findAll();

        $em1    = $this->get('doctrine.orm.entity_manager');
        $dql   = "SELECT c FROM ColombiaAutosadministradorBundle:Color c";
        $query = $em1->createQuery($dql);
         $paginator  = $this->get('knp_paginator');
            $pagination = $paginator->paginate(
                $query,
                $request->query->getInt('page', 1)/*page number*/,
                50/*limit per page*/
            );


        return $this->render('ColombiaAutosadministradorBundle:Color:index.html.twig', array(
            'entities' => $entities,
            'pagination' => $pagination
        ));
    }
    /**
     * Creates a new Color entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Color();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('color_show', array('id' => $entity->getId())));
        }

        return $this->render('ColombiaAutosadministradorBundle:Color:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Color entity.
     *
     * @param Color $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Color $entity)
    {
        $form = $this->createForm(new ColorType(), $entity, array(
            'action' => $this->generateUrl('color_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Color entity.
     *
     */
    public function newAction()
    {
        $entity = new Color();
        $form   = $this->createCreateForm($entity);

        return $this->render('ColombiaAutosadministradorBundle:Color:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Color entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ColombiaAutosadministradorBundle:Color')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Color entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ColombiaAutosadministradorBundle:Color:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Color entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ColombiaAutosadministradorBundle:Color')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Color entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ColombiaAutosadministradorBundle:Color:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Color entity.
    *
    * @param Color $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Color $entity)
    {
        $form = $this->createForm(new ColorType(), $entity, array(
            'action' => $this->generateUrl('color_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Color entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ColombiaAutosadministradorBundle:Color')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Color entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('color_edit', array('id' => $id)));
        }

        return $this->render('ColombiaAutosadministradorBundle:Color:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Color entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ColombiaAutosadministradorBundle:Color')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Color entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('color'));
    }

    /**
     * Creates a form to delete a Color entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('color_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
