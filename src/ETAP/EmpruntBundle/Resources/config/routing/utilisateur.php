<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('utilisateur', new Route('/', array(
    '_controller' => 'EmpruntBundle:Utilisateur:index',
)));

$collection->add('utilisateur_show', new Route('/{id}/show', array(
    '_controller' => 'EmpruntBundle:Utilisateur:show',
)));

$collection->add('utilisateur_new', new Route('/new', array(
    '_controller' => 'EmpruntBundle:Utilisateur:new',
)));

$collection->add('utilisateur_create', new Route(
    '/create',
    array('_controller' => 'EmpruntBundle:Utilisateur:create'),
    array('_method' => 'post')
));

$collection->add('utilisateur_edit', new Route('/{id}/edit', array(
    '_controller' => 'EmpruntBundle:Utilisateur:edit',
)));

$collection->add('utilisateur_update', new Route(
    '/{id}/update',
    array('_controller' => 'EmpruntBundle:Utilisateur:update'),
    array('_method' => 'post|put')
));

$collection->add('utilisateur_delete', new Route(
    '/{id}/delete',
    array('_controller' => 'EmpruntBundle:Utilisateur:delete'),
    array('_method' => 'post|delete')
));

return $collection;
