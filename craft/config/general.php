<?php

/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/general.php
 */
$protocol = (! empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443)
    ? "https://" : "http://";
$host = $protocol . $_SERVER['SERVER_NAME'];

return array(
    'siteUrl' => $host . '/',
	'devMode' => true,
    'environmentVariables'     => [
        'environment' => getenv('ENVIRONMENT'),
        'baseUrl'    => $host . '/',
        'basePath'   => dirname(__FILE__) . '/../../public/',
    ],
);
