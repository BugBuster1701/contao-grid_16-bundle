<?php  

/**
 * Contao Open Source CMS, Copyright (C) 2005-2015 Leo Feyer
 *
 * @copyright  Glen Langer 2012..2016 <http://contao.ninja>
 * @author     Glen Langer (BugBuster)
 * @package    contao-grid_16-bundle
 * @license    LGPL
 * @filesource
 * @see        https://github.com/BugBuster1701/contao-grid_16-bundle
 */


/**
 * Run in a custom namespace, so the class can be replaced
 */
namespace BugBuster\Grid1140; 
 
/**
 * Class Grid1140Dca for Hook loadDataContainer
 * @author Data
 *
 */
class Grid1140Dca extends \BackendModule 
{
	 /**
    * Current object instance
    * @var object
    */
    protected static $instance = null;
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->import('BackendUser', 'User');
        parent::__construct();
    }
    
    
    protected function compile()
    {
        
    } 
    
    /**
     * Return the current object instance (Singleton)
     * @return Grid1140Dca
     */
    public static function getInstance()
    {
        if (self::$instance === null)
        {
            self::$instance = new Grid1140Dca();
        }
    
        return self::$instance;
    } 
    
    /**
     * Hook loadDataContainer
     * @param string $strName    dca
     */
    public function loadDataContainerGrid1140($strName)
    {
    	if ($strName == 'tl_layout')
    	{
    		//add the new css files
    		//array_push($GLOBALS['TL_DCA']['tl_layout']['fields']['framework']['options'], 'grid-1140-16-percent.css', 'grid-1140-16-percent-responsive.css', 'grid-1120-16-pixel.css', 'grid-1120-16-pixel-responsive.css');
    		
    	    //	$GLOBALS['TL_DCA']['tl_module']['palettes']['eventreader'] = str_replace('{protected_legend:hide}', '{comment_legend:hide},com_template;{protected_legend:hide}', $GLOBALS['TL_DCA']['tl_module']['palettes']['eventreader']);
    	    $GLOBALS['TL_DCA']['tl_layout']['palettes']['default'] = str_replace('combineScripts', 'combineScripts;frameworkGrid16,loadingOrderGrid16', $GLOBALS['TL_DCA']['tl_layout']['palettes']['default']);
    	    
    	}
    }

}
