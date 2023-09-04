<?php
namespace Plenty\Modules\Catalog\Contracts;

use Illuminate\Contracts\Support\Arrayable;

/**
 * The TemplateContract is the interface for templates. Templates are used to define a specific schema that can be used to create and configure a catalogue.
 */
interface TemplateContract 
{

	/**
	 * Returns the name of the template.
	 */
	public function getName(
	):string;

	/**
	 * Returns the type of the template.
	 */
	public function getType(
	):string;

	/**
	 * Returns the export type of the template.
	 */
	public function getExportType(
	):string;

	/**
	 * Returns the mappings of a template.
	 */
	public function getMappings(
	):array;

	/**
	 * Adds a mapping to the template. If possible, don't use this directly and let it be handled by the catalogue template provider.
	 */
	public function addMapping(
		array $mapping
	);

	public function addMutator(
		callable $callback
	);

	/**
	 * Adds a pre mutator to the template. Pre mutators are applied to the export data before the mapping occurs. If possible, don't use this directly and let it be handled by the catalogue template provider.
	 */
	public function addPreMutator(
		callable $callback
	);

	/**
	 * Adds a post mutator to the template. Post mutators are applied to the export data once the mapping occurred. If possible, don't use this directly and let it be handled by the catalogue template provider.
	 */
	public function addPostMutator(
		callable $callback
	);

	/**
	 * Returns the filters of the template.
	 */
	public function getFilter(
	):array;

	/**
	 * Adds a filter to the template. If possible, don't use this directly and let it be handled by the catalogue template provider.
	 */
	public function addFilter(
		array $filter
	);

	/**
	 * Returns the unique identifier of the template.
	 */
	public function getIdentifier(
	):string;

	public function getMutators(
	):array;

	/**
	 * Returns the pre mutators of the template.
	 */
	public function getPreMutators(
	):array;

	/**
	 * Returns the post mutators of the template.
	 */
	public function getPostMutators(
	):array;

	/**
	 * Defines the callback function that will be called after the mapping is done for a field with the key "sku".
	 */
	public function setSkuCallback(
		callable $callback
	);

	/**
	 * Retrieves the callback function that will be called after the mapping is done for a field with the key "sku".
	 */
	public function getSkuCallback(
	):callable;

	/**
	 * Adds a setting to the templates. Settings create components in the UI of catalogues which use this template. The components will provide data for the export in accordance with the user input in the catalogue. If possible, don't use this directly and let it be handled by the catalogue template provider.
	 */
	public function addSetting(
		array $setting
	);

	/**
	 * Returns the settings of a template.
	 */
	public function getSettings(
	):array;

	/**
	 * Sets the meta info for a template. Meta info is used to provide data which has to be known when working with the template. If possible, don't use this directly and let it be handled by the catalogue template provider.
	 */
	public function setMetaInfo(
		array $meta
	);

	/**
	 * Returns the meta info of a template.
	 */
	public function getMetaInfo(
	):array;

	/**
	 * Determines if this template supports preview exports
	 */
	public function isPreviewable(
	):bool;

	/**
	 * Used to activate / deactivate the possibility to export previews through this template
	 */
	public function allowPreview(
		bool $isPreviewable
	);

	public function hasRuntimeConfig(
	):bool;

	public function hasResultConverter(
	):bool;

	public function getRuntimeConfig(
	):CatalogRuntimeConfigContract;

	public function getResultConverter(
	):CatalogResultConverterContract;

	/**
	 * Fills the template via the given catalogue template provider. This method is called by the template container and should not be called manually.
	 */
	public function boot(
		CatalogTemplateProviderContract $provider
	);

	/**
	 * Returns the current boot state of the template.
	 */
	public function isBooted(
	):bool;

	public function translatedToArray(
		string $language
	):array;

	/**
	 * Get the instance as an array.
	 */
	public function toArray(
	):array;

	public function jsonSerialize(
	);

}