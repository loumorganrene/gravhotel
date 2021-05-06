<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/Users/Lou Morgan/Documents/handigital/formation/web-dev/xampp/htdocs/grav/user/plugins/sqlite/languages.yaml',
    'modified' => 1608612942,
    'data' => [
        'en' => [
            'PLUGIN_SQLITE' => [
                'DATABASE_ERROR' => 'The database file "%s" does not exist.',
                'UNIQUE_FIELD_ERROR' => '<br>One (or more) of the fields is required to be UNIQUE, but it already exists in the database.<br>Is the same data being added again?',
                'OTHER_SQL_ERROR' => '<br>The form data is causing a database error. Contact the site developer.',
                'DATABASE_NAME' => 'Name of database',
                'DATABASE_NAME_HELP' => 'The name of the sqlite3 file with extention',
                'DATABASE_ROUTE' => 'Route to database',
                'DATABASE_ROUTE_HELP' => 'The GRAV route to the database (relative to the \'user\' directory)',
                'DATABASE_ERROR_TITLE' => 'Database Error',
                'FILE_ERROR_1' => 'The file %s%s%s does not exist. Check that:',
                'FILE_ERROR_2' => 'the database file exists in the correct location,',
                'FILE_ERROR_3' => 'the %slocation%s and %sfilename%s are correct in the sqlite plugin configuration file.',
                'SQL_ERROR_1' => 'SQL Error',
                'SQL_ERROR_2' => 'The SQL statement between the shortcode, viz.',
                'SQL_ERROR_3' => 'generates the error.',
                'UPDATE_WHERE' => 'A where expression is mandatory (either as a parameter or as a form field) when using an "sql-update" Form action.',
                'UPDATE_ERROR' => 'The following UPDATE error was generated:<BR>%s',
                'LOGGING' => 'Turn on Logging. (Not for production!!)',
                'LOGGING_HELP' => 'Log file is appended when an error is detected in DATABASE_ROUTE, or /user/data if former fails.',
                'ALL_LOGGING' => 'Turn on All Logging.',
                'ALL_LOGGING_HELP' => 'Log file is appended when an error is detected in DATABASE_ROUTE, or /user/data if former fails.',
                'ERROR_LOGGING' => 'Turn on Error Logging.',
                'ERROR_LOGGING_HELP' => 'Log file is appended when an error is detected in DATABASE_ROUTE, or /user/data if former fails.',
                'SELECT_LOGGING' => 'Turn on Select Logging.',
                'SELECT_LOGGING_HELP' => 'Log file is appended when a SELECT stanza is sent to database.',
                'INSERT_LOGGING' => 'Turn on Insert Logging.',
                'INSERT_LOGGING_HELP' => 'Log file is appended when an INSERT stanza is sent to database.',
                'UPDATE_LOGGING' => 'Turn on Update Logging.',
                'UPDATE_LOGGING_HELP' => 'Log file is appended when an UPDATE stanza is sent to database.',
                'EXTRA_SECURITY' => 'Enable more paranoid security',
                'EXTRA_SECURITY_HELP' => 'Require explicit permission in header of page where SQL table shortcode is used'
            ]
        ]
    ]
];
