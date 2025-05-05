<?php

namespace Liloi\BOYARD\Domains\Areas;

use Liloi\Tools\Entity as AbstractEntity;
use Liloi\Stylo\Parser;

/**
 * @method string getLink()
 * @method void setLink(string $value)
 *
 * @method string getPath()
 * @method void setPath(string $value)
 *
 * @todo: add tests
 */
class Entity extends AbstractEntity
{
    public function getItems(): array
    {
        $files = [];

        $link = $this->getLink();
        $rows = scandir($this->getPath());

        foreach ($rows as $row)
        {
            if(in_array($row, ['.', '..']))
            {
                continue;
            }

            $files[] = [
                'name' => $row,
                'link' => $link . '/' . $row,
            ];
        }

        return $files;
    }
}