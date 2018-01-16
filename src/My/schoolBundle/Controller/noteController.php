<?php

namespace My\schoolBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use My\schoolBundle\Entity\note;
use My\schoolBundle\Form\noteType;
use My\schoolBundle\Entity\Classe;
use My\schoolBundle\Entity\Student;
use \Symfony\Component\HttpFoundation\JsonResponse;

/**
 * note controller.
 *
 * @Route("/note")
 */
class noteController extends Controller
{
    /**
     * Lists all note entities.
     *
     * @Route("/", name="note_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $notes = $em->getRepository('MyschoolBundle:note')->findAll();

        return $this->render('note/index.html.twig', array(
            'notes' => $notes,
        ));
    }


    /**
     * Creates a new note entity.
     *
     * @Route("/new", name="note_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $note = new note();
        $form = $this->createForm('My\schoolBundle\Form\noteType', $note);
        $form->handleRequest($request);
        $cle = $request->query->get('id');
        $a='vide';
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $noteDs =  $form["noteDs"]->getData();
            $noteExam = $form["noteExam"]->getData();
            $pourcentageDs = $form["pourcentageDs"]->getData();
            $pourcentageExam = $form["pourcentageExam"]->getData();
            
            $note->setMoyenne(($noteDs*$pourcentageDs+$noteExam*$pourcentageExam)/100);
            $em->persist($note);
            $em->flush();
         

            return $this->redirectToRoute('note_show', array('id' => $note->getId()));
        }

        return $this->render('note/new.html.twig', array(
            'note' => $note,
            'f' => $form->createView(),
            
        ));
    }

    /**
     * Finds and displays a note entity.
     *
     * @Route("/{id}", name="note_show")
     * @Method("GET")
     */
    public function showAction(note $note)
    {
        $deleteForm = $this->createDeleteForm($note);

        return $this->render('note/show.html.twig', array(
            'note' => $note,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing note entity.
     *
     * @Route("/{id}/edit", name="note_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, note $note)
    {
        $deleteForm = $this->createDeleteForm($note);
        $editForm = $this->createForm('My\schoolBundle\Form\noteType', $note);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($note);
            $em->flush();

            return $this->redirectToRoute('note_edit', array('id' => $note->getId()));
        }

        return $this->render('note/edit.html.twig', array(
            'note' => $note,
            'f' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a note entity.
     *
     * @Route("/{id}", name="note_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, note $note)
    {
        $form = $this->createDeleteForm($note);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($note);
            $em->flush();
        }

        return $this->redirectToRoute('note_index');
    }

    /**
     * Creates a form to delete a note entity.
     *
     * @param note $note The note entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(note $note)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('note_delete', array('id' => $note->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
