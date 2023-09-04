<?php
namespace Plenty\Modules\Catalog\Contracts;


/**
 * To be written
 */
interface CatalogResultConverterContract 
{

	/**
	 * Through this a single entry of a catalog result should be added
	 */
	public function addData(
		 $data
	);

	/**
	 * Converts the data that was inserted into the specific output format
	 */
	public function getConvertedResult(
	):string;

	/**
	 * Returns the type of the converted result
	 */
	public function getType(
	):string;

	public function clear(
	);

}