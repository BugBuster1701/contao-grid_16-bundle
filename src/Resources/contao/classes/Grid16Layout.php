<?php  

/**
 * Contao Open Source CMS, Copyright (C) 2005-2017 Leo Feyer
 *
 * @copyright  Glen Langer 2012..2017 <http://contao.ninja>
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
 * 
 * @author     Glen Langer (BugBuster)
 */
class Grid16Layout extends \PageRegular  
{
	 
    
    /**
     * Hook loadDataContainer, add Grid16 CSS
     * 
     * @param PageModel   $objPage
	 * @param LayoutModel $objLayout
	 * @param PageRegular $objPageRegular
     */
    public function addGrid16CSS(\PageModel $objPage, \LayoutModel $objLayout, \PageRegular $objPageRegular)
    {
        /*
         * vor internen laden
         * $GLOBALS['TL_CSS'][]  = 'assets/contao-grid16/css/grid-1120-16-pixel.min.css';
         * nach den anderen
         * $GLOBALS['TL_HEAD'][] = '<link ...>';
         */      
        
        $arrFrameworkGrid16 = \StringUtil::deserialize($objLayout->frameworkGrid16);
        
        // Add the Grid16 CSS framework style sheets
        if (is_array($arrFrameworkGrid16))
        {
            foreach ($arrFrameworkGrid16 as $strFile)
            {
                if ($objLayout->loadingOrderGrid16 == 'before_framework') 
                {
                    $GLOBALS['TL_CSS'][] = 'bundles/bugbustergrid16/' . basename($strFile, '.css') . '.min.css';
                }
                else 
                {
                    $GLOBALS['TL_HEAD'][] = '<link rel="stylesheet" href="bundles/bugbustergrid16/' . basename($strFile, '.css') . '.min.css">';
                }
                
            }
        }
        
        return;
    }

}
