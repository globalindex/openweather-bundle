<?php

declare(strict_types=1);

use Contao\DC_Table;

$GLOBALS['TL_DCA']['tl_openweather'] = [
    'config' => [
        'dataContainer' => DC_Table::class,
        'notCopyable' => true,
        'notEditable' => true,
        'notCreatable' => true,
        'sql' => [
            'keys' => [
                'id' => 'primary'
            ]
        ]
    ],
    'fields' => [
        'id' => [
            'sql' => "int(10) unsigned NOT NULL auto_increment"
        ],
        'tstamp' => [
            'sql' => "int(10) unsigned NOT NULL default 0"
        ],
        'place' => [
            'inputType' => 'text',
            'sql' => "varchar(255) NOT NULL default ''"
        ],
        'lat' => [
            'inputType' => 'text',
            'sql' => "varchar(255) NOT NULL default ''"
        ],
        'lon' => [
            'inputType' => 'text',
            'sql' => "varchar(255) NOT NULL default ''"
        ],
        'country' => [
            'inputType' => 'text',
            'sql' => "varchar(255) NOT NULL default ''"
        ],
        'state' => [
            'inputType' => 'text',
            'sql' => "varchar(255) NOT NULL default ''"
        ]
    ],
];
