<!-- Autoload file -->

<?php
require_once('inc/config.php');

function my_autoloader($class_name){
    $file = CLASS_DIR."/".$class_name.".php";
    if(file_exists($file) && is_file($file)){
        require_once($file);
    }
    
}
spl_autoload_register('my_autoloader');
?>
