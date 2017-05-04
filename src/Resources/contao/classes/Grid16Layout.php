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
 * Class Grid16Layout for Hook getPageLayout
 * @author Data
 *
 */
class Grid16Layout extends \PageRegular  
{
	 
    
    /**
     * Hook loadDataContainer
     * @param string $strName    dca
     */
    public function addGrid16CSS(\PageModel $objPage, \LayoutModel &$objLayout, \PageRegular $objPageRegular)
    {
    	// $objLayout->getRelated('pid')
    	
        $GLOBALS['TL_CSS'][] = 'assets/contao-grid16/css/grid-1120-16-pixel.min.css';
        log_message(print_r($objLayout,true),'grid16.log');
        return $objLayout;
    }

}
