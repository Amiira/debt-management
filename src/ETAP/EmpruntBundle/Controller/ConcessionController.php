<?php

namespace ETAP\EmpruntBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use ETAP\EmpruntBundle\Entity\Concession;
use ETAP\EmpruntBundle\Form\ConcessionType;

/**
 * Concession controller.
 *
 */
class ConcessionController extends Controller
{
    /**
     * Lists all Concession entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EmpruntBundle:Concession')->findAll();

        return $this->render('EmpruntBundle:Concession:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Creates a new Concession entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Concession();
        $form = $this->createForm(new ConcessionType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('concession_show', array('id' => $entity->getId())));
        }

        return $this->render('EmpruntBundle:Concession:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Concession entity.
     *
     */
    public function newAction()
    {
        $entity = new Concession();
        $form   = $this->createForm(new ConcessionType(), $entity);

        return $this->render('EmpruntBundle:Concession:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Concession entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EmpruntBundle:Concession')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Concession entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EmpruntBundle:Concession:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Concession entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EmpruntBundle:Concession')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Concession entity.');
        }

        $editForm = $this->createForm(new ConcessionType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EmpruntBundle:Concession:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Concession entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EmpruntBundle:Concession')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Concession entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new ConcessionType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('concession_edit', array('id' => $id)));
        }

        return $this->render('EmpruntBundle:Concession:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Concession entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EmpruntBundle:Concession')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Concession entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('concession'));
    }

    /**
     * Creates a form to delete a Concession entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
