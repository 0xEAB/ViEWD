<?php
//          Copyright Elias Batek 2016 - 2018.
// Distributed under the Boost Software License, Version 1.0.
//    (See accompanying file LICENSE_1_0.txt or copy at
//          https://www.boost.org/LICENSE_1_0.txt)

/**
 * GeNERATIONTiMED
 * A page generation time plugin for the ViEWD template engine
 */
class GeNERATIONTiMED
{
    const DEFAULT_VAR_NAME = 'GT';

    private $decimalPlaces;

    /**
     * ctor
     * @param int $decimalPlaces Decimal places count used for output
     */
    function __construct($decimalPlaces = 2)
    {
        $this->decimalPlaces = $decimalPlaces;
    }

    /*
     * @returns float How much time has passed (in sec) since the page has been requested
     */
    function calcPageGenerationTime()
    {
        return round(microtime(true) - $_SERVER['REQUEST_TIME_FLOAT'], $this->decimalPlaces);
    }

    /*
     * Binds the calcPageGenerationTime to the passed ViEWD
     * @param ViEWD  $viewd ViEWD to bind the function to
     * @param string $name  Name of the template variable to bind the function to
     */
    function bindToViEWD($viewd, $name = self::DEFAULT_VAR_NAME)
    {
        $viewd->set($name, function()
        {
            return $this->calcPageGenerationTime();
        });
    }
}

