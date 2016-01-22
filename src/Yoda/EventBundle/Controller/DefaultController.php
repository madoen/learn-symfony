<?php

namespace Yoda\EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        // $this->container *only* works in a controller.
        $templating = $this->container->get('templating');

        return $templating->renderResponse(
            'EventBundle:Default:index.html.twig',
            array('name' => $name)
        );
    }
}
