<?php

/*
 * AJGL Breakpoint Twig Extension Component
 *
 * Copyright (C) Antonio J. García Lagar <aj@garcialagar.es>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ajgl\Twig\Extension\Tests;

use Ajgl\Twig\Extension\BreakpointExtension;
use PHPUnit\Framework\TestCase;
use Twig\TwigFunction;

/**
 * @author Antonio J. García Lagar <aj@garcialagar.es>
 */
final class BreakpointExtensionTest extends TestCase
{
    protected BreakpointExtension $extension;

    protected function setUp(): void
    {
        $this->extension = new BreakpointExtension();
    }

    public function testGetName(): void
    {
        $this->assertSame('breakpoint', $this->extension->getName());
    }

    public function testGetFunctions(): void
    {
        $functions = $this->extension->getFunctions();
        $this->assertCount(1, $functions);
        $function = reset($functions);
        $this->assertInstanceOf(TwigFunction::class, $function);
        $callable = $function->getCallable();
        $this->assertTrue(is_array($callable));
        $this->assertCount(2, $callable);
        $this->assertSame($this->extension, $callable[0]);
        $this->assertSame('setBreakpoint', $callable[1]);
    }
}
