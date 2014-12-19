<?php
/* This page contains all the necessary constant defined variable that will be 
 * needed all of the pages of the site. This file will be included in all the file
 * . So every file will be able to access and use these constants
 */

// Define the directory separator
defined('DS')? true : define('DS',DIRECTORY_SEPARATOR);

// Define the root directory
defined('ROOT_PATH')? true : define('ROOT_PATH',  realpath(dirname(__FILE__).DS."..".DS));


// classes folder
defined('CLASS_DIR')? true : define('CLASS_DIR','classes');


// include folder
defined('INCLUDE_DIR')? true : define('INCLUDE_DIR','inc');


// add all above directories to the include path

set_include_path(implode(PATH_SEPARATOR,array(
    realpath(ROOT_PATH.DS.CLASS_DIR),
    realpath(ROOT_PATH.DS.INCLUDE_DIR),
    get_include_path()
)));


?>
