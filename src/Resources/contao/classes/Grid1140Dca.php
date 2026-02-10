<?php  

/**
 * @copyright  Glen Langer 2012..2026 <http://contao.ninja>
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
class Grid1140Dca extends \Contao\BackendModule 
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
        //$this->import('BackendUser', 'User');
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
    		//add the grid16 fields
    	    $GLOBALS['TL_DCA']['tl_layout']['palettes']['default'] = str_replace('combineScripts', 'combineScripts;frameworkGrid16,loadingOrderGrid16', $GLOBALS['TL_DCA']['tl_layout']['palettes']['default']);
    	    
    	}
    }

}
