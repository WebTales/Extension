<?php
return array(


    /**
     * Template definitions
     */

    'templates' => array(
        'themes' => array(
            'new' => array(
                'label' => 'New',
                'basePath' => realpath(__DIR__ . '/../theme/new'),
                'css' => array(
                    '/css/new.css',
                ),
                'js' => array(
                    '/js/new.js',
                ),
            ),
        ),
    ),
    'namespaces_api' => array(
        'MyExtension',
    ),
);