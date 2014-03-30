<?php

namespace ETAP\EmpruntBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use ETAP\EmpruntBundle\Entity\Profil;
use ETAP\EmpruntBundle\Form\ProfilType;

/**
 * Profil controller.
 *
 */
class ProfilController extends Controller
{
    /**
     * Lists all Profil entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EmpruntBundle:Profil')->findAll();

        return $this->render('EmpruntBundle:Profil:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Creates a new Profil entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Profil();
        $form = $this->createForm(new ProfilType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('profil_show', array('id' => $entity->getId())));
        }

        return $this->render('EmpruntBundle:Profil:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Profil entity.
     *
     */
    public function newAction()
    {
        $entity = new Profil();
        $form   = $this->createForm(new ProfilType(), $entity);

        return $this->render('EmpruntBundle:Profil:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Profil entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EmpruntBundle:Profil')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Profil entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EmpruntBundle:Profil:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Profil entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EmpruntBundle:Profil')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Profil entity.');
        }

        $editForm = $this->createForm(new ProfilType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EmpruntBundle:Profil:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Profil entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EmpruntBundle:Profil')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Profil entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new ProfilType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('profil_edit', array('id' => $id)));
        }

        return $this->render('EmpruntBundle:Profil:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Profil entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EmpruntBundle:Profil')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Profil entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('profil'));
    }

    /**
     * Creates a form to delete a Profil entity by id.
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
