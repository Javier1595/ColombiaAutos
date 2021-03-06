<?php

namespace ColombiaAutos\administradorBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\Common\Collections\ArrayCollection;
use ColombiaAutos\administradorBundle\Entity\Departamento;
use ColombiaAutos\administradorBundle\Entity\Ciudad;
use ColombiaAutos\administradorBundle\Form\DepartamentoType;

/**
 * Departamento controller.
 *
 */
class DepartamentoController extends Controller
{

    /**
     * Lists all Departamento entities.
     *
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ColombiaAutosadministradorBundle:Departamento')->findAll();

        $em1    = $this->get('doctrine.orm.entity_manager');
        $dql   = "SELECT d FROM ColombiaAutosadministradorBundle:Departamento d";
        $query = $em1->createQuery($dql);
         $paginator  = $this->get('knp_paginator');
            $pagination = $paginator->paginate(
                $query,
                $request->query->getInt('page', 1)/*page number*/,
                15/*limit per page*/
            );


        return $this->render('ColombiaAutosadministradorBundle:Departamento:index.html.twig', array(
            'entities' => $entities,
            'pagination' => $pagination
        ));
    }
    /**
     * Creates a new Departamento entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Departamento();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('departamento_show', array('id' => $entity->getId())));
        }

        return $this->render('ColombiaAutosadministradorBundle:Departamento:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Departamento entity.
     *
     * @param Departamento $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Departamento $entity)
    {
        $form = $this->createForm(new DepartamentoType(), $entity, array(
            'action' => $this->generateUrl('departamento_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Departamento entity.
     *
     */
    public function newAction()
    {
        $entity = new Departamento();
        $form   = $this->createCreateForm($entity);

        return $this->render('ColombiaAutosadministradorBundle:Departamento:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Departamento entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $em1 = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ColombiaAutosadministradorBundle:Departamento')->find($id);
        $entities = $em1->getRepository('ColombiaAutosadministradorBundle:Ciudad')->findBycod_departamento($id);

        if (!$entity) {
            //throw $this->createNotFoundException('Unable to find Departamento entity.');
        }
        if (!$entities) {
            //throw $this->createNotFoundException('Unable to find Ciudad entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ColombiaAutosadministradorBundle:Departamento:show.html.twig', array(
            'entity'      => $entity,
            'entities'      => $entities,
            'delete_form' => $deleteForm->createView(),
        ));

    }
    /**
     * Displays a form to edit an existing Departamento entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ColombiaAutosadministradorBundle:Departamento')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Departamento entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ColombiaAutosadministradorBundle:Departamento:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Departamento entity.
    *
    * @param Departamento $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Departamento $entity)
    {
        $form = $this->createForm(new DepartamentoType(), $entity, array(
            'action' => $this->generateUrl('departamento_update', array('id' => $entity->getCodDepartamento())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Departamento entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ColombiaAutosadministradorBundle:Departamento')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Departamento entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('departamento_edit', array('id' => $id)));
        }

        return $this->render('ColombiaAutosadministradorBundle:Departamento:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Departamento entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ColombiaAutosadministradorBundle:Departamento')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Departamento entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('departamento'));
    }

    /**
     * Creates a form to delete a Departamento entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('departamento_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
