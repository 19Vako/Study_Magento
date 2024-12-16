<?php
return [
    'remote_storage' => [
        'driver' => 'file'
    ],
    'backend' => [
        'frontName' => 'backend'
    ],
    'cache' => [
        'graphql' => [
            'id_salt' => '6bhR2NJIQBfXHGkM6PDz3lKrH5Bf7tcS'
        ],
        'allow_parallel_generation' => false,
        'frontend' => [
            'default' => [
                'id_prefix' => '69d_',
                'backend' => 'Magento\\Framework\\Cache\\Backend\\File',
                'backend_options' => [
                    'directory' => '/var/cache/magento'
                ]
            ],
            'page_cache' => [
                'id_prefix' => '69d_',
                'backend' => 'Magento\\Framework\\Cache\\Backend\\File',
                'backend_options' => [
                    'directory' => '/var/cache/magento_page_cache'
                ]
            ]
        ]
    ],
    'config' => [
        'async' => 0
    ],
    'queue' => [
        'amqp' => [
            'host' => 'rabbitmq',
            'port' => '5672',
            'user' => 'guest',
            'password' => 'guest',
            'virtualhost' => '/'
        ],
        'consumers_wait_for_messages' => 1
    ],
    'crypt' => [
        'key' => 'base64zfwLGyMKNqezLAuKO2vtUvTjblLFWFwgySTnj9hUD5c='
    ],
    'db' => [
        'table_prefix' => '',
        'connection' => [
            'default' => [
                'host' => 'db',
                'dbname' => 'magento',
                'username' => 'magento',
                'password' => 'magento',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;',
                'active' => '1',
                'driver_options' => [
                    1014 => false
                ]
            ]
        ]
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'developer',
    /*'http_cache_hosts' => [
        [
            'host' => 'varnish',
            'port' => '80'
        ]*/
   /* ],*/
    'session' => [
        'save' => 'files',
        'file' => [
            'save_path' => '/var/session/magento'
        ]
    ],
    'lock' => [
        'provider' => 'db'
    ],
    'directories' => [
        'document_root_is_pub' => true
    ],
    'cache_types' => [
        'config' => 1,
        'layout' => 1,
        'block_html' => 0,
        'collections' => 1,
        'reflection' => 1,
        'db_ddl' => 1,
        'compiled_config' => 1,
        'eav' => 1,
        'customer_notification' => 1,
        'config_integration' => 1,
        'config_integration_api' => 1,
        'graphql_query_resolver_result' => 1,
        'full_page' => 0,
        'config_webservice' => 1,
        'translate' => 1
    ],
    'downloadable_domains' => [
        'localhost'
    ],
    'install' => [
        'date' => 'Sun, 15 Dec 2024 16:48:41 +0000'
    ],
    'system' => [
        'default' => [
            'web' => [
                'unsecure' => [
                    'base_url' => 'https://app.exampleproject.test/'
                ],
                'secure' => [
                    'base_url' => 'https://app.exampleproject.test/',
                    'offloader_header' => 'X-Forwarded-Proto',
                    'use_in_frontend' => '1',
                    'use_in_adminhtml' => '1'
                ],
                'seo' => [
                    'use_rewrites' => '1'
                ]
            ],
            'dev' => [
                'static' => [
                    'sign' => '0'
                ]
            ],
            'catalog' => [
                'search' => [
                    'enable_eav_indexer' => '1'
                ]
            ],
            'system' => [
                'full_page_cache' => [
                    'caching_application' => '2',
                    'ttl' => '604800'
                ]
            ]
        ]
    ]
];
