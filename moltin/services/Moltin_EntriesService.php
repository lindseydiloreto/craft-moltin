<?php
namespace Craft;

class Moltin_EntriesService extends Moltin_BaseService
{

	public $apiService = 'Entry';

	/**
	 * Get a entry.
	 *
	 * @param ???    $flow   ???
	 * @param int    $id     ID of the entry being retrieved.
	 *
	 * @return array|null    Results of API call
	 */
	public function get($flow, $id)
	{
		return $this->_apiCall(['Get', $flow, $id]);
	}

	/**
	 * Find an array of entries.
	 *
	 * @param ???    $flow   ???
	 * @param array  $terms  ???
	 *
	 * @return array|null    Results of API call
	 */
	public function find($flow, $terms = array())
	{
		return $this->_apiCall(['Find', $flow, $terms]);
	}

	/**
	 * Get a listing of entries.
	 *
	 * @param ???    $flow   ???
	 * @param array  $terms  ???
	 *
	 * @return array|null    Results of API call
	 */
	public function listing($flow, $terms = array())
	{
		return $this->_apiCall(['Listing', $flow, $terms]);
	}

	/**
	 * Create a entry.
	 *
	 * @param ???    $flow   ???
	 * @param array  $data   New data for entry.
	 *
	 * @return array|null    Results of API call
	 */
	public function create($flow, $data)
	{
		return $this->_apiCall(['Create', $flow, $data]);
	}

	/**
	 * Update a entry.
	 *
	 * @param ???    $flow   ???
	 * @param int    $id     ID of the entry being updated.
	 * @param array  $data   New data for entry.
	 *
	 * @return array|null    Results of API call
	 */
	public function update($flow, $id, $data)
	{
		return $this->_apiCall(['Update', $flow, $id, $data]);
	}

	/**
	 * ???
	 *
	 * @param ???    $flow   ???
	 * @param int    $id     ID of ???
	 *
	 * @return array|null    Results of API call
	 */
	public function fields($flow = null, $id = null)
	{
		return $this->_apiCall(['Fields', $flow, $id]);
	}

	/**
	 * Delete a entry.
	 *
	 * @param ???    $flow   ???
	 * @param int    $id     ID of the entry being deleted.
	 *
	 * @return array|null    Results of API call
	 */
	public function delete($flow, $id)
	{
		return $this->_apiCall(['Delete', $flow, $id]);
	}

}
