<?php

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2014 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Cliff Parnitzky 2014
 * @author     Cliff Parnitzky
 * @package    Monitoring
 * @license    LGPL
 */

/**
 * Add to palette
 */
$GLOBALS['TL_DCA']['tl_settings']['palettes']['__selector__'][] = 'monitoringMailingActive';
$GLOBALS['TL_DCA']['tl_settings']['palettes']['default'] .= ';{monitoring_legend},monitoringMailingActive,monitoringTestCirculation,monitoringTestCirculationDelay,monitoringDebugMode';
$GLOBALS['TL_DCA']['tl_settings']['subpalettes']['monitoringMailingActive'] = 'monitoringAdminEmail'; 

/**
 * Add fields
 */
$GLOBALS['TL_DCA']['tl_settings']['fields']['monitoringMailingActive'] = array
(
	'label'     => &$GLOBALS['TL_LANG']['tl_settings']['monitoringMailingActive'],
	'inputType' => 'checkbox',
	'eval'      => array('submitOnChange'=>true, 'tl_class'=>'w50 m12')
);

$GLOBALS['TL_DCA']['tl_settings']['fields']['monitoringAdminEmail'] = array
(
	'label'     => &$GLOBALS['TL_LANG']['tl_settings']['monitoringAdminEmail'],
	'inputType' => 'text',
	'eval'      => array('mandatory'=>true, 'rgxp'=>'email', 'tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_settings']['fields']['monitoringTestCirculation'] = array
(
	'label'     => &$GLOBALS['TL_LANG']['tl_settings']['monitoringTestCirculation'],
	'inputType' => 'select',
	'default'   => 1,
	'options'   => array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10),
	'eval'      => array('mandatory'=>true, 'tl_class'=>'w50 clr')
);

$GLOBALS['TL_DCA']['tl_settings']['fields']['monitoringTestCirculationDelay'] = array
(
	'label'     => &$GLOBALS['TL_LANG']['tl_settings']['monitoringTestCirculationDelay'],
	'inputType' => 'text',
	'eval'      => array('mandatory'=>true, 'tl_class'=>'w50', 'minlength'=>1, 'maxlength'=>2, 'rgxp'=>'digit')
);

$GLOBALS['TL_DCA']['tl_settings']['fields']['monitoringDebugMode'] = array
(
	'label'     => &$GLOBALS['TL_LANG']['tl_settings']['monitoringDebugMode'],
	'inputType' => 'checkbox',
	'eval'      => array('tl_class'=>'w50 m12 clr')
);

?>