<?php
require_once(dirname(__FILE__) . '/vendor/autoload.php');

use OLP\Base\Root;

new Root();

$userDefinedClasses = array_filter(
    get_declared_classes(),
    function($className) {
        return !call_user_func(
            array(new ReflectionClass($className), 'isInternal')
        );
    }
);
print_r($userDefinedClasses);