<?php

/**
 * This file is part of payjoy/hello-world
 *
 * @copyright Copyright (c) PayJoy Inc <jason.craft@payjoy.com>. All rights reserved.
 */

declare(strict_types=1);

namespace PayJoy\HelloWorld;

/**
 * An example class to act as a starting point for developing your library
 */
class Example
{
    /**
     * Returns a greeting statement using the provided name
     */
    public function greet(string $name = 'World'): string
    {
        return "Hello, {$name}!";
    }
}
