<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Debug\Debug;
use Yoda\EventBundle\Entity\Event;

/**
 * @var Composer\Autoload\ClassLoader $loader
 */
$loader = require __DIR__.'/app/autoload.php';
Debug::enable();

$kernel = new AppKernel('dev', true);
$kernel->loadClassCache();
$request = Request::createFromGlobals();
$kernel->boot();

$container = $kernel->getContainer();
$container->enterScope('request');
$container->set('request', $request);

// Set the event data.
$event = new Event();
$event->setName('Ramdhan\'s surprise birthday party');
$event->setLocation('Jakarta');
$event->setTime(new \Datetime('tomorrow noon'));
$event->setDetails('Ha! Ramdhan HATES surprises!!!!');

// Get doctrice Entity Manager and save the data.
$em = $container->get('doctrine')->getManager();
$em->persist($event);
$em->flush();
