<?php
namespace Craft;

class Moltin_TransactionsService extends Moltin_BaseService
{

	public $apiService = 'Transaction';

	/**
	 * Get a transaction.
	 *
	 * @param int    $slug   Slug of the transaction being retrieved.
	 *
	 * @return array|null    Results of API call
	 */
	public function get($slug)
	{
		return $this->_apiCall(['Get', $slug]);
	}

	/**
	 * Get a listing of transactions.
	 *
	 * @param array  $terms  ???
	 *
	 * @return array|null    Results of API call
	 */
	public function listing($terms = array())
	{
		return $this->_apiCall(['Listing', $terms]);
	}

}
