<?php
namespace Plenty\Modules\Webshop\Template\Contracts;

use IO\Services\TemplateConfigService;

/**
 * Set configuration values from the plugin to be considered in internal functions.
 */
interface TemplateConfigRepositoryContract 
{

	/**
	 * Register an internal configuration. Available configuration keys are:
<ul>
 <li><b>currency.format</b> Format to display the currency in monetary values.</li>
 <li><b>sort.defaultSorting</b> Default item sorting criteria</li>
 <li><b>sort.defaultSortingSearch</b> Default sorting criteria when searching for items</li>
 <li><b>sorting.prioritySearch1</b> First sorting criteria when searching for items</li>
 <li><b>sorting.prioritySearch2</b> Second sorting criteria when searching for items</li>
 <li><b>sorting.prioritySearch3</b> Third sorting criteria when searching for items</li>
 <li><b>sorting.priorityCategory1</b> First sorting criteria when searching for items of a category</li>
 <li><b>sorting.priorityCategory2</b> Second sorting criteria when searching for items of a category</li>
 <li><b>sorting.priorityCategory3</b> Third sorting criteria when searching for items of a category</li>
 <li><b>sorting.dynamicInherit</b> Set to true to adopts sorting criteria from item search options to grouping of variations</li>
 <li><b>sorting.dynamicPrio1</b> First sorting criteria when grouping variations in item search results</li>
 <li><b>sorting.dynamicPrio2</b> Second sorting criteria when grouping variations in item search results</li>
 <li><b>item.name</b> Set which item name should be used in the webshop.</li>
 <li><b>item.displayName</b> Define if the item name, the variation name or both names should be displayed in the webshop.</li>
 <li><b>global.enableOldUrlPattern</b> Item urls will be served with prefix "a-{itemId}" when enabled</li>
 <li><b>language.activeLanguages</b> List of languages that are enabled for the webshop</li>
</ul>
	 */
	public function registerConfigValue(
		string $key, 
		 $value
	):TemplateConfigRepositoryContract;

}