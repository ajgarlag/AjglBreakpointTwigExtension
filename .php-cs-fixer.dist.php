<?php

use PhpCsFixer\Config;

$header = <<<EOF
AJGL Breakpoint Twig Extension Component

Copyright (C) Antonio J. García Lagar <aj@garcialagar.es>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.
EOF;

return (new Config())
    ->setRiskyAllowed(true)
    ->setRules(
        [
            '@Symfony' => true,
            '@Symfony:risky' => true,
            'array_syntax' => array('syntax' => 'short'),
            'fully_qualified_strict_types' => true,
            'header_comment' => array('header' => $header),
            'native_function_invocation' => false,
            'ordered_imports' => [
                'imports_order' => ['class', 'const', 'function'],
            ],
            'phpdoc_order' => true,
            'psr_autoloading' => true,
            'strict_comparison' => true,
            'strict_param' => true,
        ]
    )
    ->setFinder(
        \PhpCsFixer\Finder::create()
            ->in(__DIR__.'/src')
            ->in(__DIR__.'/tests')
    )
;
