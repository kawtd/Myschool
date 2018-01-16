<?php

namespace My\schoolBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use My\schoolBundle\Entity\Specialite;
use \Symfony\Component\HttpFoundation\Request;

class SpecialiteController extends Controller
{
    /**
     * @Route("/Specialite_new",name = "Specialite_new")
     */
    public function addSpecialiteAction(Request $request)
    {$Specialite = new Specialite();
 $f = $this->createFormBuilder($Specialite)
->add('libelle','text',array('label' => 'Libelle Specialite : '))
->getForm();
 $f ->handleRequest($request);
    if ($f->isValid())
   {
         $em = $this->getDoctrine()->getManager();
            $em->persist($Specialite);
            $em->flush();
     
   }
   $em = $this->getDoctrine()->getManager();
     $classes = $em->getRepository('MyschoolBundle:Specialite')->findAll();
        return $this->render('MyschoolBundle:Specialite:add_specialite.html.twig', array(
            'f' => $f->createView(),'cls' => $classes
        ));
    }

    /**
     * @Route("/listSpecialite",name = "Specialite_list")
     */
    public function listSpecialiteAction()
    {
        $em = $this->getDoctrine()->getManager();
     $Classe = $em->getRepository('MyschoolBundle:Specialite')->findAll();
        return $this->render('MyschoolBundle:Specialite:list_specialite.html.twig', array(
            'enss' => $Classe
        ));
    }

    /**
     * @Route("/editSpecialite"{id}",name = "edit_specialite")
     * @Route("/addspecialite",name = "new_specialite")
     */
    
   /* public function editSpecialiteAction($id)
    {
        $message='';
 $em = $this->getDoctrine()->getManager();
if (isset($id))
{
 // modification d'un acteur existant : on recherche ses données
 $sepecialite = $em->find('MyschoolBundle:Specialite', $id);
 if (!$sepecialite)
 {
 $message='Aucun Enseignant trouvé';
 }
}
else
{
$Specialite = new Specialite();
 $f = $this->createFormBuilder($Specialite)
->add('libelle','text',array('label' => 'Libelle Specialite : '))
->getForm();
 $f ->handleRequest($request);
    if ($f->isValid())
   {
         $em = $this->getDoctrine()->getManager();
            $em->persist($Specialite);
            $em->flush();
     
if (isset($id))
 {
 $message='Enseignant modifié avec succès !';
 }
 else
 {
 $message='Enseignant ajouté avec succès !';
}}
    }
        return $this->render('MyschoolBundle:Specialite:edit_specialite.html.twig', array(
            'f' => $f->createView(),
 'message' => $message
        ));
    }
*/
}
