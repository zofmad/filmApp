<?php

namespace FilmappBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use FilmappBundle\Entity\Director;
use FilmappBundle\Form\DirectorType;

/**
 * Director controller.
 *
 * @Route("/Director")
 */
class DirectorController extends Controller
{
    

    /**
     * Lists all Director entities.
     *
     * @Route("/", name="Director")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('FilmappBundle:Director')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Director entity.
     *
     * @Route("/", name="Director_create")
     * @Method("POST")
     * @Template("FilmappBundle:Director:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Director();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('Director_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Director entity.
     *
     * @param Director $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Director $entity)
    {
        $form = $this->createForm(new DirectorType(), $entity, array(
            'action' => $this->generateUrl('Director_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Director entity.
     *
     * @Route("/new", name="Director_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Director();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Director entity.
     *
     * @Route("/{id}", name="Director_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FilmappBundle:Director')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Director entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Director entity.
     *
     * @Route("/{id}/edit", name="Director_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FilmappBundle:Director')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Director entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Director entity.
    *
    * @param Director $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Director $entity)
    {
        $form = $this->createForm(new DirectorType(), $entity, array(
            'action' => $this->generateUrl('Director_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Director entity.
     *
     * @Route("/{id}", name="Director_update")
     * @Method("PUT")
     * @Template("FilmappBundle:Director:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FilmappBundle:Director')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Director entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('Director_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Director entity.
     *
     * @Route("/{id}", name="Director_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('FilmappBundle:Director')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Director entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('Director'));
    }

    /**
     * Creates a form to delete a Director entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('Director_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
