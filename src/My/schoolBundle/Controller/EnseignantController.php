<?php

namespace My\schoolBundle\Controller;

use My\schoolBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use My\schoolBundle\Entity\Enseignant;
use Symfony\Component\HttpFoundation\Request;
use My\schoolBundle\Form\EnseignantType;
use My\schoolBundle\Form\chekType;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
class EnseignantController extends Controller
{
    /**
     * @Route("/addenseignant",name = "new_E")
     */
    public function addenseignantAction(Request $request)
    {

        $message="";
        $enseignant= new Enseignant();
        $user=new User();
        $encoder = $this->container->get('security.encoder_factory')->getEncoder($user);

        $em1 = $this->getDoctrine()->getManager();
        $f=$this->container->get('form.factory')->create(new EnseignantType(),
        $enseignant);

        $f ->handleRequest($request);
         if ($f->isValid())
        {
            $message="Ajout effectué avec succes";
            $em = $this->getDoctrine()->getManager();

            $enseignant->upload();
            $em->persist($enseignant);
            $em->flush();
            $user->setUsername($enseignant->getNom());
            $user->setEmail($enseignant->getEmail());
            $user->addRole('ROLE_ENSEIGNANT');
            $user->setEnabled(true);
            $tokenGenerator = $this->container->get('fos_user.util.token_generator');
            $password = substr($tokenGenerator->generateToken(), 0, 12);
            $user->setPassword($encoder->encodePassword($password, $user->getSalt()));
            $em1->persist($user);
            $em1->flush();
            $message1 = \Swift_Message::newInstance()
                ->setSubject('valid')
                ->setFrom('makbook2016@gmail.com')
                ->setTo('bramliak@gmail.com')
                ->setCharset('utf-8')
                ->setBody($this->container->get('templating')->render('MyschoolBundle:Email:ensegniant.html.twig',array('mp'=>$password)),'text/html');
            $this->get('mailer')->send($message1);


            
            
        }
        return $this->render('MyschoolBundle:Enseignant:addenseignant.html.twig', array(
            "f"=>$f->createView(),
            "message"=>$message,
        ));
    }

    /**
     * @Route("/editensegnant/{id}",name = "edit_enseignant")
     * @Route("/addEnseignant",name = "new_enseignant")
     */
    public function editenseignantAction(Request $request, $id = null)
    {        $message='';
 $em = $this->getDoctrine()->getManager();
if (isset($id))
{
 // modification d'un acteur existant : on recherche ses données
 $enseignant = $em->find('MyschoolBundle:Enseignant', $id);
 if (!$enseignant)
 {
 $message='Aucun Enseignant trouvé';
 }
}
else
{
 // ajout d'un nouvel acteur
 $enseignant = new Enseignant();
}
$form = $this->container->get('form.factory')->create(new EnseignantType(), $enseignant);
 $form ->handleRequest($request);
  if ($form->isValid())
    {
       $em = $this->getDoctrine()->getManager();
            $enseignant->upload();
            $em->persist($enseignant);
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
        return $this->render('MyschoolBundle:Enseignant:editenseignant.html.twig', array(
            'f' => $form->createView(),
 'message' => $message
        ));
    }
    
    /**
     * @Route("/remEnseignant/{id}",name ="remove_enseignant")
     */
    public function removeenseignantAction($id)
    {$em = $this->getDoctrine()->getManager();
$enseignant = $em->find('MyschoolBundle:Enseignant', $id);

 if (!$enseignant)
 {
 throw new NotFoundHttpException("Enseignant non trouvé");
 }

 $em->remove($enseignant);
 $em->flush();
 return new RedirectResponse($this->container->get('router')->generate('list_enseignant'));
    }
    /**
     * @Route("/listenseignant",name = "list_enseignant")
     */
    public function listenseignantAction(Request $request)
    {
              $em = $this->getDoctrine()->getManager();
     $enseignants = $em->getRepository('MyschoolBundle:Enseignant')->findAll();
    $entites  = $this->get('knp_paginator')->paginate(
    
        $enseignants,
        $request->query->get('page', 1)/*page number*/,
        6/*limit per page*/);
    
        return $this->render('MyschoolBundle:Enseignant:listenseignant.html.twig', 
                array('enss' => $entites));
         
    }
    
    /**
     * @Route("/alert",name = "alert")
     * @Method({"GET", "POST"})
     */
    public function AlertAction(Request $request)
    {//$myObject='';
              $em = $this->getDoctrine()->getManager();
     $enseignants = $em->getRepository('MyschoolBundle:Classe')->findAll();
     $cle = $request->query->get('id');
   /*  $form = $this->createForm(new chekType(), $myObject);
     $form->handleRequest($request);
     if($form->isValid()) {
    $data = $form->getData();
    if($data->getMyCheckbox() === "false") {
        $myObject->setMyCheckbox(false);
    } else {
        $myObject->setMyCheckbox(true);
    }*/
      /*  $builder->add('stockStatus', ChoiceType::class, array(
            'choices' => array(
                'Main Statuses' => array(
                    'Yes' => 'stock_yes',
                    'No' => 'stock_no',
                ),
                'Out of Stock Statuses' => array(
                    'Backordered' => 'stock_backordered',
                    'Discontinued' => 'stock_discontinued',
                ),
            ),
        ));*/
     $repository = $em->getRepository('MyschoolBundle:Student')
                ->findBy(array('Classe'=>$cle));
                      
        return $this->render('MyschoolBundle:Enseignant:alert.html.twig', 
                array('enss' => $enseignants ,'rep'=>$repository,'cle'=>$cle));
         
    }
    
        /**
     * @Route("/rechEnseignant", name="rechEnseignant")
     * @Method({"GET", "POST"})
     */
    public function rechEnseignantAction(Request $request)
    {
        
        $em = $this->getDoctrine()->getManager();
        $cle = $request->query->get('m');
       
        $repository = $em->getRepository('MyschoolBundle:Enseignant');
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

        return $this->render('MyschoolBundle:Enseignant:listenseignant.html.twig', array(
            'enss' => $entities,
        ));
    }

}

