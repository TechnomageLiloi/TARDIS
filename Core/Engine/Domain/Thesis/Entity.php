<?php

namespace Liloi\Rune\Domain\Thesis;

use Liloi\Rune\Secure;
use Liloi\Stylo\Parser;
use Liloi\Tools\Entity as AbstractEntity;

/**
 * @method string getTitle()
 * @method void setTitle(string $value)
 *
 * @method string getDirectory()
 * @method void setDirectory(string $value)
 *
 * @method string getBody()
 * @method void setBody(string $value)
 */
class Entity extends AbstractEntity
{
    public function parseBody(): string
    {
        $dir = $this->getDirectory();
        $body = $this->getBody();

        $lines = [];

        foreach ($body as $f)
        {
            $ext = pathinfo($f, PATHINFO_EXTENSION);

            if($ext === 'tpl')
            {
                $lines[] = $this->render($dir . '/' . $f, [
                    'admin' => Secure::checkLogin()
                ]);
                continue;
            }

            if($ext === 'htm')
            {
                $lines[] = file_get_contents($dir . '/' . $f);
                continue;
            }

            $lines[] = Parser::parseString(file_get_contents($dir . '/' . $f));
        }

        return implode("", $lines);
    }

    public function render(string $template, array $data = []): string
    {
        // @todo: assert filename

        extract($data);

        ob_start();
        include($template);
        $output = ob_get_clean();

        return $output;
    }
}