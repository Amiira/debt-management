<?php

namespace ETAP\EmpruntBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use ETAP\EmpruntBundle\Entity\Contrat;
use ETAP\EmpruntBundle\Form\ContratType;

/**
 * Contrat controller.
 *
 */
class ContratController extends Controller
{
    /**
     * Lists all Contrat entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EmpruntBundle:Contrat')->findAll();

        return $this->render('EmpruntBundle:Contrat:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Creates a new Contrat entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Contrat();
        $form = $this->createForm(new ContratType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('contrat_show', array('id' => $entity->getId())));
        }

        return $this->render('EmpruntBundle:Contrat:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Contrat entity.
     *
     */
    public function newAction()
    {
        $entity = new Contrat();
        $form   = $this->createForm(new ContratType(), $entity);

        return $this->render('EmpruntBundle:Contrat:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Contrat entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EmpruntBundle:Contrat')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Contrat entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EmpruntBundle:Contrat:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Contrat entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EmpruntBundle:Contrat')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Contrat entity.');
        }

        $editForm = $this->createForm(new ContratType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EmpruntBundle:Contrat:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Contrat entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EmpruntBundle:Contrat')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Contrat entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new ContratType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('contrat_edit', array('id' => $id)));
        }

        return $this->render('EmpruntBundle:Contrat:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Contrat entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EmpruntBundle:Contrat')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Contrat entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('contrat'));
    }

    /**
     * Creates a form to delete a Contrat entity by id.
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
