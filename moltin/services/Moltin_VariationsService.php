<?php
namespace Craft;

class Moltin_VariationsService extends Moltin_BaseService
{

	public $apiService = 'Variation';

	/**
	 * Get a variation.
	 *
	 * @param int    $product   ID of the parent product of modifier.
	 * @param int    $modifier  ID of the parent modifier of variation.
	 * @param int    $id        ID of the variation being retrieved.
	 *
	 * @return array|null    Results of API call
	 */
	public function get($product, $modifier, $id)
	{
		return $this->_apiCall(['Get', $product, $modifier, $id]);
	}

	/**
	 * Create a variation.
	 *
	 * @param int    $product   ID of the parent product of modifier.
	 * @param int    $modifier  ID of the parent modifier of variation.
	 * @param array  $data      New data for variation.
	 *
	 * @return array|null    Results of API call
	 */
	public function create($product, $modifier, $data)
	{
		return $this->_apiCall(['Create', $product, $modifier, $data]);
	}

	/**
	 * Update a variation.
	 *
	 * @param int    $product   ID of the parent product of modifier.
	 * @param int    $modifier  ID of the parent modifier of variation.
	 * @param int    $id        ID of the variation being updated.
	 * @param array  $data      New data for variation.
	 *
	 * @return array|null    Results of API call
	 */
	public function update($product, $modifier, $id, $data)
	{
		return $this->_apiCall(['Update', $product, $modifier, $id, $data]);
	}

	/**
	 * Delete a variation.
	 *
	 * @param int    $product   ID of the parent product of modifier.
	 * @param int    $modifier  ID of the parent modifier of variation.
	 * @param int    $id        ID of the variation being deleted.
	 *
	 * @return array|null    Results of API call
	 */
	public function delete($product, $modifier, $id)
	{
		return $this->_apiCall(['Delete', $product, $modifier, $id]);
	}

	/**
	 * ???
	 *
	 * @param int    $product   ID of the parent product of modifier.
	 * @param int    $modifier  ID of the parent modifier of variation.
	 * @param int    $id        ID of ???
	 *
	 * @return array|null    Results of API call
	 */
	public function fields($product, $modifier, $id = null)
	{
		return $this->_apiCall(['Fields', $product, $modifier, $id]);
	}

}
