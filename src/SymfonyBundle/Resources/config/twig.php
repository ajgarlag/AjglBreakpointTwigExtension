<?php

/*
 * AJGL Breakpoint Twig Extension Component
 *
 * Copyright (C) Antonio J. García Lagar <aj@garcialagar.es>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use Ajgl\Twig\Extension\BreakpointExtension;

return static function (ContainerConfigurator $container): void {
    $services = $container->services();

    $services->set('ajgl_twig_extension.breakpoint', BreakpointExtension::class)
        ->private()
        ->tag('twig.extension');
};
