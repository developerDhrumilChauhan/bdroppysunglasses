<?php
namespace Plenty\Modules\ShopBuilder\Contracts;

use Plenty\Modules\ShopBuilder\Models\Content;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * Get, create, delete und update shop builder contents.
 */
interface ContentRepositoryContract 
{

	/**
	 * Get all contents to be edited in the shop builder.
	 */
	public function getContents(
	):array;

	/**
	 * Search for contents
	 */
	public function searchContents(
		int $itemsPerPage = 20, 
		int $page = 1, 
		array $params = []
	):PaginatedResult;

	/**
	 * Get a single content.
	 */
	public function getContent(
		int $contentId, 
		int $pluginSetId = 0, 
		string $frontendLanguage = null, 
		string $versionId = ""
	):Content;

	/**
	 * Get a list of Versions of the specified content.
	 */
	public function listContentVersions(
		int $contentId, 
		int $itemsPerPage = 20, 
		string $versionIdMarker = ""
	);

	/**
	 * Restore a specific content version
	 */
	public function restoreContentVersion(
		int $contentId, 
		string $versionId, 
		int $pluginSetId = 0, 
		null $frontendLanguage = null
	);

	/**
	 * Create new content. New content will not be linked to any layout container.
	 */
	public function createContent(
		int $pluginSetId, 
		 $data, 
		string $frontendLanguage = null
	):Content;

	/**
	 * Update content.
	 */
	public function updateContent(
		int $pluginSetId, 
		int $contentId, 
		 $data, 
		string $frontendLanguage = null
	):Content;

	/**
	 * Delete content. Any connections to layout containers will be removed too.
	 */
	public function deleteContent(
		int $pluginSetId, 
		int $contentId
	);

	/**
	 * Duplicate a content and its link
	 */
	public function duplicateContent(
		int $contentId, 
		int $targetPluginSetId, 
		string $language, 
		string $containerName, 
		string $contentName
	):Content;

	/**
	 * Rebuild all contents linked to the current plugin set.
	 */
	public function rebuildContents(
		string $containerName = null, 
		int $pluginSetId = null
	):int;

}