<?php

/**
 * ViEWDLoader
 * Template loader for the ViEWD template engine
 */
class ViEWDLoader
{
    const TEMPLATE_DEFAULT_FILE_EXT = '.tpl.php';

    private $fileExt;
    private $tplDir;

    /**
     * ctor
     * @param string $tplDir  Path to the templates directory with trailing `/`
     * @param string $fileExt File extension
     */
    function __construct($tplDir, $fileExt = self::TEMPLATE_DEFAULT_FILE_EXT)
    {
        $this->tplDir = $tplDir;
        $this->fileExt = $fileExt;
    }

    /**
     * Loads a new ViEWD with the specified template
     * @param string $tplName Name of the template to load
     * @param array  $vars    Variables accessable from within the template
     * @returns ViEWD The loaded ViEWD
     */
    function load($tplName, $vars = [])
    {
        return new ViEWD($this->tplDir . $tplName . $this->fileExt, $vars);
    }
}

