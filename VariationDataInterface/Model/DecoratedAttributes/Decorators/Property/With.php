<?php
namespace Plenty\Modules\Pim\VariationDataInterface\Model\DecoratedAttributes\Decorators\Property;

use Plenty\Modules\Property\Models\Property;

/**
 * contains lazy loaded property data
 */
abstract class With 
{
	
	/**
	 * @var Property
	 */
	public		$property;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}