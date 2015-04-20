<?php
namespace Craft;

class Moltin_LanguagesService extends Moltin_BaseComponentService
{

	public $apiService = 'Language';

	/**
	 * Set which language to use.
	 *
	 * @param string  $code  Language code.
	 *
	 * @return array|null    Results of API call
	 */
	public function set($code)
	{
		return $this->_apiCall(['Set', $code]);
	}

}
