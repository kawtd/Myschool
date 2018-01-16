<?php

namespace My\schoolBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use My\schoolBundle\Entity\Student;
use My\schoolBundle\Form\StudentType;
use My\schoolBundle\Entity\Classe;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
class StudentController extends Controller
{
    /**
     * @Route("/addClasse",name = "classe_new")
     */
    public function addClasseAction(Request $request)
    {
        $classe = new Classe();
        $message="";
 $f = $this->createFormBuilder($classe)
->add('libelle','text',array('label' => 'Libelle Classe : '))
->getForm();
 $f ->handleRequest($request);
    if ($f->isValid())
   {
         $em = $this->getDoctrine()->getManager();
            $em->persist($classe);
            
            $em->flush();
            $message="Ajout effectué avec succes";
     
   }
   $em = $this->getDoctrine()->getManager();
     $classes = $em->getRepository('MyschoolBundle:classe')->findAll();
        
        return $this->render('MyschoolBundle:Student:add_classe.html.twig', array(
           'f' => $f->createView(),'cls' => $classes,'message'=>$message
        ));
    }

    /**
     * @Route("/listClasse",name = "classe_list")
     */
    public function listClasseAction()
    {
        $em = $this->getDoctrine()->getManager();
     $Classe = $em->getRepository('MyschoolBundle:Classe')->findAll();
        return $this->render('MyschoolBundle:Student:list_classe.html.twig', array(
           'enss' => $Classe
        ));
    }

    /**
     * @Route("/addStudent",name ="student_new")
     */
    public function addStudentAction(Request $request)
    {
        $message="";
        $Student = new Student();
        $form = $this->container->get('form.factory')->create(new StudentType(),
        $Student);
        $form ->handleRequest($request);
         if ($form->isValid())
        {
            $message="Ajout effectué avec succes";
            $em = $this->getDoctrine()->getManager();
            $em->persist($Student);
            $Student->upload();
            $em->flush();
       
        }
        return $this->render('MyschoolBundle:Student:add_student.html.twig', array(
            'f' => $form->createView(),
            'message' => $message,
        ));
    }

    /**
     * @Route("/listStudent",name = "student_list")
     */
    public function listStudentAction(Request $request)
    {   
        $em = $this->getDoctrine()->getManager();
     $students = $em->getRepository('MyschoolBundle:Student')->findAll();
     $entites  = $this->get('knp_paginator')->paginate(
    
        $students,
        $request->query->get('page', 1)/*page number*/,
        6/*limit per page*/);
    
        return $this->render('MyschoolBundle:Student:list_student.html.twig', array(
            'studs' => $entites
        ));
    }
        /**
     * @Route("/editStudent/{id}",name = "edit_Student")
     * @Route("/addstudent",name = "new_Student")
     */
    public function editStudentAction(Request $request, $id = null)
    {        $message='';
 $em = $this->getDoctrine()->getManager();
if (isset($id))
{
 // modification d'un acteur existant : on recherche ses données
 $Student = $em->find('MyschoolBundle:Student', $id);
 if (!$Student)
 {
 $message='Aucun Enseignant trouvé';
 }
}
else
{
 // ajout d'un nouvel acteur
 $Student = new Student();
}
$form = $this->container->get('form.factory')->create(new StudentType(), $Student);
 $form ->handleRequest($request);
  if ($form->isValid())
    {
       $em = $this->getDoctrine()->getManager();
                   $Student->upload();
            $em->persist($Student);
            $em->flush();
if (isset($id))
 {
 $message='Enseignant modifié avec succès !';
 }
 else
 {
 $message='Enseignant ajouté avec succès !';
 }
    }
        return $this->render('MyschoolBundle:Student:editStudent.html.twig', array(
            'f' => $form->createView(),
 'message' => $message
        ));
    }
    
    /**
     * @Route("/remStudent/{id}",name ="remove_Student")
     */
    public function removeStudentAction($id)
    {$em = $this->getDoctrine()->getManager();
$Student = $em->find('MyschoolBundle:Student', $id);

 if (!$Student)
 {
 throw new NotFoundHttpException("Student non trouvé");
 }

 $em->remove($Student);
 $em->flush();
 return new RedirectResponse($this->container->get('router')->generate('student_list'));
    }
    
    /**
     * @Route("/rechStudent", name="rechStudent")
     * @Method({"GET", "POST"})
     */
    public function rechStudentAction(Request $request)
    {
        
        $em = $this->getDoctrine()->getManager();
        $cle = $request->query->get('m');
       
        $repository = $em->getRepository('MyschoolBundle:Student');
                /*->findBy(array('nom'=>$cle));*/
         $query = $repository->createQueryBuilder('p')
            ->Where('p.nom like :nom')
            ->setParameter('nom','%'.$cle.'%')
            ->orderBy('p.nom', 'ASC')
            ->getQuery();
         $students=$query->getResult();
        $entities   = $this->get('knp_paginator')->paginate(
        $students,
        $request->query->get('page', 1)/*page number*/,
        6/*limit per page*/
    );

        return $this->render('MyschoolBundle:Student:list_student.html.twig', array(
            'studs' => $entities,
        ));
    }

}
