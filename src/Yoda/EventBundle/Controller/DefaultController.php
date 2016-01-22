<?php

namespace Yoda\EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        $data = array(
            'count' => 5,
            'name' => $name,
            'quote' => 'test JSON output'
        );
        $json = json_encode($data);

        return new JsonResponse($json);
    }
}
