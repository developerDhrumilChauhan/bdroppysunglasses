<?php
namespace Plenty\Modules\Catalog\Contracts;

use Carbon\Carbon;
use Plenty\Modules\Catalog\Models\CatalogExportResult;

/**
 * The CatalogExportServiceContract is the interface for the catalogue export service. It allows you to configure and start the export of a catalogue.
 */
interface CatalogExportServiceContract 
{

	/**
	 * Specifies fields that should be exported in addition to the mappings configured in the catalogue.
	 */
	public function setAdditionalFields(
		array $additionalFields
	);

	public function addMutator(
		callable $mutator
	);

	/**
	 * Defines the settings that are used in the mappings and for filtering.
	 */
	public function setSettings(
		array $settings
	);

	public function setNumberOfDocumentsPerShard(
		int $numberOfDocumentsPerShard
	);

	/**
	 * Defines the amount of items that will be returned in each iteration of the export. In specific formats such as variation, it can have more results e.g. if items per page is set to 500, but variations 500 and 501 belong to the same item. In this case, variation 501 will also be returned.
	 */
	public function setItemsPerPage(
		int $itemsPerPage
	);

	/**
	 * Limits the results of items to only those that were updated after the given timestamp.
	 */
	public function setUpdatedSince(
		Carbon $timestamp
	);

	/**
	 * Returns an instance of CatalogExportResult, which can be iterated to receive the different pages of the exported data.
	 */
	public function getResult(
	):CatalogExportResult;

	public function getPreview(
	);

}