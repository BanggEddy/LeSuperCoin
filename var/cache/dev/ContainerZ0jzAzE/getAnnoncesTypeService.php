<?php

namespace ContainerZ0jzAzE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAnnoncesTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\AnnoncesType' shared autowired service.
     *
     * @return \App\Form\AnnoncesType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/AnnoncesType.php';

        return $container->privates['App\\Form\\AnnoncesType'] = new \App\Form\AnnoncesType();
    }
}
