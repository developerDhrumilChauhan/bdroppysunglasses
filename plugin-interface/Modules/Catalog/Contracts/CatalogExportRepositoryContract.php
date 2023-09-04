<?php
namespace Plenty\Modules\Catalog\Contracts;

use Exception;

/**
 * The CatalogExportRepositoryContract is the interface for the catalogue export repository. It allows to receive an instance of CatalogExportServiceContract to export a specific catalogue.
 */
interface CatalogExportRepositoryContract 
{

	/**
	 * Returns an instance of CatalogExportServiceContract to export a specific catalogue.
	 */
	public function exportById(
		string $id
	):CatalogExportServiceContract;

	/**
	 * Initiates the queue which exports a specific catalogue.
	 */
	public function initiateQueue(
		string $id
	);

	/**
	 * Provides the response with file attachment to download in browser
	 */
	public function download(
		string $id, 
		string $hash = "", 
		string $extension = "csv", 
		bool $public = false, 
		string $token = ""
	):array;

}