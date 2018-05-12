<?php
//          Copyright Elias Batek 2016 - 2018.
// Distributed under the Boost Software License, Version 1.0.
//    (See accompanying file LICENSE_1_0.txt or copy at
//          https://www.boost.org/LICENSE_1_0.txt)

/**
 * ViEWD
 * A lightweight PHP template engine
 */
class ViEWD
{
    private $file;
    private $vars;

    /**
     * ctor
     * @param string $file Path of the template file
     * @param array  $vars Variables accessable from within the template
     */
    public function __construct($file, $vars = [])
    {
        $this->file = $file;
        $this->vars = $vars;
    }

    /**
     * Binds a variable to the specified template variable,
     * so it can be access from within the template
     * @param string $name Name
     * @param mixed  $var  Variable
     */
    public function bind($name, &$var)
    {
        $this->vars[$name] =& $var;
    }

    /**
     * @returns
     */
    function calcPageGenerationTime()
    {
        round(microtime(true) - $_SERVER['REQUEST_TIME'], 3);
    }

    /**
     * Prints the  ViEWD
     */
    public function print()
    {
        foreach($this->vars as $key => $value)
        {
            $$key = $value;
        }
        //$v = $this->vars;
        include $this->file;
    }

    /**
     * Sets the value of the specified template variable
     * that can be access from within the template
     * @param string $name Name
     * @param mixed  $var  Value
     */
    public function set($name, $val)
    {
        $this->vars[$name] = $val;
    }

    /**
     * Note: Implemented using output buffering.
     */
    public function __toString()
    {
        ob_start();
        $this->print();
        return ob_get_clean();
    }
}

