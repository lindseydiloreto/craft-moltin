<?php
namespace Craft;

class Moltin_FieldsService extends Moltin_BaseService
{

	public $apiService = 'Field';

	/**
	 * Get a flow.
	 *
	 * @param int    $id     ID of the Moltin flow being retrieved.
	 *
	 * @return array|null    Results of API call
	 */
	public function get($id)
	{
		return $this->_apiCall(['Get', $id]);
	}

	/**
	 * Create a flow.
	 *
	 * @param array  $data   New data for flow.
	 *
	 * @return array|null    Results of API call
	 */
	public function create($data)
	{
		return $this->_apiCall(['Create', $data]);
	}

	/**
	 * Update a flow.
	 *
	 * @param int    $id     ID of the Moltin flow being updated.
	 * @param array  $data   New data for flow.
	 *
	 * @return array|null    Results of API call
	 */
	public function update($id, $data)
	{
		return $this->_apiCall(['Update', $id, $data]);
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
	 * @return array|null    Results of API call
	 */
	public function types()
	{
		return $this->_apiCall(['Types']);
	}

	/**
	 * ???
	 *
	 * @param int    $flow   ???
	 * @param int    $type   ???
	 *
	 * @return array|null    Results of API call
	 */
	public function type($flow, $type)
	{
		return $this->_apiCall(['Type', $flow, $type]);
	}

	/**
	 * ???
	 *
	 * @param int    $flow   ???
	 * @param string $slug   ???
	 *
	 * @return array|null    Results of API call
	 */
	public function options($flow, $slug)
	{
		return $this->_apiCall(['Options', $flow, $slug]);
	}

	/**
	 * Delete a flow.
	 *
	 * @param int    $id     ID of the Moltin flow being deleted.
	 *
	 * @return array|null    Results of API call
	 */
	public function delete($id)
	{
		return $this->_apiCall(['Delete', $id]);
	}

}
