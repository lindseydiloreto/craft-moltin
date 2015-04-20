<?php
namespace Craft;

class Moltin_AddressesService extends Moltin_BaseService
{

	public $apiService = 'Address';

	/**
	 * Get an address.
	 *
	 * @param int    $customer  ID of the customer of address.
	 * @param int    $id        ID of the address being retrieved.
	 *
	 * @return array|null    Results of API call
	 */
	public function get($customer, $id)
	{
		return $this->_apiCall(['Get', $customer, $id]);
	}

	/**
	 * Create an address.
	 *
	 * @param int    $customer  ID of the customer of address.
	 * @param array  $data      New data for address.
	 *
	 * @return array|null    Results of API call
	 */
	public function create($customer, $data)
	{
		return $this->_apiCall(['Create', $customer, $data]);
	}

	/**
	 * Update an address.
	 *
	 * @param int    $customer  ID of the customer of address.
	 * @param int    $id        ID of the address being updated.
	 * @param array  $data      New data for address.
	 *
	 * @return array|null    Results of API call
	 */
	public function update($customer, $id, $data)
	{
		return $this->_apiCall(['Update', $customer, $id, $data]);
	}

	/**
	 * Delete an address.
	 *
	 * @param int    $customer  ID of the customer of address.
	 * @param int    $id        ID of the address being deleted.
	 *
	 * @return array|null    Results of API call
	 */
	/*
	public function delete($customer, $id)
	{
		return $this->_apiCall(['Delete', $customer, $id]);
	}
	*/

	/**
	 * Find an array of addresses.
	 *
	 * @param int    $customer  ID of the customer of address.
	 * @param array  $terms     ???
	 *
	 * @return array|null    Results of API call
	 */
	public function find($customer, $terms = array())
	{
		return $this->_apiCall(['Find', $customer, $terms]);
	}

	/**
	 * Get a listing of addresses.
	 *
	 * @param int    $customer  ID of the customer of address.
	 * @param array  $terms     ???
	 *
	 * @return array|null    Results of API call
	 */
	public function listing($customer, $terms = array())
	{
		return $this->_apiCall(['Listing', $customer, $terms]);
	}

	/**
	 * ???
	 *
	 * @param int    $customer  ID of the customer of address.
	 * @param int    $id        ID of ???
	 *
	 * @return array|null    Results of API call
	 */
	public function fields($customer, $id = null)
	{
		return $this->_apiCall(['Fields', $customer, $id]);
	}

}
