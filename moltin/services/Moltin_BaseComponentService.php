<?php
namespace Craft;

class Moltin_BaseComponentService extends Moltin_BaseService
{

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
	 * @param int    $id     ID of the Moltin component being updated.
	 * @param array  $data   New data for component.
	 *
	 * @return array|null    Results of API call
	 */
	public function update($id, $data)
	{
		return $this->_apiCall(['Update', $id, $data]);
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

	/**
	 * Find an array of components.
	 *
	 * @param array  $terms  ???
	 *
	 * @return array|null    Results of API call
	 */
	public function find($terms = array())
	{
		return $this->_apiCall(['Find', $terms]);
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

}
