<?php

namespace Container9YHM0nc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Errored__9GnfAEService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.errored..9GnfAE' shared service.
     *
     * @return \App\Controller\TranslatorService
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->throw('Cannot determine controller argument for "App\\Controller\\BankRouletteController::indexAction()": the $translator argument is type-hinted with the non-existent class or interface: "App\\Controller\\TranslatorService". Did you forget to add a use statement?');
    }
}