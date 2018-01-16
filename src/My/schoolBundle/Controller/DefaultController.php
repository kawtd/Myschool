<?php

namespace My\schoolBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Component\HttpFoundation\Response;
class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {

        return $this->render('MyschoolBundle:Default:index.html.twig');
    }
    /**
     * @Route("/affichage", name="affichage_path")
     */
    public function affichageAction()
    {
        return $this->render('MyschoolBundle:Default:affichage.html.twig');
    }
}
