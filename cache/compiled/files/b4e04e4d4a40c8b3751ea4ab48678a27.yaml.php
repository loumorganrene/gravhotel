<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/Users/Lou Morgan/Documents/handigital/formation/web-dev/xampp/htdocs/grav/user/plugins/sqlite/blueprints.yaml',
    'modified' => 1608612942,
    'data' => [
        'name' => 'Sqlite',
        'version' => '1.5.4',
        'description' => 'Plugin to select, update and insert into an sqlite3 database',
        'icon' => 'database',
        'author' => [
            'name' => 'Richard N Hainsworth',
            'email' => 'rnhainsworth@gmail.com'
        ],
        'homepage' => 'https://github.com/finanalyst/grav-plugin-sqlite',
        'bugs' => 'https://github.com/finanalyst/grav-plugin-sqlite/issues',
        'keywords' => [
            0 => 'sqlite',
            1 => 'grav',
            2 => 'plugin'
        ],
        'readme' => 'https://github.com/finanalyst/grav-plugin-sqlite/README.md',
        'license' => 'MIT',
        'dependencies' => [
            0 => 'shortcode-core'
        ],
        'form' => [
            'fields' => [
                'database_name' => [
                    'type' => 'text',
                    'default' => 'db.sqlite3',
                    'label' => 'PLUGIN_SQLITE.DATABASE_NAME',
                    'help' => 'PLUGIN_SQLITE.DATABASE_NAME_HELP'
                ],
                'database_route' => [
                    'type' => 'text',
                    'default' => 'data',
                    'label' => 'PLUGIN_SQLITE.DATABASE_ROUTE',
                    'help' => 'PLUGIN_SQLITE.DATABASE_ROUTE_HELP'
                ],
                'extra_security' => [
                    'type' => 'toggle',
                    'default' => 0,
                    'highlight' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'label' => 'PLUGIN_SQLITE.EXTRA_SECURITY',
                    'help' => 'PLUGIN_SQLITE.EXTRA_SECURITY_HELP'
                ],
                'logging' => [
                    'type' => 'toggle',
                    'highlight' => 0,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'label' => 'PLUGIN_SQLITE.LOGGING',
                    'help' => 'PLUGIN_SQLITE.LOGGING_HELP'
                ],
                'log_check' => [
                    'type' => 'conditional',
                    'condition' => 'config.plugins.sqlite.logging',
                    'fields' => [
                        'all_logging' => [
                            'type' => 'toggle',
                            'highlight' => 0,
                            'default' => 0,
                            'options' => [
                                1 => 'Enabled',
                                0 => 'Disabled'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ],
                            'label' => 'PLUGIN_SQLITE.ALL_LOGGING',
                            'help' => 'PLUGIN_SQLITE.ALL_LOGGING_HELP'
                        ]
                    ]
                ],
                'discrete_logging' => [
                    'type' => 'conditional',
                    'condition' => 'config.plugins.sqlite.logging and not config.plugins.sqlite.all_logging ',
                    'fields' => [
                        'error_logging' => [
                            'type' => 'toggle',
                            'highlight' => 0,
                            'default' => 0,
                            'options' => [
                                1 => 'Enabled',
                                0 => 'Disabled'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ],
                            'label' => 'PLUGIN_SQLITE.ERROR_LOGGING',
                            'help' => 'PLUGIN_SQLITE.ERROR_LOGGING_HELP'
                        ],
                        'select_logging' => [
                            'type' => 'toggle',
                            'highlight' => 0,
                            'default' => 0,
                            'options' => [
                                1 => 'Enabled',
                                0 => 'Disabled'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ],
                            'label' => 'PLUGIN_SQLITE.SELECT_LOGGING',
                            'help' => 'PLUGIN_SQLITE.SELECT_LOGGING_HELP'
                        ],
                        'insert_logging' => [
                            'type' => 'toggle',
                            'highlight' => 0,
                            'default' => 0,
                            'options' => [
                                1 => 'Enabled',
                                0 => 'Disabled'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ],
                            'label' => 'PLUGIN_SQLITE.INSERT_LOGGING',
                            'help' => 'PLUGIN_SQLITE.INSERT_LOGGING_HELP'
                        ],
                        'update_logging' => [
                            'type' => 'toggle',
                            'highlight' => 0,
                            'default' => 0,
                            'options' => [
                                1 => 'Enabled',
                                0 => 'Disabled'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ],
                            'label' => 'PLUGIN_SQLITE.UPDATE_LOGGING',
                            'help' => 'PLUGIN_SQLITE.UPDATE_LOGGING_HELP'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
