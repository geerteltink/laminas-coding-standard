<?php

declare(strict_types=1);

namespace VisibilityDeclaration;

abstract class ClassName
{
    protected static $foo;

    abstract protected function zim() : string;

    final public static function bar() : ClassName
    {
        // method body
    }
}
