<?php

namespace Yoda\EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        // Use render method from base controller on controller.php.
        return $this->render(
            'EventBundle:Default:index.html.twig',
            array('name' => $name)
        );
        // This done the same way used on 2nd lesson.
    }
}
