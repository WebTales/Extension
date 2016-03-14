<?php
return array(

    /**
     * Your block definition : back-office json configuration file
     */
    'blocksDefinition' => array(
        'helloWorld' => array(
            'maxlifeTime' => 60,
            'definitionFile' => realpath(__DIR__ . "/blocks/") . '/helloWorld.json'
        )
    ),

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
                    '/js/blockConfig.js',
                ),
            ),
        ),
    ),
    'namespaces_api' => array(
        'MyExtension',
    ),
);
