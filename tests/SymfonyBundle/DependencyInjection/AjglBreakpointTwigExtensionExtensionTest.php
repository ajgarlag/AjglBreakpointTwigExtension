<?php

/*
 * AJGL Breakpoint Twig Extension Component
 *
 * Copyright (C) Antonio J. García Lagar <aj@garcialagar.es>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ajgl\Twig\Extension\Tests\SymfonyBundle\DependencyInjection;

use Ajgl\Twig\Extension\BreakpointExtension;
use Ajgl\Twig\Extension\SymfonyBundle\DependencyInjection\AjglBreakpointTwigExtensionExtension;
use PHPUnit\Framework\TestCase;
use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * @author Antonio J. García Lagar <aj@garcialagar.es>
 */
final class AjglBreakpointTwigExtensionExtensionTest extends TestCase
{
    protected ContainerBuilder $container;

    protected AjglBreakpointTwigExtensionExtension $extension;

    protected function setUp(): void
    {
        $this->container = new ContainerBuilder();
        $this->extension = new AjglBreakpointTwigExtensionExtension();
    }

    public function testTwigExtensionsDefinition(): void
    {
        $this->extension->load([], $this->container);
        $this->assertTrue($this->container->hasDefinition('ajgl_twig_extension.breakpoint'));
        $definition = $this->container->getDefinition('ajgl_twig_extension.breakpoint');
        $this->assertSame(
            BreakpointExtension::class,
            $definition->getClass()
        );
        $this->assertNotNull($definition->getTag('twig.extension'));
    }
}
