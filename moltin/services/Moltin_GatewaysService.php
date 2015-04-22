<?php
namespace Craft;

class Moltin_GatewaysService extends Moltin_BaseService
{

	public $apiService = 'Gateway';

	/**
	 * Get a gateway.
	 *
	 * @param string  $slug  Slug of gateway.
	 *
	 * @return array|null    Results of API call
	 */
	public function get($slug)
	{
		return $this->_apiCall(['Get', $slug]);
	}

	/**
	 * Get a listing of gateways.
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
	 * @param string  $slug  Slug of gateway.
	 *
	 * @return array|null    Results of API call
	 */
	public function fields($slug = null)
	{
		return $this->_apiCall(['Fields', $slug]);
	}

	/**
	 * Update a gateway.
	 *
	 * @param string  $slug  Slug of gateway.
	 * @param array  $data   New data for gateway.
	 *
	 * @return array|null    Results of API call
	 */
	public function update($slug, $data)
	{
		return $this->_apiCall(['Update', $slug, $data]);
	}

	/**
	 * Enable a gateway.
	 *
	 * @param string  $slug  Slug of gateway.
	 *
	 * @return array|null    Results of API call
	 */
	public function enable($slug)
	{
		return $this->_apiCall(['Enable', $slug]);
	}

	/**
	 * Disable a gateway.
	 *
	 * @param string  $slug  Slug of gateway.
	 *
	 * @return array|null    Results of API call
	 */
	public function disable($slug)
	{
		return $this->_apiCall(['Disable', $slug]);
	}

}
