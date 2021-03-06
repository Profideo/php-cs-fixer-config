<?php

namespace Profideo\CS\Config;

use PhpCsFixer\Config;

final class Php56 extends Config
{
    public function __construct()
    {
        parent::__construct('Profideo (PHP 5.6)');
    }

    public function getRules()
    {
        $rules = [
            '@Symfony' => true,
            'array_syntax' => [
                'syntax' => 'short',
            ],
            'single_line_throw' => false
        ];

        return $rules;
    }
}
