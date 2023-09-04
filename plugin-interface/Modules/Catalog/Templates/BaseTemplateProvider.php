<?php
namespace Plenty\Modules\Catalog\Templates;

use Plenty\Modules\Catalog\Contracts\CatalogRuntimeConfigProviderContract;
use Plenty\Modules\Catalog\Contracts\CatalogTemplateProviderContract;
use Plenty\Modules\Catalog\Contracts\TemplateContract;

/**
 * The BaseTemplateProvider is the abstract class that should be used to implement a template provider.
 */
abstract class BaseTemplateProvider implements CatalogTemplateProviderContract

{

	/**
	 * Returns the different mapping sections including the information which data provider fills them. Each entry in the array represents a section of the catalogue UI.
	 */
	abstract public function getMappings(
	):array;

	/**
	 * Returns the filters that will be applied in each export of templates that will be booted by this provider.
	 */
	abstract public function getFilter(
	):array;

	/**
	 * Returns the callback functions that will be applied to the raw data (so before the mapping occurs) of each item in the export. Every callback function will receive an array of the raw item data and should return this array with the changes that should be applied (e.g. function (array $item){ --your code-- return $item}).
	 */
	abstract public function getPreMutators(
	):array;

	/**
	 * Returns the callback functions that will be applied to the mapped data of each item in the export. Every callback function will receive an array of the mapped item data und should return this array with the changes that should be applied (e.g. function (array $item){ --your code-- return $item}).
	 */
	abstract public function getPostMutators(
	):array;

	/**
	 * Returns a callback function that is called if a field with the specific key "sku" got mapped. The function will receive the value that got mapped, the raw data array of this item and the type of the mapped source. It should return the new value (e.g. function ($value, array $item, $mappingType){ --your code-- return $value})).
	 */
	abstract public function getSkuCallback(
	):callable;

	/**
	 * Returns an array of settings that will be displayed in the UI of each catalogue with a template that uses this provider. The selected values for all those settings can then be used in the export.
	 */
	abstract public function getSettings(
	):array;

	/**
	 * Returns an array of meta information which can be used to forward information to the export which could otherwise not be received.
	 */
	abstract public function getMetaInfo(
	):array;

}