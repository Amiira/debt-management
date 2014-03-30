<?php

namespace ETAP\EmpruntBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use ETAP\EmpruntBundle\Entity\Joursferies;
use ETAP\EmpruntBundle\Form\JoursferiesType;

/**
 * Joursferies controller.
 *
 */
class JoursferiesController extends Controller
{
    /**
     * Lists all Joursferies entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EmpruntBundle:Joursferies')->findAll();

        return $this->render('EmpruntBundle:Joursferies:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Creates a new Joursferies entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Joursferies();
        $form = $this->createForm(new JoursferiesType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('joursferies_show', array('id' => $entity->getId())));
        }

        return $this->render('EmpruntBundle:Joursferies:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Joursferies entity.
     *
     */
    public function newAction()
    {
        $entity = new Joursferies();
        $form   = $this->createForm(new JoursferiesType(), $entity);

        return $this->render('EmpruntBundle:Joursferies:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Joursferies entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EmpruntBundle:Joursferies')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Joursferies entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EmpruntBundle:Joursferies:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Joursferies entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EmpruntBundle:Joursferies')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Joursferies entity.');
        }

        $editForm = $this->createForm(new JoursferiesType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EmpruntBundle:Joursferies:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Joursferies entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EmpruntBundle:Joursferies')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Joursferies entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new JoursferiesType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('joursferies_edit', array('id' => $id)));
        }

        return $this->render('EmpruntBundle:Joursferies:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Joursferies entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EmpruntBundle:Joursferies')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Joursferies entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('joursferies'));
    }

    /**
     * Creates a form to delete a Joursferies entity by id.
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
