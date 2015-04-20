<?php
namespace Craft;

class Moltin_ProductsService extends Moltin_BaseComponentService
{

	public $apiService = 'Product';

	/**
	 * Search for a group of products.
	 *
	 * @param array  $terms  ???
	 *
	 * @return array|null    Results of API call
	 */
	public function search($terms = array())
	{
		return $this->_apiCall(['Search', $terms]);
	}

	/**
	 * Get modifiers of a specific product.
	 *
	 * @param int    $id     ID of the product whose modifiers are being retrieved.
	 *
	 * @return array|null    Results of API call
	 */
	public function modifiers($id)
	{
		return $this->_apiCall(['Modifiers', $id]);
	}

	/**
	 * Get variations of a specific product.
	 *
	 * @param int    $id     ID of the product whose variations are being retrieved.
	 *
	 * @return array|null    Results of API call
	 */
	public function variations($id)
	{
		return $this->_apiCall(['Variations', $id]);
	}

}
