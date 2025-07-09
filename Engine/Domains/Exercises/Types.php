<?php

namespace Liloi\TARDIS\Domains\Exercises;

class Types
{
    public const CARD = 1;

    /**
     * Radio: one correct answer.
     */
    public const RADIO = 2;

    /**
     * Check: many correct answers.
     */
    public const CHECK = 3;

    /**
     * Sentence: many type-in answers.
     */
    public const SENTENCE = 4;

    /**
     * Done: done/undone buttons.
     */
    public const DONE = 5;

    /**
     * Video and algorithm.
     */
    public const VIDEO = 6;

    /**
     * Timer type of question.
     */
    public const TIMER = 7;

    /**
     * Type list.
     *
     * @var string[]
     */
    public static $list = [
        self::CARD => 'Card',
        self::DONE => 'Done',
        self::VIDEO => 'Video',
        self::RADIO => 'Radio',
        self::CHECK => 'Check',
        self::SENTENCE => 'Sentence',
        self::TIMER => 'Timer',
    ];
}