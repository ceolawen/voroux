<?php

namespace Nikko\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('NikkoAppBundle::index.html.twig');
    }
}
