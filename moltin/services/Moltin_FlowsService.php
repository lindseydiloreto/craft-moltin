<?php
namespace Craft;

class Moltin_FlowsService extends Moltin_BaseService
{

	public $apiService = 'Flow';

	/**
	 * Get a component.
	 *
	 * @param int    $id     ID of the Moltin component being retrieved.
	 *
	 * @return array|null    Results of API call
	 */
	public function get($id)
	{
		return $this->_apiCall(['Get', $id]);
	}

	/**
	 * Get a listing of components.
	 *
	 * @param array  $terms  ???
	 *
	 * @return array|null    Results of API call
	 */
	public function listing($terms = array())
	{
		return $this->_apiCall(['Listing', $terms]);
	}

	/**
	 * Create a component.
	 *
	 * @param array  $data   New data for component.
	 *
	 * @return array|null    Results of API call
	 */
	public function create($data)
	{
		return $this->_apiCall(['Create', $data]);
	}

	/**
	 * Update a component.
	 *
	 * @param int    $slug   Slug of the Moltin component being updated.
	 * @param array  $data   New data for component.
	 *
	 * @return array|null    Results of API call
	 */
	public function update($slug, $data)
	{
		return $this->_apiCall(['Update', $slug, $data]);
	}

	/**
	 * ???
	 *
	 * @param int    $id     ID of ???
	 *
	 * @return array|null    Results of API call
	 */
	public function fields($id = null)
	{
		return $this->_apiCall(['Fields', $id]);
	}

	/**
	 * ???
	 *
	 * @param string $slug   ???
	 * @param array  $terms  ???
	 *
	 * @return array|null    Results of API call
	 */
	public function entries($slug = null, $terms = array())
	{
		return $this->_apiCall(['Entries', $slug, $terms]);
	}

	/**
	 * ???
	 *
	 * @return array|null    Results of API call
	 */
	public function types()
	{
		return $this->_apiCall(['Types']);
	}

	/**
	 * Delete a component.
	 *
	 * @param int    $id     ID of the Moltin component being deleted.
	 *
	 * @return array|null    Results of API call
	 */
	public function delete($id)
	{
		return $this->_apiCall(['Delete', $id]);
	}

}
