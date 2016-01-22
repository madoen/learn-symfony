<?php

namespace Yoda\EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        // $this->container *only* works in a controller.
        $templating = $this->container->get('templating');

        $content = $templating->render(
            'EventBundle:Default:index.html.twig',
            array('name' => $name)
        );

        return new Response($content);
    }
}
