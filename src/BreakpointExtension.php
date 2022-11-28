<?php

/*
 * AJGL Breakpoint Twig Extension Component
 *
 * Copyright (C) Antonio J. García Lagar <aj@garcialagar.es>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ajgl\Twig\Extension;

use Composer\XdebugHandler\XdebugHandler;
use Twig\Environment;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

/**
 * @author Antonio J. García Lagar <aj@garcialagar.es>
 */
final class BreakpointExtension extends AbstractExtension
{
    public function getName(): string
    {
        return 'breakpoint';
    }

    /**
     * @return TwigFunction[]
     */
    public function getFunctions(): array
    {
        return [
            new TwigFunction('breakpoint', [$this, 'setBreakpoint'], ['needs_environment' => true, 'needs_context' => true]),
        ];
    }

    public function setBreakpoint(Environment $environment, $context): string
    {
        if ($this->isXdebugActive()) {
            $arguments = func_get_args();
            $arguments = array_slice($arguments, 2);
            xdebug_break();
        }

        return '';
    }

    private function isXdebugActive(): bool
    {
        return class_exists(XdebugHandler::class) ? XdebugHandler::isXdebugActive() : function_exists('xdebug_break');
    }
}
