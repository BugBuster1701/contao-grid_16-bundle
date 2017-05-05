<?php

//$GLOBALS['TL_DCA']['tl_layout']['palettes']['default'] .= ';frameworkGrid16,loadingOrderGrid16';
//wird per Hook eingebuden

$GLOBALS['TL_DCA']['tl_layout']['fields']['frameworkGrid16'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_layout']['frameworkGrid16'],
    'exclude'                 => true,
    'inputType'               => 'checkboxWizard',
    'options'                 => array('grid-1140-16-percent.css', 'grid-1140-16-percent-responsive.css', 'grid-1120-16-pixel.css', 'grid-1120-16-pixel-responsive.css'),
    'eval'                    => array('multiple'=>true, 'helpwizard'=>true),
    'reference'               => &$GLOBALS['TL_LANG']['tl_layout'],
    'sql'                     => "varchar(255) NOT NULL default ''"    
);
$GLOBALS['TL_DCA']['tl_layout']['fields']['loadingOrderGrid16'] = array
(
		'label'                   => &$GLOBALS['TL_LANG']['tl_layout']['loadingOrderGrid16'],
		'default'                 => 'external_first',
		'exclude'                 => true,
		'inputType'               => 'select',
		'options'                 => array('external_first', 'internal_first'),
		'reference'               => &$GLOBALS['TL_LANG']['tl_layout'],
		'eval'                    => array('tl_class'=>'w50'),
		'sql'                     => "varchar(16) NOT NULL default ''"
);
