<?php  

/**
 * @copyright  Glen Langer 2012..2026 <http://contao.ninja>
 * @author     Glen Langer (BugBuster)
 * @package    contao-grid_16-bundle
 * @license    LGPL
 * @filesource
 * @see        https://github.com/BugBuster1701/contao-grid_16-bundle
 */

$GLOBALS['TL_HOOKS']['loadDataContainer'][] = array('BugBuster\Grid1140\Grid1140Dca', 'loadDataContainerGrid1140');

$GLOBALS['TL_HOOKS']['getPageLayout'][] = array('BugBuster\Grid1140\Grid16Layout', 'addGrid16CSS');
