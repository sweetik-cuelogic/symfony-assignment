<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('my_homepage', new Route('/', array(
    '_controller' => 'MyBundle:staticPages:index',
)));

return $collection;
