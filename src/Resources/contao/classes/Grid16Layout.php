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
    public function addGrid16CSS(\PageModel $objPage, \LayoutModel $objLayout, \PageRegular $objPageRegular)
    {
        /*
         * vor internen laden
         * $GLOBALS['TL_CSS'][] = 'assets/contao-grid16/css/grid-1120-16-pixel.min.css';
         * nach den anderen
         * $GLOBALS['TL_HEAD']
         */      
        
        $arrFrameworkGrid16 = \StringUtil::deserialize($objLayout->frameworkGrid16);
        // Add the Grid16 CSS framework style sheets
        if (is_array($arrFrameworkGrid16))
        {
            foreach ($arrFrameworkGrid16 as $strFile)
            {
                $GLOBALS['TL_HEAD'][] = '<link rel="stylesheet" href="bundles/bugbustergrid16/' . basename($strFile, '.css') . '.min.css">';
            }
        }
        
    	//log_message(print_r($objLayout->framework,true),'grid16.log');
        //log_message(print_r($objLayout->getRelated('pid'),true),'grid16.log');

        /* geht nicht, da aus framework immer nur der basename genommen wird
         * in PageRegular::createHeaderScripts
            $arrValues = \StringUtil::deserialize($objLayout->frameworkGrid16, true);
            $arrValues[] = 'assets/contao-grid16/css/grid-1120-16-pixel.min.css';
            $objLayout->framework = serialize($arrValues);
        */
        log_message(print_r($objLayout->frameworkGrid16,true),'grid16.log');
        return $objLayout;
    }

}
