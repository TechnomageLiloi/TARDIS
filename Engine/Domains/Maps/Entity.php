<?php

namespace Liloi\BOYARD\Domains\Maps;

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
        return Manager::getItems($this);
    }

    public function getProgram(): string
    {
        $path = $this->getPath();

        if(file_exists($path . '/Index.htm'))
        {
            $html = file_get_contents($path . '/Index.htm');

            $html = str_replace('src="./', 'src="' . $this->getLink() . '/', $html);

            return $html;
        }

        if(file_exists($path . '/Index.md'))
        {
            return Parser::parseString(file_get_contents($path . '/Index.md'));
        }

        return '-';
    }
}