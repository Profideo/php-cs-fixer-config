<?php

namespace Profideo\CS\Config;

use PhpCsFixer\Config;

final class Php72 extends Config
{
    public function __construct()
    {
        parent::__construct('Profideo (PHP 7.2)');

        $this->setRiskyAllowed(true);
        // We can allow risky because we add only native_function_invocation @compiler_optimized risky rule and our
        // applications do not override these native functions.
        // We cannot allow risky for only this rule for the moment. See
        // https://github.com/FriendsOfPHP/PHP-CS-Fixer/issues/4653.
    }

    public function getRules()
    {
        $rules = [
            '@Symfony' => true,
            'array_syntax' => [
                'syntax' => 'short',
            ],
            'single_line_throw' => false,
            'native_function_invocation' => ['include' => ['@compiler_optimized'], 'scope' => 'namespaced'],
            // ⤷ Because of https://github.com/FriendsOfPHP/PHP-CS-Fixer/issues/304.
        ];

        return $rules;
    }
}
