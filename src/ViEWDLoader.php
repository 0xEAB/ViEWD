<?php
//          Copyright Elias Batek 2016 - 2018.
// Distributed under the Boost Software License, Version 1.0.
//    (See accompanying file LICENSE_1_0.txt or copy at
//          https://www.boost.org/LICENSE_1_0.txt)

namespace Voidblaster\ViEWD;

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

