<?php
/**
 * User Agent Generator - Test
 * @version 1.0
 * @link https://github.com/Dreyer/random-uagent
 * @author @Dreyer
 */

error_reporting( E_ALL ); 
ini_set( 'display_errors', 1 );

require 'uagent.php';

for ( $i = 0; $i < 100; $i++ )
{
    echo UAgent::random() . PHP_EOL;
};
?>