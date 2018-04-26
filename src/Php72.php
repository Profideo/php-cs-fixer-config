<?php

namespace Profideo\CS\Config;

use PhpCsFixer\Config;

final class Php72 extends Config
{
    public function __construct()
    {
        parent::__construct('Profideo (PHP 7.2)');
    }

    public function getRules()
    {
        $rules = [
            '@Symfony' => true,
            'array_syntax' => [
                'syntax' => 'short',
            ],
        ];

        return $rules;
    }
}
