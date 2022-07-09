<?php

declare(strict_types=1);

use Contao\DC_Table;

$GLOBALS['TL_DCA']['tl_openweather'] = array
(
    'config' => array
    (
        'dataContainer' => DC_Table::class,
        'notCopyable' => true,
        'notEditable' => true,
        'notCreatable' => true,
        'sql' => array(
            'keys' => array(
                'id' => 'primary'
            )
        )
    ),
    'fields' => array
    (
        'id' => array
        (
            'sql' => "int(10) unsigned NOT NULL auto_increment"
        ),
        'tstamp' => array
        (
            'sql' => "int(10) unsigned NOT NULL default 0"
        ),
        'place' => array
        (
            'inputType' => 'text',
            'sql' => "varchar(255) NOT NULL default ''"
        ),
        'lat' => array
        (
            'inputType' => 'text',
            'sql' => "varchar(255) NOT NULL default ''"
        ),
        'lon' => array
        (
            'inputType' => 'text',
            'sql' => "varchar(255) NOT NULL default ''"
        ),
        'country' => array
        (
            'inputType' => 'text',
            'sql' => "varchar(255) NOT NULL default ''"
        ),
        'state' => array
        (
            'inputType' => 'text',
            'sql' => "varchar(255) NOT NULL default ''"
        )
    )
);
