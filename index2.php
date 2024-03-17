<?php


define('JOOMLA_MINIMUM_PHP', '7.2.5');

if (version_compare(PHP_VERSION, JOOMLA_MINIMUM_PHP, '<')) {
    die(
        str_replace(
            '{{phpversion}}',
            JOOMLA_MINIMUM_PHP,
            file_get_contents(dirname(__FILE__) . '/templates/system/incompatible.html')
        )
    );
}


define('_JEXEC', 1);

require_once dirname(__FILE__) . '/includes/app.php';
