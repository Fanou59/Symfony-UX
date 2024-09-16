<?php

namespace ContainerO9T7F6i;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUx_LiveComponent_AttributeHelperFactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'ux.live_component.attribute_helper_factory' shared service.
     *
     * @return \Symfony\UX\LiveComponent\Util\TwigAttributeHelperFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/ux-live-component/src/Util/TwigAttributeHelperFactory.php';

        $a = ($container->privates['twig'] ?? self::getTwigService($container));

        if (isset($container->privates['ux.live_component.attribute_helper_factory'])) {
            return $container->privates['ux.live_component.attribute_helper_factory'];
        }

        return $container->privates['ux.live_component.attribute_helper_factory'] = new \Symfony\UX\LiveComponent\Util\TwigAttributeHelperFactory($a);
    }
}
