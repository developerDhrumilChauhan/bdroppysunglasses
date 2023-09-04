<?php
namespace Plenty\Modules\ContentBuilder\Contracts;

use Plenty\Modules\ShopBuilder\Contracts\Widget as BaseWidget;

/**
 * This module is deprecated. Use module 'Shop Builder' instead.
 */
interface Widget 
{

	/**
	 * Get the html representation of the widget
	 */
	public function getPreview(
		array $widgetSettings = [], 
		array $children = []
	):string;

	/**
	 * Render the widget
	 */
	public function render(
		array $widgetSettings = [], 
		array $children = []
	):string;

}