<?php

namespace Miky\Bundle\AdBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MikyAdBundle:Default:index.html.twig');
    }
}
