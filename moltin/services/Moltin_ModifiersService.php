<?php
namespace Craft;

class Moltin_ModifiersService extends Moltin_BaseService
{

	public $apiService = 'Modifier';

	/**
	 * Get a modifier.
	 *
	 * @param int    $product   ID of the product of modifier.
	 * @param int    $modifier  ID of the modifier being retrieved.
	 *
	 * @return array|null    Results of API call
	 */
	public function get($product, $modifier)
	{
		return $this->_apiCall(['Get', $product, $modifier]);
	}

	/**
	 * Create a modifier.
	 *
	 * @param int    $product   ID of the product of modifier.
	 * @param array  $data      New data for modifier.
	 *
	 * @return array|null    Results of API call
	 */
	public function create($product, $data)
	{
		return $this->_apiCall(['Create', $product, $data]);
	}

	/**
	 * Update a modifier.
	 *
	 * @param int    $product   ID of the product of modifier.
	 * @param int    $modifier  ID of the modifier being updated.
	 * @param array  $data      New data for modifier.
	 *
	 * @return array|null    Results of API call
	 */
	public function update($product, $modifier, $data)
	{
		return $this->_apiCall(['Update', $product, $modifier, $data]);
	}

	/**
	 * Delete a modifier.
	 *
	 * @param int    $product   ID of the product of modifier.
	 * @param int    $modifier  ID of the modifier being deleted.
	 *
	 * @return array|null    Results of API call
	 */
	public function delete($product, $modifier)
	{
		return $this->_apiCall(['Delete', $product, $modifier]);
	}

	/**
	 * ???
	 *
	 * @param int    $product   ID of the product of modifier.
	 * @param int    $modifier  ID of ???
	 *
	 * @return array|null    Results of API call
	 */
	public function fields($product, $modifier = null)
	{
		return $this->_apiCall(['Fields', $product, $modifier]);
	}

}
