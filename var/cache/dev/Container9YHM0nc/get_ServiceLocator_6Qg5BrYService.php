<?php

namespace Container9YHM0nc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_6Qg5BrYService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.6Qg5BrY' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.6Qg5BrY'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\BankRouletteController::indexAction' => ['privates', '.service_locator.oly8gQ8', 'get_ServiceLocator_Oly8gQ8Service', true],
            'App\\Controller\\DefaultController::indexAction' => ['privates', '.service_locator.LQ80LD8', 'get_ServiceLocator_LQ80LD8Service', true],
            'App\\Controller\\SecurityController::loginAction' => ['privates', '.service_locator.LQ80LD8', 'get_ServiceLocator_LQ80LD8Service', true],
            'App\\Controller\\SecurityController::logoutAction' => ['privates', '.service_locator.LQ80LD8', 'get_ServiceLocator_LQ80LD8Service', true],
            'App\\Controller\\UsersController::fastregistrationAction' => ['privates', '.service_locator.3BVcuJz', 'get_ServiceLocator_3BVcuJzService', true],
            'App\\Controller\\UsersController::searchAction' => ['privates', '.service_locator.LQ80LD8', 'get_ServiceLocator_LQ80LD8Service', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\BankRouletteController:indexAction' => ['privates', '.service_locator.oly8gQ8', 'get_ServiceLocator_Oly8gQ8Service', true],
            'App\\Controller\\DefaultController:indexAction' => ['privates', '.service_locator.LQ80LD8', 'get_ServiceLocator_LQ80LD8Service', true],
            'App\\Controller\\SecurityController:loginAction' => ['privates', '.service_locator.LQ80LD8', 'get_ServiceLocator_LQ80LD8Service', true],
            'App\\Controller\\SecurityController:logoutAction' => ['privates', '.service_locator.LQ80LD8', 'get_ServiceLocator_LQ80LD8Service', true],
            'App\\Controller\\UsersController:fastregistrationAction' => ['privates', '.service_locator.3BVcuJz', 'get_ServiceLocator_3BVcuJzService', true],
            'App\\Controller\\UsersController:searchAction' => ['privates', '.service_locator.LQ80LD8', 'get_ServiceLocator_LQ80LD8Service', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\BankRouletteController::indexAction' => '?',
            'App\\Controller\\DefaultController::indexAction' => '?',
            'App\\Controller\\SecurityController::loginAction' => '?',
            'App\\Controller\\SecurityController::logoutAction' => '?',
            'App\\Controller\\UsersController::fastregistrationAction' => '?',
            'App\\Controller\\UsersController::searchAction' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\BankRouletteController:indexAction' => '?',
            'App\\Controller\\DefaultController:indexAction' => '?',
            'App\\Controller\\SecurityController:loginAction' => '?',
            'App\\Controller\\SecurityController:logoutAction' => '?',
            'App\\Controller\\UsersController:fastregistrationAction' => '?',
            'App\\Controller\\UsersController:searchAction' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
