<?php
namespace Craft;

class Moltin_CurrenciesService extends Moltin_BaseComponentService
{

	public $apiService = 'Currency';

	/**
	 * Set which currency to use.
	 *
	 * @param string  $code  Currency code (ie: USD).
	 *
	 * @return array|null    Results of API call
	 */
	public function set($code)
	{
		return $this->_apiCall(['Set', $code]);
	}

}
