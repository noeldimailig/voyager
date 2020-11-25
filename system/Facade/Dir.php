<?php

namespace Voyager\Facade;

class Dir extends Facade
{

    /**
     * Create a new instance of class.
     * 
     * @param   array $arguments
     * @return  mixed
     */

    protected static function construct(array $arguments)
    {
        return new self(\Voyager\Util\File\Directory::class, $arguments[0]);
    }

    /**
     * Return the arguments to be provided while calling the method.
     * 
     * @param   array $arguments
     * @return  mixed
     */

    protected static function argument(array $arguments)
    {
        array_shift($arguments);
        return $arguments;
    }

}