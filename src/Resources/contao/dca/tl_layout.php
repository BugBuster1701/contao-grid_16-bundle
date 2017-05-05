<?php
// {style_legend},framework,stylesheet,external,loadingOrder,combineScripts;
// Notice: SessionHandler::gc(): ps_files_cleanup_dir: opendir(/var/lib/php/sessions) failed: Permission denied (13) in /daten/contao4go/contao439me.contaodev/vendor/symfony/symfony/src/Symfony/Component/HttpFoundation/Session/Storage/Proxy/SessionHandlerProxy.php on line 85
/*
 * 		'framework_grid16' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_layout']['framework_grid16'],
			'exclude'                 => true,
			'inputType'               => 'checkboxWizard',
			'options'                 => array('grid-1140-16-percent.css', 'grid-1140-16-percent-responsive.css', 'grid-1120-16-pixel.css', 'grid-1120-16-pixel-responsive.css'),
			'eval'                    => array('multiple'=>true, 'helpwizard'=>true),
			'reference'               => &$GLOBALS['TL_LANG']['tl_layout'],
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'loadingOrder_grid16' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_layout']['loadingOrder_grid16'],
			'default'                 => 'external_first',
			'exclude'                 => true,
			'inputType'               => 'select',
			'options'                 => array('external_first', 'internal_first'),
			'reference'               => &$GLOBALS['TL_LANG']['tl_layout'],
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "varchar(16) NOT NULL default ''"
		),
		
		'jSource' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_layout']['jSource'],
			'exclude'                 => true,
			'inputType'               => 'select',
			'options'                 => array('j_local', 'j_googleapis', 'j_fallback'),
			'eval'                    => array('tl_class'=>'w50'),
			'reference'               => &$GLOBALS['TL_LANG']['tl_layout'],
			'sql'                     => "varchar(16) NOT NULL default ''"
		),
		
		'scripts' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_layout']['scripts'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'checkboxWizard',
			'options_callback'        => array('tl_layout', 'getScriptTemplates'),
			'eval'                    => array('multiple'=>true),
			'sql'                     => "text NULL"
		),
 */
$GLOBALS['TL_DCA']['tl_layout']['palettes']['default'] .= ';frameworkGrid16,loadingOrderGrid16';

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
