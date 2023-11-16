<?php

namespace ContainerUoJxrn1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XNNyuFfService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.xNNyuFf' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.xNNyuFf'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'annonce' => ['privates', '.errored..service_locator.xNNyuFf.App\\Entity\\Annonces', NULL, 'Cannot autowire service ".service_locator.xNNyuFf": it needs an instance of "App\\Entity\\Annonces" but this type has been excluded in "config/services.yaml".'],
        ], [
            'annonce' => 'App\\Entity\\Annonces',
        ]);
    }
}