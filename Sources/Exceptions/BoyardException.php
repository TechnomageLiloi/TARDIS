<?php

namespace Liloi\Rune\Exceptions;

use Liloi\Judex\ExtendedException;

/**
 * Extend from {@link JudexException} for other programmers to use.
 *
 * @package Exceptions
 */
class BoyardException extends ExtendedException
{
    /**
     * Exception message.
     *
     * @var string
     */
    protected $defaultMessage = 'General Boyard exception.';

    /**
     * Exception code.
     *
     * @var int|string
     */
    protected $defaultCode = 0x101;
}