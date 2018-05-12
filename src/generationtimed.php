<?php

class GeNERATIONTiMED
{
    const DEFAULT_VAR_NAME = 'GT';

    private $decimalPlaces;

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
