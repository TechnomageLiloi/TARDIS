<?php

namespace Liloi\TARDIS\Exceptions;

use Liloi\Judex\ExtendedException;

/**
 * Extend from {@link JudexException} for other programmers to use.
 *
 * @package Exceptions
 */
class GeneralException extends ExtendedException
{
    /**
     * Exception message.
     *
     * @var string
     */
    protected $defaultMessage = 'General Rune exception.';

    /**
     * Exception code.
     *
     * @var int|string
     */
    protected $defaultCode = 0x101;
}