<?php

declare(strict_types=1);

/**
 * @copyright   Copyright (c) 2022, Webinteger Webintwicklung
 * @author      Dietrich Bojko <info@webinteger.dev>
 * @package     openweather-bundle
 * @license     LGPL
 */

use Contao\CoreBundle\DataContainer\PaletteManipulator;

$GLOBALS['TL_DCA']['tl_settings']['fields']['openweather_api_key'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_settings']['openweather_api_key'],
    'exclude' => true,
    'inputType' => 'text',
    'eval' => ['maxlength' => 255, 'tl_class' => 'w50'],
];

PaletteManipulator::create()
    ->addLegend('openweather_legend', 'chmod_legend', PaletteManipulator::POSITION_AFTER)
    ->addField('openweather_api_key', 'openweather_legend', PaletteManipulator::POSITION_APPEND)
    ->applyToPalette('default', 'tl_settings')
;
