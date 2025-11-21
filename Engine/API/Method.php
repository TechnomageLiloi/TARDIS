<?php

namespace Liloi\TARDIS\API;

use Liloi\TARDIS\Secure;

/**
 * Abstract API method.
 *
 * @package Liloi\TARDIS\API
 */
abstract class Method
{
    /**
     * Config list.
     *
     * @todo Bad idea to store config in array - need to set Config Pool.
     * @var array
     */
    private static array $config;

    /**
     * Renders HTML template.
     *
     * @param string $template Full path to template filename.
     * @param array $data Array of variables, that would be used in template.
     * @return string Rendered HTML.
     */
    public function render(string $template, array $data = []): string
    {
        // @todo: assert filename

        extract($data);

        ob_start();
        include($template);
        $output = ob_get_clean();

        return $output;
    }

    /**
     * Gets config array.
     *
     * @return array
     */
    public static function getConfig(): array
    {
        return self::$config;
    }

    /**
     * Sets config array.
     *
     * @param array $config
     */
    public static function setConfig(array $config): void
    {
        self::$config = $config;
    }

    /**
     * @inheritDoc
     */
    abstract public function execute(): array;

    /**
     * Checks admin access; if access is not admin - raise exception.
     *
     * @throws \Exception
     */
    public function checkAccess(): void
    {
        Secure::checkAdmin();
    }
}