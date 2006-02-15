<?php
/**
 * @package Execution
 * @version //autogen//
 * @copyright Copyright (C) 2005, 2006 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */

/**
 * Thrown when the Execution framework was not initialized when cleanExit()
 * was called.
 * 
 * @package Execution
 */
class ezcExecutionNotInitializedException extends ezcExecutionException
{
    function __construct()
    {
        parent::__construct( "The Execution mechanism was not initalized." );
    }
}
?>