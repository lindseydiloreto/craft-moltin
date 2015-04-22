<?php
namespace Craft;

class Moltin_EmailsService extends Moltin_BaseService
{

	public $apiService = 'Email';

	/**
	 * Get an email.
	 *
	 * @param string $slug   Slug of the email being retrieved.
	 *
	 * @return array|null    Results of API call
	 */
	public function get($slug)
	{
		return $this->_apiCall(['Get', $slug]);
	}

	/**
	 * Get a listing of emails.
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
	 * Create an email.
	 *
	 * @param array  $data   New data for email.
	 *
	 * @return array|null    Results of API call
	 */
	public function create($data)
	{
		return $this->_apiCall(['Create', $data]);
	}

	/**
	 * Update an email.
	 *
	 * @param string $slug   Slug of the email being updated.
	 * @param array  $data   New data for email.
	 *
	 * @return array|null    Results of API call
	 */
	public function update($slug, $data)
	{
		return $this->_apiCall(['Update', $slug, $data]);
	}

	/**
	 * Delete an email.
	 *
	 * @param string $slug   Slug of the email being deleted.
	 *
	 * @return array|null    Results of API call
	 */
	public function delete($slug)
	{
		return $this->_apiCall(['Delete', $slug]);
	}

}
