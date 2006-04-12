<?php
/**
 * @package UserInput
 * @version //autogen//
 * @copyright Copyright (C) 2005, 2006 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */

/**
 * Exception that is thrown when an invalid definition array is used.
 *
 * @package UserInput
 * @version //autogen//
 */
class ezcInputFormInvalidDefinitionException extends ezcInputFormException
{
    function __construct( $validationMessage )
    {
        parent::__construct( "Invalid definition array: {$validationMessage}." );
    }
}
?>