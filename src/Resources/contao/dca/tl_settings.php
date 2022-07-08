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

$GLOBALS['TL_DCA']['tl_settings']['fields']['openweather_place'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_settings']['openweather_place'],
    'exclude' => true,
    'inputType' => 'text',
    'eval' => ['maxlength' => 255, 'tl_class' => 'w50 clr'],
];

$GLOBALS['TL_DCA']['tl_settings']['fields']['openweather_state_code'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_settings']['openweather_state_code'],
    'exclude' => true,
    'inputType' => 'text',
    'eval' => ['maxlength' => 255, 'tl_class' => 'w50'],
];

PaletteManipulator::create()
    ->addLegend('openweather_legend', 'chmod_legend', PaletteManipulator::POSITION_AFTER)
    ->addField('openweather_api_key', 'openweather_legend', PaletteManipulator::POSITION_APPEND)
    ->addField('openweather_place', 'openweather_api_key', PaletteManipulator::POSITION_AFTER)
    ->addField('openweather_state_code', 'openweather_place', PaletteManipulator::POSITION_AFTER)
    ->applyToPalette('default', 'tl_settings')
;


// http://api.openweathermap.org/geo/1.0/direct?q={city name},{state code},{country code}&limit={limit}&appid={API key}
