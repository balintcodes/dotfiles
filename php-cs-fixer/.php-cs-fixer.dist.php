<?php

/**
 * To only check for issues: php vendor/bin/php-cs-fixer check --diff -v --allow-risky=yes
 * To fix issues: php vendor/bin/php-cs-fixer fix --allow-risky=yes
 */

declare(strict_types=1);

$finder = new PhpCsFixer\Finder()
    ->in(__DIR__)
    ->exclude([
        'var',
        'public',
    ]);

return new PhpCsFixer\Config()
    ->setRules([
        '@Symfony:risky'         => true,
        'binary_operator_spaces' => [
            'default'   => 'single_space',
            'operators' => [
                '=>' => 'align_by_scope',
            ],
        ],
        'blank_line_after_opening_tag' => true,
        'braces_position' => true,
        'concat_space' => [
            'spacing' => 'one',
        ],
        'date_time_immutable' => true,
        'declare_strict_types' => true,
        'final_class' => true,
        'global_namespace_import' => [
            'import_classes' => true,
        ],
        'lowercase_keywords' => true,
        'native_constant_invocation' => false,
        'native_function_invocation' => false,
        'new_expression_parentheses' => [
            'use_parentheses' => false,
        ],
        'no_unused_imports' => true,
        'no_useless_else' => true,
        'operator_linebreak' => [
            'position' => 'beginning',
        ],
        'strict_comparison' => true,
        'strict_param' => true,
        'trailing_comma_in_multiline' => [
            'elements' => [
                'arguments',
                'array_destructuring',
                'arrays',
                'match',
                'parameters',
            ],
        ],
        'yoda_style' => false,
    ])
    ->setUsingCache(false)
    ->setFinder($finder);
