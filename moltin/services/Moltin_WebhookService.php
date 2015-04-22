<?php
namespace Craft;

class Moltin_WebhookService extends Moltin_BaseService
{

	public $apiService = 'Webhook';

	/**
	 * Get a webhook.
	 *
	 * @param int    $id     ID of the webhook being retrieved.
	 *
	 * @return array|null    Results of API call
	 */
	public function get($id)
	{
		return $this->_apiCall(['Get', $id]);
	}

	/**
	 * Get a listing of webhooks.
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
	 * Create a webhook.
	 *
	 * @param array  $data   New data for webhook.
	 *
	 * @return array|null    Results of API call
	 */
	public function create($data)
	{
		return $this->_apiCall(['Create', $data]);
	}

	/**
	 * Update a webhook.
	 *
	 * @param int    $id     ID of the webhook being updated.
	 * @param array  $data   New data for webhook.
	 *
	 * @return array|null    Results of API call
	 */
	public function update($id, $data)
	{
		return $this->_apiCall(['Update', $id, $data]);
	}

	/**
	 * Delete a webhook.
	 *
	 * @param int    $id     ID of the webhook being deleted.
	 *
	 * @return array|null    Results of API call
	 */
	public function delete($id)
	{
		return $this->_apiCall(['Delete', $id]);
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
