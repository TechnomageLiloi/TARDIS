<?php

namespace Liloi\TARDIS\API\Exercises\Collection;

use Liloi\TARDIS\Domains\Exercises\Manager as ExercisesManager;
use Liloi\TARDIS\API\Method as AbstractMethod;

/**
 * Rune API: Blueprint.Blueprints.Show
 * @package Liloi\Librarium\API\Blueprints\Show
 */
class Method extends AbstractMethod
{
    public function execute(): array
    {
        $collection = ExercisesManager::loadCollection();

        return [
            'render' => $this->render(__DIR__ . '/Template.tpl', [
                'collection' => $collection
            ])
        ];
    }
}