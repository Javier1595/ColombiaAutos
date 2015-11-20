<?php

namespace ColombiaAutos\administradorBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use ColombiaAutos\administradorBundle\Entity\Organismo;
use ColombiaAutos\administradorBundle\Form\OrganismoType;

/**
 * Organismo controller.
 *
 */
class OrganismoController extends Controller
{

    /**
     * Lists all Organismo entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ColombiaAutosadministradorBundle:Organismo')->findAll();

        return $this->render('ColombiaAutosadministradorBundle:Organismo:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Organismo entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Organismo();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('organismo_show', array('id' => $entity->getId())));
        }

        return $this->render('ColombiaAutosadministradorBundle:Organismo:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Organismo entity.
     *
     * @param Organismo $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Organismo $entity)
    {
        $form = $this->createForm(new OrganismoType(), $entity, array(
            'action' => $this->generateUrl('organismo_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Organismo entity.
     *
     */
    public function newAction()
    {
        $entity = new Organismo();
        $form   = $this->createCreateForm($entity);

        return $this->render('ColombiaAutosadministradorBundle:Organismo:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Organismo entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $em1 = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ColombiaAutosadministradorBundle:Organismo')->find($id);

        $entities = $em1->getRepository('ColombiaAutosadministradorBundle:Ciudad')->findBycod_ciudad($id);

        if (!$entity) {
            //throw $this->createNotFoundException('Unable to find Departamento entity.');
        }
        if (!$entities) {
            //throw $this->createNotFoundException('Unable to find Ciudad entity.');
        }
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ColombiaAutosadministradorBundle:Organismo:show.html.twig', array(
            'entity'      => $entity,
            'entities'      => $entities,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Organismo entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ColombiaAutosadministradorBundle:Organismo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Organismo entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ColombiaAutosadministradorBundle:Organismo:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Organismo entity.
    *
    * @param Organismo $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Organismo $entity)
    {
        $form = $this->createForm(new OrganismoType(), $entity, array(
            'action' => $this->generateUrl('organismo_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Organismo entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ColombiaAutosadministradorBundle:Organismo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Organismo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('organismo_edit', array('id' => $id)));
        }

        return $this->render('ColombiaAutosadministradorBundle:Organismo:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Organismo entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ColombiaAutosadministradorBundle:Organismo')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Organismo entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('organismo'));
    }

    /**
     * Creates a form to delete a Organismo entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('organismo_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
